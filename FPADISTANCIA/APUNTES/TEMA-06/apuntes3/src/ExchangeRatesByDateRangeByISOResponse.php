<?php

namespace Clases;

class ExchangeRatesByDateRangeByISOResponse
{

    /**
     * @var ExchangeRatesByDateRangeByISOResult $ExchangeRatesByDateRangeByISOResult
     */
    protected $ExchangeRatesByDateRangeByISOResult = null;

    /**
     * @param ExchangeRatesByDateRangeByISOResult $ExchangeRatesByDateRangeByISOResult
     */
    public function __construct($ExchangeRatesByDateRangeByISOResult)
    {
      $this->ExchangeRatesByDateRangeByISOResult = $ExchangeRatesByDateRangeByISOResult;
    }

    /**
     * @return ExchangeRatesByDateRangeByISOResult
     */
    public function getExchangeRatesByDateRangeByISOResult()
    {
      return $this->ExchangeRatesByDateRangeByISOResult;
    }

    /**
     * @param ExchangeRatesByDateRangeByISOResult $ExchangeRatesByDateRangeByISOResult
     * @return \Clases\ExchangeRatesByDateRangeByISOResponse
     */
    public function setExchangeRatesByDateRangeByISOResult($ExchangeRatesByDateRangeByISOResult)
    {
      $this->ExchangeRatesByDateRangeByISOResult = $ExchangeRatesByDateRangeByISOResult;
      return $this;
    }

}
