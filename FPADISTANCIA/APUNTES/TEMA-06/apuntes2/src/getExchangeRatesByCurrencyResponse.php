<?php

namespace Clases;

class getExchangeRatesByCurrencyResponse
{

    /**
     * @var getExchangeRatesByCurrencyResult $getExchangeRatesByCurrencyResult
     */
    protected $getExchangeRatesByCurrencyResult = null;

    /**
     * @param getExchangeRatesByCurrencyResult $getExchangeRatesByCurrencyResult
     */
    public function __construct($getExchangeRatesByCurrencyResult)
    {
      $this->getExchangeRatesByCurrencyResult = $getExchangeRatesByCurrencyResult;
    }

    /**
     * @return getExchangeRatesByCurrencyResult
     */
    public function getGetExchangeRatesByCurrencyResult()
    {
      return $this->getExchangeRatesByCurrencyResult;
    }

    /**
     * @param getExchangeRatesByCurrencyResult $getExchangeRatesByCurrencyResult
     * @return \Clases\getExchangeRatesByCurrencyResponse
     */
    public function setGetExchangeRatesByCurrencyResult($getExchangeRatesByCurrencyResult)
    {
      $this->getExchangeRatesByCurrencyResult = $getExchangeRatesByCurrencyResult;
      return $this;
    }

}
