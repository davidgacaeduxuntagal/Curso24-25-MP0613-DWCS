<?php

/**
 * RequestHandler.php - Jaxon RequestPlugin Handler
 *
 * This class processes an incoming jaxon request.
 *
 * @package jaxon-core
 * @author Jared White
 * @author J. Max Wilson
 * @author Joseph Woolley
 * @author Steffen Konerow
 * @author Thierry Feuzeu <thierry.feuzeu@gmail.com>
 * @copyright Copyright (c) 2005-2007 by Jared White & J. Max Wilson
 * @copyright Copyright (c) 2008-2010 by Joseph Woolley, Steffen Konerow, Jared White  & J. Max Wilson
 * @copyright 2016 Thierry Feuzeu <thierry.feuzeu@gmail.com>
 * @license https://opensource.org/licenses/BSD-3-Clause BSD 3-Clause License
 * @link https://github.com/jaxon-php/jaxon-core
 */

namespace Jaxon\Request\Handler;

use Jaxon\Di\Container;
use Jaxon\Exception\RequestException;
use Jaxon\Plugin\Manager\PluginManager;
use Jaxon\Plugin\RequestHandlerInterface;
use Jaxon\Plugin\Response\DataBag\DataBagPlugin;
use Jaxon\Request\Upload\UploadHandlerInterface;
use Jaxon\Response\Manager\ResponseManager;
use Jaxon\Response\ResponseInterface;

use Exception;

use function call_user_func;
use function call_user_func_array;

class RequestHandler
{
    /**
     * @var Container
     */
    private $di;

    /**
     * The plugin manager.
     *
     * @var PluginManager
     */
    private $xPluginManager;

    /**
     * The response manager.
     *
     * @var ResponseManager
     */
    private $xResponseManager;

    /**
     * The callbacks to run while processing the request
     *
     * @var CallbackManager
     */
    private $xCallbackManager;

    /**
     * @var UploadHandlerInterface
     */
    private $xUploadHandler;

    /**
     * The data bag response plugin
     *
     * @var DataBagPlugin
     */
    private $xDataBagPlugin;

    /**
     * The request plugin that is able to process the current request
     *
     * @var RequestHandlerInterface
     */
    private $xRequestPlugin = null;

    /**
     * The constructor
     *
     * @param Container $di
     * @param PluginManager $xPluginManager
     * @param ResponseManager $xResponseManager
     * @param CallbackManager $xCallbackManager
     * @param DataBagPlugin $xDataBagPlugin
     */
    public function __construct(Container $di, PluginManager $xPluginManager, ResponseManager $xResponseManager,
        CallbackManager $xCallbackManager, DataBagPlugin $xDataBagPlugin)
    {
        $this->di = $di;
        $this->xPluginManager = $xPluginManager;
        $this->xResponseManager = $xResponseManager;
        $this->xCallbackManager = $xCallbackManager;
        $this->xDataBagPlugin = $xDataBagPlugin;
    }

    /**
     * These are the pre-request processing callbacks passed to the Jaxon library.
     *
     * @param bool $bEndRequest If set to true, the request processing is interrupted.
     *
     * @return void
     * @throws RequestException
     */
    public function onBefore(bool &$bEndRequest)
    {
        $xTarget = $this->xRequestPlugin->getTarget();
        // Call the user defined callback
        foreach($this->xCallbackManager->getBeforeCallbacks() as $xCallback)
        {
            $xReturn = call_user_func_array($xCallback, [$xTarget, &$bEndRequest]);
            if($xReturn instanceof ResponseInterface)
            {
                $this->xResponseManager->append($xReturn);
            }
            if($bEndRequest)
            {
                return;
            }
        }
    }

    /**
     * These are the post-request processing callbacks passed to the Jaxon library.
     *
     * @return void
     * @throws RequestException
     */
    public function onAfter(bool $bEndRequest)
    {
        foreach($this->xCallbackManager->getAfterCallbacks() as $xCallback)
        {
            $xReturn = call_user_func_array($xCallback,
                [$this->xRequestPlugin->getTarget(), $bEndRequest]);
            if($xReturn instanceof ResponseInterface)
            {
                $this->xResponseManager->append($xReturn);
            }
        }
    }

