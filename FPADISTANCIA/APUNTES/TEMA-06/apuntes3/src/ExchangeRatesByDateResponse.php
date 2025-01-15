<?php

namespace Clases;

class ExchangeRatesByDateResponse
{

    /**
     * @var ExchangeRates $ExchangeRatesByDateResult
     */
    protected $ExchangeRatesByDateResult = null;

    /**
     * @param ExchangeRates $ExchangeRatesByDateResult
     */
    public function __construct($ExchangeRatesByDateResult)
    {
      $this->ExchangeRatesByDateResult = $ExchangeRatesByDateResult;
    }

    /**
     * @return ExchangeRates
     */
    public function getExchangeRatesByDateResult()
    {
      return $this->ExchangeRatesByDateResult;
    }

    /**
     * @param ExchangeRates $ExchangeRatesByDateResult
     * @return \Clases\ExchangeRatesByDateResponse
     */
    public function setExchangeRatesByDateResult($ExchangeRatesByDateResult)
    {
      $this->ExchangeRatesByDateResult = $ExchangeRatesByDateResult;
      return $this;
    }

}
