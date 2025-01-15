<?php

namespace Clases;

class ClaseConvocatorias
{

    /**
     * @var string $cod
     */
    protected $cod = null;

    /**
     * @var string $descripcion
     */
    protected $descripcion = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCod()
    {
      return $this->cod;
    }

    /**
     * @param string $cod
     * @return \Clases\ClaseConvocatorias
     */
    public function setCod($cod)
    {
      $this->cod = $cod;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescripcion()
    {
      return $this->descripcion;
    }

    /**
     * @param string $descripcion
     * @return \Clases\ClaseConvocatorias
     */
    public function setDescripcion($descripcion)
    {
      $this->descripcion = $descripcion;
      return $this;
    }

}
