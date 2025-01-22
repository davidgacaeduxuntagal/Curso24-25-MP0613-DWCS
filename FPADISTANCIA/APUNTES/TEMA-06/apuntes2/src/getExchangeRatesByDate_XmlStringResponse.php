<?php

namespace Clases;

class getExchangeRatesByDate_XmlStringResponse
{

    /**
     * @var string $getExchangeRatesByDate_XmlStringResult
     */
    protected $getExchangeRatesByDate_XmlStringResult = null;

    /**
     * @param string $getExchangeRatesByDate_XmlStringResult
     */
    public function __construct($getExchangeRatesByDate_XmlStringResult)
    {
      $this->getExchangeRatesByDate_XmlStringResult = $getExchangeRatesByDate_XmlStringResult;
    }

    /**
     * @return string
     */
    public function getGetExchangeRatesByDate_XmlStringResult()
    {
      return $this->getExchangeRatesByDate_XmlStringResult;
    }

    /**
     * @param string $getExchangeRatesByDate_XmlStringResult
     * @return \Clases\getExchangeRatesByDate_XmlStringResponse
     */
    public function setGetExchangeRatesByDate_XmlStringResult($getExchangeRatesByDate_XmlStringResult)
    {
      $this->getExchangeRatesByDate_XmlStringResult = $getExchangeRatesByDate_XmlStringResult;
      return $this;
    }

}
