<?php

namespace Clases;

class ISOCodesDetailedResponse
{

    /**
     * @var ISOCodesDetailedResult $ISOCodesDetailedResult
     */
    protected $ISOCodesDetailedResult = null;

    /**
     * @param ISOCodesDetailedResult $ISOCodesDetailedResult
     */
    public function __construct($ISOCodesDetailedResult)
    {
      $this->ISOCodesDetailedResult = $ISOCodesDetailedResult;
    }

    /**
     * @return ISOCodesDetailedResult
     */
    public function getISOCodesDetailedResult()
    {
      return $this->ISOCodesDetailedResult;
    }

    /**
     * @param ISOCodesDetailedResult $ISOCodesDetailedResult
     * @return \Clases\ISOCodesDetailedResponse
     */
    public function setISOCodesDetailedResult($ISOCodesDetailedResult)
    {
      $this->ISOCodesDetailedResult = $ISOCodesDetailedResult;
      return $this;
    }

}
