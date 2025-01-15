<?php

namespace Clases;

class ClaseCalificaciones
{

    /**
     * @var string $cod
     */
    protected $cod = null;

    /**
     * @var string $descripcion
     */
    protected $descripcion = null;

    /**
     * @var string $descripcionasi
     */
    protected $descripcionasi = null;

    /**
     * @var string $ranmin
     */
    protected $ranmin = null;

    /**
     * @var string $ranmax
     */
    protected $ranmax = null;

    
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
     * @return \Clases\ClaseCalificaciones
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
     * @return \Clases\ClaseCalificaciones
     */
    public function setDescripcion($descripcion)
    {
      $this->descripcion = $descripcion;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescripcionasi()
    {
      return $this->descripcionasi;
    }

    /**
     * @param string $descripcionasi
     * @return \Clases\ClaseCalificaciones
     */
    public function setDescripcionasi($descripcionasi)
    {
      $this->descripcionasi = $descripcionasi;
      return $this;
    }

    /**
     * @return string
     */
    public function getRanmin()
    {
      return $this->ranmin;
    }

    /**
     * @param string $ranmin
     * @return \Clases\ClaseCalificaciones
     */
    public function setRanmin($ranmin)
    {
      $this->ranmin = $ranmin;
      return $this;
    }

    /**
     * @return string
     */
    public function getRanmax()
    {
      return $this->ranmax;
    }

    /**
     * @param string $ranmax
     * @return \Clases\ClaseCalificaciones
     */
    public function setRanmax($ranmax)
    {
      $this->ranmax = $ranmax;
      return $this;
    }

}
