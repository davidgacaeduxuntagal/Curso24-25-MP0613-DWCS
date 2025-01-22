<?php

namespace Clases;

class ISOCodesResponse
{

    /**
     * @var ArrayOfString $ISOCodesResult
     */
    protected $ISOCodesResult = null;

    /**
     * @param ArrayOfString $ISOCodesResult
     */
    public function __construct($ISOCodesResult)
    {
      $this->ISOCodesResult = $ISOCodesResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getISOCodesResult()
    {
      return $this->ISOCodesResult;
    }

    /**
     * @param ArrayOfString $ISOCodesResult
     * @return \Clases\ISOCodesResponse
     */
    public function setISOCodesResult($ISOCodesResult)
    {
      $this->ISOCodesResult = $ISOCodesResult;
      return $this;
    }

}
