<?php

namespace Clases;

class wsdptocenResponse
{

    /**
     * @var ArrayOfClaseDptoCen $wsdptocenResult
     */
    protected $wsdptocenResult = null;

    /**
     * @param ArrayOfClaseDptoCen $wsdptocenResult
     */
    public function __construct($wsdptocenResult)
    {
      $this->wsdptocenResult = $wsdptocenResult;
    }

    /**
     * @return ArrayOfClaseDptoCen
     */
    public function getWsdptocenResult()
    {
      return $this->wsdptocenResult;
    }

    /**
     * @param ArrayOfClaseDptoCen $wsdptocenResult
     * @return \Clases\wsdptocenResponse
     */
    public function setWsdptocenResult($wsdptocenResult)
    {
      $this->wsdptocenResult = $wsdptocenResult;
      return $this;
    }

}
