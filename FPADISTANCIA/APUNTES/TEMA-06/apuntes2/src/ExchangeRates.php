<?php

namespace Clases;


/**
 * WebService provides official (established by Bank of Lithuania) exchange rates of the Litas against Foreign Currencies.
 */
class ExchangeRates extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'getListOfCurrencies' => 'Clases\\getListOfCurrencies',
  'getListOfCurrenciesResponse' => 'Clases\\getListOfCurrenciesResponse',
  'getListOfCurrenciesResult' => 'Clases\\getListOfCurrenciesResult',
  'getCurrentExchangeRate' => 'Clases\\getCurrentExchangeRate',
  'getCurrentExchangeRateResponse' => 'Clases\\getCurrentExchangeRateResponse',
  'getExchangeRate' => 'Clases\\getExchangeRate',
  'getExchangeRateResponse' => 'Clases\\getExchangeRateResponse',
  'getExchangeRatesByDate_XmlString' => 'Clases\\getExchangeRatesByDate_XmlString',
  'getExchangeRatesByDate_XmlStringResponse' => 'Clases\\getExchangeRatesByDate_XmlStringResponse',
  'getExchangeRatesByCurrency_XmlString' => 'Clases\\getExchangeRatesByCurrency_XmlString',
  'getExchangeRatesByCurrency_XmlStringResponse' => 'Clases\\getExchangeRatesByCurrency_XmlStringResponse',
  'getExchangeRatesByDate' => 'Clases\\getExchangeRatesByDate',
  'getExchangeRatesByDateResponse' => 'Clases\\getExchangeRatesByDateResponse',
  'getExchangeRatesByDateResult' => 'Clases\\getExchangeRatesByDateResult',
  'getExchangeRatesXmlSchema' => 'Clases\\getExchangeRatesXmlSchema',
  'getExchangeRatesXmlSchemaResponse' => 'Clases\\getExchangeRatesXmlSchemaResponse',
  'getExchangeRatesByCurrency' => 'Clases\\getExchangeRatesByCurrency',
  'getExchangeRatesByCurrencyResponse' => 'Clases\\getExchangeRatesByCurrencyResponse',
  'getExchangeRatesByCurrencyResult' => 'Clases\\getExchangeRatesByCurrencyResult',
  'getExchangeAvgRate' => 'Clases\\getExchangeAvgRate',
  'getExchangeAvgRateResponse' => 'Clases\\getExchangeAvgRateResponse',
  'getExchangeAvgRateResult' => 'Clases\\getExchangeAvgRateResult',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'stream_context' => NULL,
  'features' => 1,
), $options);
      if (!$wsdl) {
        $wsdl = 'https://www.lb.lt/webservices/ExchangeRates/ExchangeRates.asmx?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Returns a list of currencies.
     *
     * @param getListOfCurrencies $parameters
     * @return getListOfCurrenciesResponse
     */
    public function getListOfCurrencies(getListOfCurrencies $parameters)
    {
      return $this->__soapCall('getListOfCurrencies', array($parameters));
    }

    /**
     * Returns the current exchange rate (expressed in Litas per 1 currency unit) for the specified currency.
     *
     * @param getCurrentExchangeRate $parameters
     * @return getCurrentExchangeRateResponse
     */
    public function getCurrentExchangeRate(getCurrentExchangeRate $parameters)
    {
      return $this->__soapCall('getCurrentExchangeRate', array($parameters));
    }

    /**
     * Returns an exchange rate (expressed in Litas per 1 currency unit) for the specified currency and date.
     *
     * @param getExchangeRate $parameters
     * @return getExchangeRateResponse
     */
    public function getExchangeRate(getExchangeRate $parameters)
    {
      return $this->__soapCall('getExchangeRate', array($parameters));
    }

    /**
     * Returns a XML formatted string containing exchange rates for the specified date.
     *
     * @param getExchangeRatesByDate_XmlString $parameters
     * @return getExchangeRatesByDate_XmlStringResponse
     */
    public function getExchangeRatesByDate_XmlString(getExchangeRatesByDate_XmlString $parameters)
    {
      return $this->__soapCall('getExchangeRatesByDate_XmlString', array($parameters));
    }

    /**
     * Returns a XML formatted string containing exchange rates for the specified currency that are between specified dates.
     *
     * @param getExchangeRatesByCurrency_XmlString $parameters
     * @return getExchangeRatesByCurrency_XmlStringResponse
     */
    public function getExchangeRatesByCurrency_XmlString(getExchangeRatesByCurrency_XmlString $parameters)
    {
      return $this->__soapCall('getExchangeRatesByCurrency_XmlString', array($parameters));
    }

    /**
     * Returns a list containing exchange rates for the specified date.
     *
     * @param getExchangeRatesByDate $parameters
     * @return getExchangeRatesByDateResponse
     */
    public function getExchangeRatesByDate(getExchangeRatesByDate $parameters)
    {
      return $this->__soapCall('getExchangeRatesByDate', array($parameters));
    }

    /**
     * Returns a Xml Schema of provided Exchange Rates.
     *
     * @param getExchangeRatesXmlSchema $parameters
     * @return getExchangeRatesXmlSchemaResponse
     */
    public function getExchangeRatesXmlSchema(getExchangeRatesXmlSchema $parameters)
    {
      return $this->__soapCall('getExchangeRatesXmlSchema', array($parameters));
    }

    /**
     * Returns a list containing exchange rates for the specified currency that are between specified dates.
     *
     * @param getExchangeRatesByCurrency $parameters
     * @return getExchangeRatesByCurrencyResponse
     */
    public function getExchangeRatesByCurrency(getExchangeRatesByCurrency $parameters)
    {
      return $this->__soapCall('getExchangeRatesByCurrency', array($parameters));
    }

    /**
     * Returns a average exchange rate for the specified currency, between specified dates.
     *
     * @param getExchangeAvgRate $parameters
     * @return getExchangeAvgRateResponse
     */
    public function getExchangeAvgRate(getExchangeAvgRate $parameters)
    {
      return $this->__soapCall('getExchangeAvgRate', array($parameters));
    }

}
