<?php

namespace Clases;

class ClaseDatosPlan
{

    /**
     * @var string $codest
     */
    protected $codest = null;

    /**
     * @var string $nomest
     */
    protected $nomest = null;

    /**
     * @var string $codestgen
     */
    protected $codestgen = null;

    /**
     * @var string $nomestgen
     */
    protected $nomestgen = null;

    /**
     * @var string $tipo
     */
    protected $tipo = null;

    /**
     * @var string $subtipo
     */
    protected $subtipo = null;

    /**
     * @var string $subtiponombre
     */
    protected $subtiponombre = null;

    /**
     * @var string $codcen
     */
    protected $codcen = null;

    /**
     * @var string $nomcen
     */
    protected $nomcen = null;

    /**
     * @var string $anoini
     */
    protected $anoini = null;

    /**
     * @var string $anofin
     */
    protected $anofin = null;

    /**
     * @var string $codruct
     */
    protected $codruct = null;

    /**
     * @var string $ncursos
     */
    protected $ncursos = null;

    /**
     * @var string $tipogra
     */
    protected $tipogra = null;

    /**
     * @var string $area
     */
    protected $area = null;

    /**
     * @var string $urlmovil
     */
    protected $urlmovil = null;

    /**
     * @var string $imagenmovil
     */
    protected $imagenmovil = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCodest()
    {
      return $this->codest;
    }

    /**
     * @param string $codest
     * @return \Clases\ClaseDatosPlan
     */
    public function setCodest($codest)
    {
      $this->codest = $codest;
      return $this;
    }

    /**
     * @return string
     */
    public function getNomest()
    {
      return $this->nomest;
    }

    /**
     * @param string $nomest
     * @return \Clases\ClaseDatosPlan
     */
    public function setNomest($nomest)
    {
      $this->nomest = $nomest;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodestgen()
    {
      return $this->codestgen;
    }

    /**
     * @param string $codestgen
     * @return \Clases\ClaseDatosPlan
     */
    public function setCodestgen($codestgen)
    {
      $this->codestgen = $codestgen;
      return $this;
    }

    /**
     * @return string
     */
    public function getNomestgen()
    {
      return $this->nomestgen;
    }

    /**
     * @param string $nomestgen
     * @return \Clases\ClaseDatosPlan
     */
    public function setNomestgen($nomestgen)
    {
      $this->nomestgen = $nomestgen;
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
     * @return \Clases\ClaseDatosPlan
     */
    public function setTipo($tipo)
    {
      $this->tipo = $tipo;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubtipo()
    {
      return $this->subtipo;
    }

    /**
     * @param string $subtipo
     * @return \Clases\ClaseDatosPlan
     */
    public function setSubtipo($subtipo)
    {
      $this->subtipo = $subtipo;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubtiponombre()
    {
      return $this->subtiponombre;
    }

    /**
     * @param string $subtiponombre
     * @return \Clases\ClaseDatosPlan
     */
    public function setSubtiponombre($subtiponombre)
    {
      $this->subtiponombre = $subtiponombre;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodcen()
    {
      return $this->codcen;
    }

    /**
     * @param string $codcen
     * @return \Clases\ClaseDatosPlan
     */
    public function setCodcen($codcen)
    {
      $this->codcen = $codcen;
      return $this;
    }

    /**
     * @return string
     */
    public function getNomcen()
    {
      return $this->nomcen;
    }

    /**
     * @param string $nomcen
     * @return \Clases\ClaseDatosPlan
     */
    public function setNomcen($nomcen)
    {
      $this->nomcen = $nomcen;
      return $this;
    }

    /**
     * @return string
     */
    public function getAnoini()
    {
      return $this->anoini;
    }

    /**
     * @param string $anoini
     * @return \Clases\ClaseDatosPlan
     */
    public function setAnoini($anoini)
    {
      $this->anoini = $anoini;
      return $this;
    }

    /**
     * @return string
     */
    public function getAnofin()
    {
      return $this->anofin;
    }

    /**
     * @param string $anofin
     * @return \Clases\ClaseDatosPlan
     */
    public function setAnofin($anofin)
    {
      $this->anofin = $anofin;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodruct()
    {
      return $this->codruct;
    }

    /**
     * @param string $codruct
     * @return \Clases\ClaseDatosPlan
     */
    public function setCodruct($codruct)
    {
      $this->codruct = $codruct;
      return $this;
    }

    /**
     * @return string
     */
    public function getNcursos()
    {
      return $this->ncursos;
    }

    /**
     * @param string $ncursos
     * @return \Clases\ClaseDatosPlan
     */
    public function setNcursos($ncursos)
    {
      $this->ncursos = $ncursos;
      return $this;
    }

    /**
     * @return string
     */
    public function getTipogra()
    {
      return $this->tipogra;
    }

    /**
     * @param string $tipogra
     * @return \Clases\ClaseDatosPlan
     */
    public function setTipogra($tipogra)
    {
      $this->tipogra = $tipogra;
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
     * @return \Clases\ClaseDatosPlan
     */
    public function setArea($area)
    {
      $this->area = $area;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrlmovil()
    {
      return $this->urlmovil;
    }

    /**
     * @param string $urlmovil
     * @return \Clases\ClaseDatosPlan
     */
    public function setUrlmovil($urlmovil)
    {
      $this->urlmovil = $urlmovil;
      return $this;
    }

    /**
     * @return string
     */
    public function getImagenmovil()
    {
      return $this->imagenmovil;
    }

    /**
     * @param string $imagenmovil
     * @return \Clases\ClaseDatosPlan
     */
    public function setImagenmovil($imagenmovil)
    {
      $this->imagenmovil = $imagenmovil;
      return $this;
    }

}
