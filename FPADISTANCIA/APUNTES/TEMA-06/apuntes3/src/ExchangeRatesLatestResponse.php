<?php

namespace Clases;

class ExchangeRatesLatestResponse
{

    /**
     * @var ExchangeRates $ExchangeRatesLatestResult
     */
    protected $ExchangeRatesLatestResult = null;

    /**
     * @param ExchangeRates $ExchangeRatesLatestResult
     */
    public function __construct($ExchangeRatesLatestResult)
    {
      $this->ExchangeRatesLatestResult = $ExchangeRatesLatestResult;
    }

    /**
     * @return ExchangeRates
     */
    public function getExchangeRatesLatestResult()
    {
      return $this->ExchangeRatesLatestResult;
    }

    /**
     * @param ExchangeRates $ExchangeRatesLatestResult
     * @return \Clases\ExchangeRatesLatestResponse
     */
    public function setExchangeRatesLatestResult($ExchangeRatesLatestResult)
    {
      $this->ExchangeRatesLatestResult = $ExchangeRatesLatestResult;
      return $this;
    }

}
