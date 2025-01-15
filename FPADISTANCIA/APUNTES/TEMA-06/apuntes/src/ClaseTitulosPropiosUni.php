<?php

namespace Clases;

class ClaseTitulosPropiosUni
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
     * @var string $tipocurso
     */
    protected $tipocurso = null;

    /**
     * @var string $desctipocurso
     */
    protected $desctipocurso = null;

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
     * @return \Clases\ClaseTitulosPropiosUni
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
     * @return \Clases\ClaseTitulosPropiosUni
     */
    public function setNombre($nombre)
    {
      $this->nombre = $nombre;
      return $this;
    }

    /**
     * @return string
     */
    public function getTipocurso()
    {
      return $this->tipocurso;
    }

    /**
     * @param string $tipocurso
     * @return \Clases\ClaseTitulosPropiosUni
     */
    public function setTipocurso($tipocurso)
    {
      $this->tipocurso = $tipocurso;
      return $this;
    }

    /**
     * @return string
     */
    public function getDesctipocurso()
    {
      return $this->desctipocurso;
    }

    /**
     * @param string $desctipocurso
     * @return \Clases\ClaseTitulosPropiosUni
     */
    public function setDesctipocurso($desctipocurso)
    {
      $this->desctipocurso = $desctipocurso;
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
     * @return \Clases\ClaseTitulosPropiosUni
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
     * @return \Clases\ClaseTitulosPropiosUni
     */
    public function setImagen($imagen)
    {
      $this->imagen = $imagen;
      return $this;
    }

}
