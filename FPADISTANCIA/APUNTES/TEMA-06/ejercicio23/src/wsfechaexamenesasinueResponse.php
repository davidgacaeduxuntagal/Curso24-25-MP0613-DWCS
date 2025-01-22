<?php

namespace Clases;

class wsfechaexamenesasinueResponse
{

    /**
     * @var ArrayOfClaseFechaExamenesAsiNue $wsfechaexamenesasinueResult
     */
    protected $wsfechaexamenesasinueResult = null;

    /**
     * @param ArrayOfClaseFechaExamenesAsiNue $wsfechaexamenesasinueResult
     */
    public function __construct($wsfechaexamenesasinueResult)
    {
      $this->wsfechaexamenesasinueResult = $wsfechaexamenesasinueResult;
    }

    /**
     * @return ArrayOfClaseFechaExamenesAsiNue
     */
    public function getWsfechaexamenesasinueResult()
    {
      return $this->wsfechaexamenesasinueResult;
    }

    /**
     * @param ArrayOfClaseFechaExamenesAsiNue $wsfechaexamenesasinueResult
     * @return \Clases\wsfechaexamenesasinueResponse
     */
    public function setWsfechaexamenesasinueResult($wsfechaexamenesasinueResult)
    {
      $this->wsfechaexamenesasinueResult = $wsfechaexamenesasinueResult;
      return $this;
    }

}
