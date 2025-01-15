<?php

namespace Clases;

class getListOfCurrenciesResponse
{

    /**
     * @var getListOfCurrenciesResult $getListOfCurrenciesResult
     */
    protected $getListOfCurrenciesResult = null;

    /**
     * @param getListOfCurrenciesResult $getListOfCurrenciesResult
     */
    public function __construct($getListOfCurrenciesResult)
    {
      $this->getListOfCurrenciesResult = $getListOfCurrenciesResult;
    }

    /**
     * @return getListOfCurrenciesResult
     */
    public function getGetListOfCurrenciesResult()
    {
      return $this->getListOfCurrenciesResult;
    }

    /**
     * @param getListOfCurrenciesResult $getListOfCurrenciesResult
     * @return \Clases\getListOfCurrenciesResponse
     */
    public function setGetListOfCurrenciesResult($getListOfCurrenciesResult)
    {
      $this->getListOfCurrenciesResult = $getListOfCurrenciesResult;
      return $this;
    }

}
