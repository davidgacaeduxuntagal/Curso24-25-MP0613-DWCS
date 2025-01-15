<?php

namespace Clases;

class wsasiplanResponse
{

    /**
     * @var ArrayOfClaseAsiPlan $wsasiplanResult
     */
    protected $wsasiplanResult = null;

    /**
     * @param ArrayOfClaseAsiPlan $wsasiplanResult
     */
    public function __construct($wsasiplanResult)
    {
      $this->wsasiplanResult = $wsasiplanResult;
    }

    /**
     * @return ArrayOfClaseAsiPlan
     */
    public function getWsasiplanResult()
    {
      return $this->wsasiplanResult;
    }

    /**
     * @param ArrayOfClaseAsiPlan $wsasiplanResult
     * @return \Clases\wsasiplanResponse
     */
    public function setWsasiplanResult($wsasiplanResult)
    {
      $this->wsasiplanResult = $wsasiplanResult;
      return $this;
    }

}
