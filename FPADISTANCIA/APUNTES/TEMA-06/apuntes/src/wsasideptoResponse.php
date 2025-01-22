<?php

namespace Clases;

class wsasideptoResponse
{

    /**
     * @var ArrayOfClaseAsiDepto $wsasideptoResult
     */
    protected $wsasideptoResult = null;

    /**
     * @param ArrayOfClaseAsiDepto $wsasideptoResult
     */
    public function __construct($wsasideptoResult)
    {
      $this->wsasideptoResult = $wsasideptoResult;
    }

    /**
     * @return ArrayOfClaseAsiDepto
     */
    public function getWsasideptoResult()
    {
      return $this->wsasideptoResult;
    }

    /**
     * @param ArrayOfClaseAsiDepto $wsasideptoResult
     * @return \Clases\wsasideptoResponse
     */
    public function setWsasideptoResult($wsasideptoResult)
    {
      $this->wsasideptoResult = $wsasideptoResult;
      return $this;
    }

}
