<?php

namespace Clases;

class getExchangeRateResponse
{

    /**
     * @var float $getExchangeRateResult
     */
    protected $getExchangeRateResult = null;

    /**
     * @param float $getExchangeRateResult
     */
    public function __construct($getExchangeRateResult)
    {
      $this->getExchangeRateResult = $getExchangeRateResult;
    }

    /**
     * @return float
     */
    public function getGetExchangeRateResult()
    {
      return $this->getExchangeRateResult;
    }

    /**
     * @param float $getExchangeRateResult
     * @return \Clases\getExchangeRateResponse
     */
    public function setGetExchangeRateResult($getExchangeRateResult)
    {
      $this->getExchangeRateResult = $getExchangeRateResult;
      return $this;
    }

}
