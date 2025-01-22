<?php

namespace Clases;

class wsdatosplanResponse
{

    /**
     * @var ArrayOfClaseDatosPlan $wsdatosplanResult
     */
    protected $wsdatosplanResult = null;

    /**
     * @param ArrayOfClaseDatosPlan $wsdatosplanResult
     */
    public function __construct($wsdatosplanResult)
    {
      $this->wsdatosplanResult = $wsdatosplanResult;
    }

    /**
     * @return ArrayOfClaseDatosPlan
     */
    public function getWsdatosplanResult()
    {
      return $this->wsdatosplanResult;
    }

    /**
     * @param ArrayOfClaseDatosPlan $wsdatosplanResult
     * @return \Clases\wsdatosplanResponse
     */
    public function setWsdatosplanResult($wsdatosplanResult)
    {
      $this->wsdatosplanResult = $wsdatosplanResult;
      return $this;
    }

}
