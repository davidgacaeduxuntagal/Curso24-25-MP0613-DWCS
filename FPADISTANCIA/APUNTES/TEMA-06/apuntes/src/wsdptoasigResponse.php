<?php

namespace Clases;

class wsdptoasigResponse
{

    /**
     * @var ArrayOfClaseDptoAsig $wsdptoasigResult
     */
    protected $wsdptoasigResult = null;

    /**
     * @param ArrayOfClaseDptoAsig $wsdptoasigResult
     */
    public function __construct($wsdptoasigResult)
    {
      $this->wsdptoasigResult = $wsdptoasigResult;
    }

    /**
     * @return ArrayOfClaseDptoAsig
     */
    public function getWsdptoasigResult()
    {
      return $this->wsdptoasigResult;
    }

    /**
     * @param ArrayOfClaseDptoAsig $wsdptoasigResult
     * @return \Clases\wsdptoasigResponse
     */
    public function setWsdptoasigResult($wsdptoasigResult)
    {
      $this->wsdptoasigResult = $wsdptoasigResult;
      return $this;
    }

}
