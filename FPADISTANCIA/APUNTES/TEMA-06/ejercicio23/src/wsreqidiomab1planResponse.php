<?php

namespace Clases;

class wsreqidiomab1planResponse
{

    /**
     * @var ClaseReqidiomab1plan $wsreqidiomab1planResult
     */
    protected $wsreqidiomab1planResult = null;

    /**
     * @param ClaseReqidiomab1plan $wsreqidiomab1planResult
     */
    public function __construct($wsreqidiomab1planResult)
    {
      $this->wsreqidiomab1planResult = $wsreqidiomab1planResult;
    }

    /**
     * @return ClaseReqidiomab1plan
     */
    public function getWsreqidiomab1planResult()
    {
      return $this->wsreqidiomab1planResult;
    }

    /**
     * @param ClaseReqidiomab1plan $wsreqidiomab1planResult
     * @return \Clases\wsreqidiomab1planResponse
     */
    public function setWsreqidiomab1planResult($wsreqidiomab1planResult)
    {
      $this->wsreqidiomab1planResult = $wsreqidiomab1planResult;
      return $this;
    }

}
