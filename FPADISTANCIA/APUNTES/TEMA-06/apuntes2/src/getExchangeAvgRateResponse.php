<?php

namespace Clases;

class getExchangeAvgRateResponse
{

    /**
     * @var getExchangeAvgRateResult $getExchangeAvgRateResult
     */
    protected $getExchangeAvgRateResult = null;

    /**
     * @param getExchangeAvgRateResult $getExchangeAvgRateResult
     */
    public function __construct($getExchangeAvgRateResult)
    {
      $this->getExchangeAvgRateResult = $getExchangeAvgRateResult;
    }

    /**
     * @return getExchangeAvgRateResult
     */
    public function getGetExchangeAvgRateResult()
    {
      return $this->getExchangeAvgRateResult;
    }

    /**
     * @param getExchangeAvgRateResult $getExchangeAvgRateResult
     * @return \Clases\getExchangeAvgRateResponse
     */
    public function setGetExchangeAvgRateResult($getExchangeAvgRateResult)
    {
      $this->getExchangeAvgRateResult = $getExchangeAvgRateResult;
      return $this;
    }

}
