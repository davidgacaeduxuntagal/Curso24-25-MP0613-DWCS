<?php

namespace Clases;

class ClaseAreasDpto
{

    /**
     * @var string $codarea
     */
    protected $codarea = null;

    /**
     * @var string $nomarea
     */
    protected $nomarea = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCodarea()
    {
      return $this->codarea;
    }

    /**
     * @param string $codarea
     * @return \Clases\ClaseAreasDpto
     */
    public function setCodarea($codarea)
    {
      $this->codarea = $codarea;
      return $this;
    }

    /**
     * @return string
     */
    public function getNomarea()
    {
      return $this->nomarea;
    }

    /**
     * @param string $nomarea
     * @return \Clases\ClaseAreasDpto
     */
    public function setNomarea($nomarea)
    {
      $this->nomarea = $nomarea;
      return $this;
    }

}
