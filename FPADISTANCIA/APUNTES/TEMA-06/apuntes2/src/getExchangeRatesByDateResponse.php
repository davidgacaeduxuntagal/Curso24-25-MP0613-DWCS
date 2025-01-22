<?php

namespace Clases;

class getExchangeRatesByDateResponse
{

    /**
     * @var getExchangeRatesByDateResult $getExchangeRatesByDateResult
     */
    protected $getExchangeRatesByDateResult = null;

    /**
     * @param getExchangeRatesByDateResult $getExchangeRatesByDateResult
     */
    public function __construct($getExchangeRatesByDateResult)
    {
      $this->getExchangeRatesByDateResult = $getExchangeRatesByDateResult;
    }

    /**
     * @return getExchangeRatesByDateResult
     */
    public function getGetExchangeRatesByDateResult()
    {
      return $this->getExchangeRatesByDateResult;
    }

    /**
     * @param getExchangeRatesByDateResult $getExchangeRatesByDateResult
     * @return \Clases\getExchangeRatesByDateResponse
     */
    public function setGetExchangeRatesByDateResult($getExchangeRatesByDateResult)
    {
      $this->getExchangeRatesByDateResult = $getExchangeRatesByDateResult;
      return $this;
    }

}
