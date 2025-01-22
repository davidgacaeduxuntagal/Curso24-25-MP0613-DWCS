<?php

namespace Clases;

class wsplanesdepResponse
{

    /**
     * @var ArrayOfClasePlanesDep $wsplanesdepResult
     */
    protected $wsplanesdepResult = null;

    /**
     * @param ArrayOfClasePlanesDep $wsplanesdepResult
     */
    public function __construct($wsplanesdepResult)
    {
      $this->wsplanesdepResult = $wsplanesdepResult;
    }

    /**
     * @return ArrayOfClasePlanesDep
     */
    public function getWsplanesdepResult()
    {
      return $this->wsplanesdepResult;
    }

    /**
     * @param ArrayOfClasePlanesDep $wsplanesdepResult
     * @return \Clases\wsplanesdepResponse
     */
    public function setWsplanesdepResult($wsplanesdepResult)
    {
      $this->wsplanesdepResult = $wsplanesdepResult;
      return $this;
    }

}
