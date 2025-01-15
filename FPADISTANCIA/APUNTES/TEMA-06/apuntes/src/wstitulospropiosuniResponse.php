<?php

namespace Clases;

class wstitulospropiosuniResponse
{

    /**
     * @var ArrayOfClaseTitulosPropiosUni $wstitulospropiosuniResult
     */
    protected $wstitulospropiosuniResult = null;

    /**
     * @param ArrayOfClaseTitulosPropiosUni $wstitulospropiosuniResult
     */
    public function __construct($wstitulospropiosuniResult)
    {
      $this->wstitulospropiosuniResult = $wstitulospropiosuniResult;
    }

    /**
     * @return ArrayOfClaseTitulosPropiosUni
     */
    public function getWstitulospropiosuniResult()
    {
      return $this->wstitulospropiosuniResult;
    }

    /**
     * @param ArrayOfClaseTitulosPropiosUni $wstitulospropiosuniResult
     * @return \Clases\wstitulospropiosuniResponse
     */
    public function setWstitulospropiosuniResult($wstitulospropiosuniResult)
    {
      $this->wstitulospropiosuniResult = $wstitulospropiosuniResult;
      return $this;
    }

}
