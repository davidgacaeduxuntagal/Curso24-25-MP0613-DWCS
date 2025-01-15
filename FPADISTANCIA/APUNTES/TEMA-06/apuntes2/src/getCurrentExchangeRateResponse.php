<?php

namespace Clases;

class getCurrentExchangeRateResponse
{

    /**
     * @var float $getCurrentExchangeRateResult
     */
    protected $getCurrentExchangeRateResult = null;

    /**
     * @param float $getCurrentExchangeRateResult
     */
    public function __construct($getCurrentExchangeRateResult)
    {
      $this->getCurrentExchangeRateResult = $getCurrentExchangeRateResult;
    }

    /**
     * @return float
     */
    public function getGetCurrentExchangeRateResult()
    {
      return $this->getCurrentExchangeRateResult;
    }

    /**
     * @param float $getCurrentExchangeRateResult
     * @return \Clases\getCurrentExchangeRateResponse
     */
    public function setGetCurrentExchangeRateResult($getCurrentExchangeRateResult)
    {
      $this->getCurrentExchangeRateResult = $getCurrentExchangeRateResult;
      return $this;
    }

}
