<?php

namespace Clases;

class wsplanesasigResponse
{

    /**
     * @var ArrayOfClasePlanesAsig $wsplanesasigResult
     */
    protected $wsplanesasigResult = null;

    /**
     * @param ArrayOfClasePlanesAsig $wsplanesasigResult
     */
    public function __construct($wsplanesasigResult)
    {
      $this->wsplanesasigResult = $wsplanesasigResult;
    }

    /**
     * @return ArrayOfClasePlanesAsig
     */
    public function getWsplanesasigResult()
    {
      return $this->wsplanesasigResult;
    }

    /**
     * @param ArrayOfClasePlanesAsig $wsplanesasigResult
     * @return \Clases\wsplanesasigResponse
     */
    public function setWsplanesasigResult($wsplanesasigResult)
    {
      $this->wsplanesasigResult = $wsplanesasigResult;
      return $this;
    }

}
