<?php

namespace Clases;

class ClaseDptoAsig
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
     * @var string $responsable
     */
    protected $responsable = null;

    /**
     * @var string $porcentaje
     */
    protected $porcentaje = null;

    
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
     * @return \Clases\ClaseDptoAsig
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
     * @return \Clases\ClaseDptoAsig
     */
    public function setNombre($nombre)
    {
      $this->nombre = $nombre;
      return $this;
    }

    /**
     * @return string
     */
    public function getResponsable()
    {
      return $this->responsable;
    }

    /**
     * @param string $responsable
     * @return \Clases\ClaseDptoAsig
     */
    public function setResponsable($responsable)
    {
      $this->responsable = $responsable;
      return $this;
    }

    /**
     * @return string
     */
    public function getPorcentaje()
    {
      return $this->porcentaje;
    }

    /**
     * @param string $porcentaje
     * @return \Clases\ClaseDptoAsig
     */
    public function setPorcentaje($porcentaje)
    {
      $this->porcentaje = $porcentaje;
      return $this;
    }

}
