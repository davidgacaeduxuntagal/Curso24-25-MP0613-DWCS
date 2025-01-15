<?php

namespace Clases;

class ClaseTitulosUni
{

    /**
     * @var string $codigo
     */
    protected $codigo = null;

    /**
     * @var string $nombre
     */
    protected $nombre = null;

    /**
     * @var string $tipo
     */
    protected $tipo = null;

    /**
     * @var string $area
     */
    protected $area = null;

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @var string $imagen
     */
    protected $imagen = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCodigo()
    {
      return $this->codigo;
    }

    /**
     * @param string $codigo
     * @return \Clases\ClaseTitulosUni
     */
    public function setCodigo($codigo)
    {
      $this->codigo = $codigo;
      return $this;
    }

    /**
     * @return string
     */
    public function getNombre()
    {
      return $this->nombre;
    }

    /**
     * @param string $nombre
     * @return \Clases\ClaseTitulosUni
     */
    public function setNombre($nombre)
    {
      $this->nombre = $nombre;
      return $this;
    }

    /**
     * @return string
     */
    public function getTipo()
    {
      return $this->tipo;
    }

    /**
     * @param string $tipo
     * @return \Clases\ClaseTitulosUni
     */
    public function setTipo($tipo)
    {
      $this->tipo = $tipo;
      return $this;
    }

    /**
     * @return string
     */
    public function getArea()
    {
      return $this->area;
    }

    /**
     * @param string $area
     * @return \Clases\ClaseTitulosUni
     */
    public function setArea($area)
    {
      $this->area = $area;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param string $url
     * @return \Clases\ClaseTitulosUni
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

    /**
     * @return string
     */
    public function getImagen()
    {
      return $this->imagen;
    }

    /**
     * @param string $imagen
     * @return \Clases\ClaseTitulosUni
     */
    public function setImagen($imagen)
    {
      $this->imagen = $imagen;
      return $this;
    }

}
