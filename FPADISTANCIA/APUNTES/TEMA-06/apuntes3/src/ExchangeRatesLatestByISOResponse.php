<?php

namespace Clases;

class ExchangeRatesLatestByISOResponse
{

    /**
     * @var ExchangeRates $ExchangeRatesLatestByISOResult
     */
    protected $ExchangeRatesLatestByISOResult = null;

    /**
     * @param ExchangeRates $ExchangeRatesLatestByISOResult
     */
    public function __construct($ExchangeRatesLatestByISOResult)
    {
      $this->ExchangeRatesLatestByISOResult = $ExchangeRatesLatestByISOResult;
    }

    /**
     * @return ExchangeRates
     */
    public function getExchangeRatesLatestByISOResult()
    {
      return $this->ExchangeRatesLatestByISOResult;
    }

    /**
     * @param ExchangeRates $ExchangeRatesLatestByISOResult
     * @return \Clases\ExchangeRatesLatestByISOResponse
     */
    public function setExchangeRatesLatestByISOResult($ExchangeRatesLatestByISOResult)
    {
      $this->ExchangeRatesLatestByISOResult = $ExchangeRatesLatestByISOResult;
      return $this;
    }

}
