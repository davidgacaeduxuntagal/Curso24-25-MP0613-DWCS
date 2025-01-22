<?php

namespace Clases;

class wstitulosuniResponse
{

    /**
     * @var ArrayOfClaseTitulosUni $wstitulosuniResult
     */
    protected $wstitulosuniResult = null;

    /**
     * @param ArrayOfClaseTitulosUni $wstitulosuniResult
     */
    public function __construct($wstitulosuniResult)
    {
      $this->wstitulosuniResult = $wstitulosuniResult;
    }

    /**
     * @return ArrayOfClaseTitulosUni
     */
    public function getWstitulosuniResult()
    {
      return $this->wstitulosuniResult;
    }

    /**
     * @param ArrayOfClaseTitulosUni $wstitulosuniResult
     * @return \Clases\wstitulosuniResponse
     */
    public function setWstitulosuniResult($wstitulosuniResult)
    {
      $this->wstitulosuniResult = $wstitulosuniResult;
      return $this;
    }

}
