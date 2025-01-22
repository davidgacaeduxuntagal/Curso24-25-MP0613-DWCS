<?php

namespace Clases;

class Gate extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'ExchangeRatesDS' => 'Clases\\ExchangeRatesDS',
  'ExchangeRates' => 'Clases\\ExchangeRates',
  'ISOCodes' => 'Clases\\ISOCodes',
  'ExchangeRatesByRange' => 'Clases\\ExchangeRatesByRange',
  'ISOCodesDetailed' => 'Clases\\ISOCodesDetailed',
  'ISOCodesDetailedResponse' => 'Clases\\ISOCodesDetailedResponse',
  'ISOCodesDetailedResult' => 'Clases\\ISOCodesDetailedResult',
  'ISOCodesResponse' => 'Clases\\ISOCodesResponse',
  'ArrayOfString' => 'Clases\\ArrayOfString',
  'ExchangeRatesLatestByISO' => 'Clases\\ExchangeRatesLatestByISO',
  'ExchangeRatesLatestByISOResponse' => 'Clases\\ExchangeRatesLatestByISOResponse',
  'ArrayOfExchangeRate' => 'Clases\\ArrayOfExchangeRate',
  'ExchangeRate' => 'Clases\\ExchangeRate',
  'ExchangeRatesByDateByISO' => 'Clases\\ExchangeRatesByDateByISO',
  'ExchangeRatesByDateByISOResponse' => 'Clases\\ExchangeRatesByDateByISOResponse',
  'ExchangeRatesByDate' => 'Clases\\ExchangeRatesByDate',
  'ExchangeRatesByDateResponse' => 'Clases\\ExchangeRatesByDateResponse',
  'ExchangeRatesLatest' => 'Clases\\ExchangeRatesLatest',
  'ExchangeRatesLatestResponse' => 'Clases\\ExchangeRatesLatestResponse',
  'ExchangeRatesByDateRangeByISO' => 'Clases\\ExchangeRatesByDateRangeByISO',
  'ExchangeRatesByDateRangeByISOResponse' => 'Clases\\ExchangeRatesByDateRangeByISOResponse',
  'ExchangeRatesByDateRangeByISOResult' => 'Clases\\ExchangeRatesByDateRangeByISOResult',
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
        $wsdl = 'http://api.cba.am/exchangerates.asmx?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Detailed list of codes.
     *
     * @param ISOCodesDetailed $parameters
     * @return ISOCodesDetailedResponse
     */
    public function ISOCodesDetailed(ISOCodesDetailed $parameters)
    {
      return $this->__soapCall('ISOCodesDetailed', array($parameters));
    }

    /**
     * List of the latest available ISO codes. Based on latest published rates.
     *
     * @param ISOCodes $parameters
     * @return ISOCodesResponse
     */
    public function ISOCodes(ISOCodes $parameters)
    {
      return $this->__soapCall('ISOCodes', array($parameters));
    }

    /**
     * Retrieves latest rates of the specified ISO, will return single line. Includes trend. Check ISO Codes method for all available codes.
     *
     * @param ExchangeRatesLatestByISO $parameters
     * @return ExchangeRatesLatestByISOResponse
     */
    public function ExchangeRatesLatestByISO(ExchangeRatesLatestByISO $parameters)
    {
      return $this->__soapCall('ExchangeRatesLatestByISO', array($parameters));
    }

    /**
     * Retrieves latest rates of the specified date and ISO, will return single line. Includes trend. Check ISO Codes method for all available codes.
     *
     * @param ExchangeRatesByDateByISO $parameters
     * @return ExchangeRatesByDateByISOResponse
     */
    public function ExchangeRatesByDateByISO(ExchangeRatesByDateByISO $parameters)
    {
      return $this->__soapCall('ExchangeRatesByDateByISO', array($parameters));
    }

    /**
     * Retrieves all available rates of the specified date. Includes trend.
     *
     * @param ExchangeRatesByDate $parameters
     * @return ExchangeRatesByDateResponse
     */
    public function ExchangeRatesByDate(ExchangeRatesByDate $parameters)
    {
      return $this->__soapCall('ExchangeRatesByDate', array($parameters));
    }

    /**
     * Retrieves the lastest published rates. Includes trend. Recommended for Web sites integration.
     *
     * @param ExchangeRatesLatest $parameters
     * @return ExchangeRatesLatestResponse
     */
    public function ExchangeRatesLatest(ExchangeRatesLatest $parameters)
    {
      return $this->__soapCall('ExchangeRatesLatest', array($parameters));
    }

    /**
     * Retrieves rates for the specified period for comma separated ISO codes list.
     *
     * @param ExchangeRatesByDateRangeByISO $parameters
     * @return ExchangeRatesByDateRangeByISOResponse
     */
    public function ExchangeRatesByDateRangeByISO(ExchangeRatesByDateRangeByISO $parameters)
    {
      return $this->__soapCall('ExchangeRatesByDateRangeByISO', array($parameters));
    }

}
