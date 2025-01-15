<?php

namespace Clases;

class ClaseReqidiomab1plan
{

    /**
     * @var string $tienerequisitob1
     */
    protected $tienerequisitob1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getTienerequisitob1()
    {
      return $this->tienerequisitob1;
    }

    /**
     * @param string $tienerequisitob1
     * @return \Clases\ClaseReqidiomab1plan
     */
    public function setTienerequisitob1($tienerequisitob1)
    {
      $this->tienerequisitob1 = $tienerequisitob1;
      return $this;
    }

}