    /**
     * These callbacks are called whenever an invalid request is processed.
     *
     * @param RequestException $xException
     *
     * @return void
     * @throws RequestException
     */
    public function onInvalid(RequestException $xException)
    {
        foreach($this->xCallbackManager->getInvalidCallbacks() as $xCallback)
        {
            $xReturn = call_user_func($xCallback, $xException);
            if($xReturn instanceof ResponseInterface)
            {
                $this->xResponseManager->append($xReturn);
            }
        }
    }

    /**
     * These callbacks are called whenever an invalid request is processed.
     *
     * @param Exception $xException
     *
     * @return void
     * @throws RequestException
     */
    public function onError(Exception $xException)
    {
        foreach($this->xCallbackManager->getErrorCallbacks() as $xCallback)
        {
            $xReturn = call_user_func($xCallback, $xException);
            if($xReturn instanceof ResponseInterface)
            {
                $this->xResponseManager->append($xReturn);
            }
        }
    }

    /**
     * Check if the current request can be processed
     *
     * Calls each of the request plugins and determines if the current request can be processed by one of them.
     *
     * @return bool
     */
    public function canProcessRequest(): bool
    {
        $this->xUploadHandler = $this->di->getUploadHandler();

        // Return true if the request plugin was already found
        if($this->xRequestPlugin !== null)
        {
            return true;
        }

        // The HTTP request
        $xRequest = $this->di->getRequest();
        // Find a plugin to process the request
        foreach($this->xPluginManager->getRequestHandlers() as $sClassName)
        {
            if($sClassName::canProcessRequest($xRequest))
            {
                $this->xRequestPlugin = $this->di->g($sClassName);
                $this->xRequestPlugin->setTarget($xRequest);
                return true;
            }
        }

        // Check if the upload plugin is enabled
        if($this->xUploadHandler === null)
        {
            return false;
        }

        // If no other plugin than the upload plugin can process the request,
        // then it is an HTTP (not ajax) upload request
        $this->xUploadHandler->isHttpUpload();
        return $this->xUploadHandler->canProcessRequest($xRequest);
    }

    /**
     * Process the current request and handle errors and exceptions.
     *
     * @return void
     * @throws RequestException
     */
    private function _processRequest()
    {
        // The HTTP request
        $xRequest = $this->di->getRequest();
        // Process uploaded files, if the upload plugin is enabled
        if($this->xUploadHandler !== null && $this->xUploadHandler->canProcessRequest($xRequest))
        {
            $this->xUploadHandler->processRequest($xRequest);
        }
        // Process the request
        if(($this->xRequestPlugin))
        {
            $xResponse = $this->xRequestPlugin->processRequest();
            if(($xResponse))
            {
                $this->xResponseManager->append($xResponse);
            }
            // Process the databag
            $this->xDataBagPlugin->writeCommand();
        }
    }

    /**
     * Process the current request.
     *
     * Calls each of the request plugins to request that they process the current request.
     * If any plugin processes the request, it will return true.
     *
     * @return void
     * @throws RequestException
     */
    public function processRequest()
    {
        // Check if there is a plugin to process this request
        if(!$this->canProcessRequest())
        {
            return;
        }

        try
        {
            $bEndRequest = false;
            // Handle before processing event
            if(($this->xRequestPlugin))
            {
                $this->onBefore($bEndRequest);
            }
            if($bEndRequest)
            {
                return;
            }

            $this->_processRequest();

            // Handle after processing event
            if(($this->xRequestPlugin))
            {
                $this->onAfter($bEndRequest);
            }
        }
        // An exception was thrown while processing the request.
        // The request missed the corresponding handler function,
        // or an error occurred while attempting to execute the handler.
        catch(RequestException $e)
        {
            $this->xResponseManager->error($e->getMessage());
            $this->onInvalid($e);
            throw $e;
        }
        catch(Exception $e)
        {
            $this->xResponseManager->error($e->getMessage());
            $this->onError($e);
            throw $e;
        }

        // Print the debug messages
        $this->xResponseManager->printDebug();
    }
}
