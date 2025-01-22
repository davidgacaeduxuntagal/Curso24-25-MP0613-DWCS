<?php

namespace Clases;

class wsfechaexamenesplanResponse
{

    /**
     * @var ArrayOfClaseFechaExamenesPlan $wsfechaexamenesplanResult
     */
    protected $wsfechaexamenesplanResult = null;

    /**
     * @param ArrayOfClaseFechaExamenesPlan $wsfechaexamenesplanResult
     */
    public function __construct($wsfechaexamenesplanResult)
    {
      $this->wsfechaexamenesplanResult = $wsfechaexamenesplanResult;
    }

    /**
     * @return ArrayOfClaseFechaExamenesPlan
     */
    public function getWsfechaexamenesplanResult()
    {
      return $this->wsfechaexamenesplanResult;
    }

    /**
     * @param ArrayOfClaseFechaExamenesPlan $wsfechaexamenesplanResult
     * @return \Clases\wsfechaexamenesplanResponse
     */
    public function setWsfechaexamenesplanResult($wsfechaexamenesplanResult)
    {
      $this->wsfechaexamenesplanResult = $wsfechaexamenesplanResult;
      return $this;
    }

}
