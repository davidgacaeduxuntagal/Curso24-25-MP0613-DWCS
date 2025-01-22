<?php

namespace Clases;

class getExchangeRatesXmlSchemaResponse
{

    /**
     * @var string $getExchangeRatesXmlSchemaResult
     */
    protected $getExchangeRatesXmlSchemaResult = null;

    /**
     * @param string $getExchangeRatesXmlSchemaResult
     */
    public function __construct($getExchangeRatesXmlSchemaResult)
    {
      $this->getExchangeRatesXmlSchemaResult = $getExchangeRatesXmlSchemaResult;
    }

    /**
     * @return string
     */
    public function getGetExchangeRatesXmlSchemaResult()
    {
      return $this->getExchangeRatesXmlSchemaResult;
    }

    /**
     * @param string $getExchangeRatesXmlSchemaResult
     * @return \Clases\getExchangeRatesXmlSchemaResponse
     */
    public function setGetExchangeRatesXmlSchemaResult($getExchangeRatesXmlSchemaResult)
    {
      $this->getExchangeRatesXmlSchemaResult = $getExchangeRatesXmlSchemaResult;
      return $this;
    }

}
