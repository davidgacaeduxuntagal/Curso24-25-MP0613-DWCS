<?php

namespace Clases;

class wsdatosasigResponse
{

    /**
     * @var ArrayOfClaseDatosAsig $wsdatosasigResult
     */
    protected $wsdatosasigResult = null;

    /**
     * @param ArrayOfClaseDatosAsig $wsdatosasigResult
     */
    public function __construct($wsdatosasigResult)
    {
      $this->wsdatosasigResult = $wsdatosasigResult;
    }

    /**
     * @return ArrayOfClaseDatosAsig
     */
    public function getWsdatosasigResult()
    {
      return $this->wsdatosasigResult;
    }

    /**
     * @param ArrayOfClaseDatosAsig $wsdatosasigResult
     * @return \Clases\wsdatosasigResponse
     */
    public function setWsdatosasigResult($wsdatosasigResult)
    {
      $this->wsdatosasigResult = $wsdatosasigResult;
      return $this;
    }

}
