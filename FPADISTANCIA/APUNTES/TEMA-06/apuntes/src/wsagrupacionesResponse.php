<?php

namespace Clases;

class wsagrupacionesResponse
{

    /**
     * @var ArrayOfClaseAgrupaciones $wsagrupacionesResult
     */
    protected $wsagrupacionesResult = null;

    /**
     * @param ArrayOfClaseAgrupaciones $wsagrupacionesResult
     */
    public function __construct($wsagrupacionesResult)
    {
      $this->wsagrupacionesResult = $wsagrupacionesResult;
    }

    /**
     * @return ArrayOfClaseAgrupaciones
     */
    public function getWsagrupacionesResult()
    {
      return $this->wsagrupacionesResult;
    }

    /**
     * @param ArrayOfClaseAgrupaciones $wsagrupacionesResult
     * @return \Clases\wsagrupacionesResponse
     */
    public function setWsagrupacionesResult($wsagrupacionesResult)
    {
      $this->wsagrupacionesResult = $wsagrupacionesResult;
      return $this;
    }

}
