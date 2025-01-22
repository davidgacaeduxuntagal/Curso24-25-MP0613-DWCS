<?php

namespace Clases;

class wsfechaexamenesasitotalResponse
{

    /**
     * @var ArrayOfClaseFechaExamenesAsiTotal $wsfechaexamenesasitotalResult
     */
    protected $wsfechaexamenesasitotalResult = null;

    /**
     * @param ArrayOfClaseFechaExamenesAsiTotal $wsfechaexamenesasitotalResult
     */
    public function __construct($wsfechaexamenesasitotalResult)
    {
      $this->wsfechaexamenesasitotalResult = $wsfechaexamenesasitotalResult;
    }

    /**
     * @return ArrayOfClaseFechaExamenesAsiTotal
     */
    public function getWsfechaexamenesasitotalResult()
    {
      return $this->wsfechaexamenesasitotalResult;
    }

    /**
     * @param ArrayOfClaseFechaExamenesAsiTotal $wsfechaexamenesasitotalResult
     * @return \Clases\wsfechaexamenesasitotalResponse
     */
    public function setWsfechaexamenesasitotalResult($wsfechaexamenesasitotalResult)
    {
      $this->wsfechaexamenesasitotalResult = $wsfechaexamenesasitotalResult;
      return $this;
    }

}
