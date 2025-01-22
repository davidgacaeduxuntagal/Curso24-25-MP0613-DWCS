<?php

namespace Clases;

class ExchangeRatesDS
{

    /**
     * @var ExchangeRates $ExchangeRates
     */
    protected $ExchangeRates = null;

    /**
     * @var ISOCodes $ISOCodes
     */
    protected $ISOCodes = null;

    /**
     * @var ExchangeRatesByRange $ExchangeRatesByRange
     */
    protected $ExchangeRatesByRange = null;

    /**
     * @param ExchangeRates $ExchangeRates
     * @param ISOCodes $ISOCodes
     * @param ExchangeRatesByRange $ExchangeRatesByRange
     */
    public function __construct($ExchangeRates, $ISOCodes, $ExchangeRatesByRange)
    {
      $this->ExchangeRates = $ExchangeRates;
      $this->ISOCodes = $ISOCodes;
      $this->ExchangeRatesByRange = $ExchangeRatesByRange;
    }

    /**
     * @return ExchangeRates
     */
    public function getExchangeRates()
    {
      return $this->ExchangeRates;
    }

    /**
     * @param ExchangeRates $ExchangeRates
     * @return \Clases\ExchangeRatesDS
     */
    public function setExchangeRates($ExchangeRates)
    {
      $this->ExchangeRates = $ExchangeRates;
      return $this;
    }

    /**
     * @return ISOCodes
     */
    public function getISOCodes()
    {
      return $this->ISOCodes;
    }

    /**
     * @param ISOCodes $ISOCodes
     * @return \Clases\ExchangeRatesDS
     */
    public function setISOCodes($ISOCodes)
    {
      $this->ISOCodes = $ISOCodes;
      return $this;
    }

    /**
     * @return ExchangeRatesByRange
     */
    public function getExchangeRatesByRange()
    {
      return $this->ExchangeRatesByRange;
    }

    /**
     * @param ExchangeRatesByRange $ExchangeRatesByRange
     * @return \Clases\ExchangeRatesDS
     */
    public function setExchangeRatesByRange($ExchangeRatesByRange)
    {
      $this->ExchangeRatesByRange = $ExchangeRatesByRange;
      return $this;
    }

}
