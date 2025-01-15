<?php

namespace Clases;

class ClaseGrupoAsi
{

    /**
     * @var string $ejecodnum
     */
    protected $ejecodnum = null;

    /**
     * @var string $vaccodnum
     */
    protected $vaccodnum = null;

    /**
     * @var string $gaccodnum
     */
    protected $gaccodnum = null;

    /**
     * @var string $turno
     */
    protected $turno = null;

    /**
     * @var string $idioma
     */
    protected $idioma = null;

    /**
     * @var string $duracion
     */
    protected $duracion = null;

    /**
     * @var string $idgrpactiv
     */
    protected $idgrpactiv = null;

    /**
     * @var string $descripcion
     */
    protected $descripcion = null;

    /**
     * @var string $claseactiv
     */
    protected $claseactiv = null;

    /**
     * @var string $descactiv
     */
    protected $descactiv = null;

    /**
     * @var string $capacidadgrupo
     */
    protected $capacidadgrupo = null;

    /**
     * @var string $nodocodnum
     */
    protected $nodocodnum = null;

    /**
     * @var string $placodalf
     */
    protected $placodalf = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getEjecodnum()
    {
      return $this->ejecodnum;
    }

    /**
     * @param string $ejecodnum
     * @return \Clases\ClaseGrupoAsi
     */
    public function setEjecodnum($ejecodnum)
    {
      $this->ejecodnum = $ejecodnum;
      return $this;
    }

    /**
     * @return string
     */
    public function getVaccodnum()
    {
      return $this->vaccodnum;
    }

    /**
     * @param string $vaccodnum
     * @return \Clases\ClaseGrupoAsi
     */
    public function setVaccodnum($vaccodnum)
    {
      $this->vaccodnum = $vaccodnum;
      return $this;
    }

    /**
     * @return string
     */
    public function getGaccodnum()
    {
      return $this->gaccodnum;
    }

    /**
     * @param string $gaccodnum
     * @return \Clases\ClaseGrupoAsi
     */
    public function setGaccodnum($gaccodnum)
    {
      $this->gaccodnum = $gaccodnum;
      return $this;
    }

    /**
     * @return string
     */
    public function getTurno()
    {
      return $this->turno;
    }

    /**
     * @param string $turno
     * @return \Clases\ClaseGrupoAsi
     */
    public function setTurno($turno)
    {
      $this->turno = $turno;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdioma()
    {
      return $this->idioma;
    }

    /**
     * @param string $idioma
     * @return \Clases\ClaseGrupoAsi
     */
    public function setIdioma($idioma)
    {
      $this->idioma = $idioma;
      return $this;
    }

    /**
     * @return string
     */
    public function getDuracion()
    {
      return $this->duracion;
    }

    /**
     * @param string $duracion
     * @return \Clases\ClaseGrupoAsi
     */
    public function setDuracion($duracion)
    {
      $this->duracion = $duracion;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdgrpactiv()
    {
      return $this->idgrpactiv;
    }

    /**
     * @param string $idgrpactiv
     * @return \Clases\ClaseGrupoAsi
     */
    public function setIdgrpactiv($idgrpactiv)
    {
      $this->idgrpactiv = $idgrpactiv;
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
     * @return \Clases\ClaseGrupoAsi
     */
    public function setDescripcion($descripcion)
    {
      $this->descripcion = $descripcion;
      return $this;
    }

    /**
     * @return string
     */
    public function getClaseactiv()
    {
      return $this->claseactiv;
    }

    /**
     * @param string $claseactiv
     * @return \Clases\ClaseGrupoAsi
     */
    public function setClaseactiv($claseactiv)
    {
      $this->claseactiv = $claseactiv;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescactiv()
    {
      return $this->descactiv;
    }

    /**
     * @param string $descactiv
     * @return \Clases\ClaseGrupoAsi
     */
    public function setDescactiv($descactiv)
    {
      $this->descactiv = $descactiv;
      return $this;
    }

    /**
     * @return string
     */
    public function getCapacidadgrupo()
    {
      return $this->capacidadgrupo;
    }

    /**
     * @param string $capacidadgrupo
     * @return \Clases\ClaseGrupoAsi
     */
    public function setCapacidadgrupo($capacidadgrupo)
    {
      $this->capacidadgrupo = $capacidadgrupo;
      return $this;
    }

    /**
     * @return string
     */
    public function getNodocodnum()
    {
      return $this->nodocodnum;
    }

    /**
     * @param string $nodocodnum
     * @return \Clases\ClaseGrupoAsi
     */
    public function setNodocodnum($nodocodnum)
    {
      $this->nodocodnum = $nodocodnum;
      return $this;
    }

    /**
     * @return string
     */
    public function getPlacodalf()
    {
      return $this->placodalf;
    }

    /**
     * @param string $placodalf
     * @return \Clases\ClaseGrupoAsi
     */
    public function setPlacodalf($placodalf)
    {
      $this->placodalf = $placodalf;
      return $this;
    }

}
