<?php

namespace Clases;

class wsfechaexamenesasiResponse
{

    /**
     * @var ArrayOfClaseFechaExamenesAsi $wsfechaexamenesasiResult
     */
    protected $wsfechaexamenesasiResult = null;

    /**
     * @param ArrayOfClaseFechaExamenesAsi $wsfechaexamenesasiResult
     */
    public function __construct($wsfechaexamenesasiResult)
    {
      $this->wsfechaexamenesasiResult = $wsfechaexamenesasiResult;
    }

    /**
     * @return ArrayOfClaseFechaExamenesAsi
     */
    public function getWsfechaexamenesasiResult()
    {
      return $this->wsfechaexamenesasiResult;
    }

    /**
     * @param ArrayOfClaseFechaExamenesAsi $wsfechaexamenesasiResult
     * @return \Clases\wsfechaexamenesasiResponse
     */
    public function setWsfechaexamenesasiResult($wsfechaexamenesasiResult)
    {
      $this->wsfechaexamenesasiResult = $wsfechaexamenesasiResult;
      return $this;
    }

}
