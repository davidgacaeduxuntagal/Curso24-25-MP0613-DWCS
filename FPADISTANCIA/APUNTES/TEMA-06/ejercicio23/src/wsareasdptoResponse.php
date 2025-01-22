<?php

namespace Clases;

class wsareasdptoResponse
{

    /**
     * @var ArrayOfClaseAreasDpto $wsareasdptoResult
     */
    protected $wsareasdptoResult = null;

    /**
     * @param ArrayOfClaseAreasDpto $wsareasdptoResult
     */
    public function __construct($wsareasdptoResult)
    {
      $this->wsareasdptoResult = $wsareasdptoResult;
    }

    /**
     * @return ArrayOfClaseAreasDpto
     */
    public function getWsareasdptoResult()
    {
      return $this->wsareasdptoResult;
    }

    /**
     * @param ArrayOfClaseAreasDpto $wsareasdptoResult
     * @return \Clases\wsareasdptoResponse
     */
    public function setWsareasdptoResult($wsareasdptoResult)
    {
      $this->wsareasdptoResult = $wsareasdptoResult;
      return $this;
    }

}
