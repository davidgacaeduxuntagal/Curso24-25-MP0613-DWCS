<?php

namespace Clases;

class getExchangeRatesByCurrency_XmlStringResponse
{

    /**
     * @var string $getExchangeRatesByCurrency_XmlStringResult
     */
    protected $getExchangeRatesByCurrency_XmlStringResult = null;

    /**
     * @param string $getExchangeRatesByCurrency_XmlStringResult
     */
    public function __construct($getExchangeRatesByCurrency_XmlStringResult)
    {
      $this->getExchangeRatesByCurrency_XmlStringResult = $getExchangeRatesByCurrency_XmlStringResult;
    }

    /**
     * @return string
     */
    public function getGetExchangeRatesByCurrency_XmlStringResult()
    {
      return $this->getExchangeRatesByCurrency_XmlStringResult;
    }

    /**
     * @param string $getExchangeRatesByCurrency_XmlStringResult
     * @return \Clases\getExchangeRatesByCurrency_XmlStringResponse
     */
    public function setGetExchangeRatesByCurrency_XmlStringResult($getExchangeRatesByCurrency_XmlStringResult)
    {
      $this->getExchangeRatesByCurrency_XmlStringResult = $getExchangeRatesByCurrency_XmlStringResult;
      return $this;
    }

}
