<?php

namespace Clases;

class ExchangeRatesByDateByISOResponse
{

    /**
     * @var ExchangeRates $ExchangeRatesByDateByISOResult
     */
    protected $ExchangeRatesByDateByISOResult = null;

    /**
     * @param ExchangeRates $ExchangeRatesByDateByISOResult
     */
    public function __construct($ExchangeRatesByDateByISOResult)
    {
      $this->ExchangeRatesByDateByISOResult = $ExchangeRatesByDateByISOResult;
    }

    /**
     * @return ExchangeRates
     */
    public function getExchangeRatesByDateByISOResult()
    {
      return $this->ExchangeRatesByDateByISOResult;
    }

    /**
     * @param ExchangeRates $ExchangeRatesByDateByISOResult
     * @return \Clases\ExchangeRatesByDateByISOResponse
     */
    public function setExchangeRatesByDateByISOResult($ExchangeRatesByDateByISOResult)
    {
      $this->ExchangeRatesByDateByISOResult = $ExchangeRatesByDateByISOResult;
      return $this;
    }

}
