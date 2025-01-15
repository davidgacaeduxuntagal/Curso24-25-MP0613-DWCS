<?php

namespace Clases;

class ClaseAgrupaciones
{

    /**
     * @var string $idagrupa
     */
    protected $idagrupa = null;

    /**
     * @var string $descagr
     */
    protected $descagr = null;

    /**
     * @var string $enlaceagrp
     */
    protected $enlaceagrp = null;

    /**
     * @var string $codcen
     */
    protected $codcen = null;

    /**
     * @var string $desccen
     */
    protected $desccen = null;

    /**
     * @var string $codest
     */
    protected $codest = null;

    /**
     * @var string $nomest
     */
    protected $nomest = null;

    /**
     * @var string $numcurso
     */
    protected $numcurso = null;

    /**
     * @var string $nomturno
     */
    protected $nomturno = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getIdagrupa()
    {
      return $this->idagrupa;
    }

    /**
     * @param string $idagrupa
     * @return \Clases\ClaseAgrupaciones
     */
    public function setIdagrupa($idagrupa)
    {
      $this->idagrupa = $idagrupa;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescagr()
    {
      return $this->descagr;
    }

    /**
     * @param string $descagr
     * @return \Clases\ClaseAgrupaciones
     */
    public function setDescagr($descagr)
    {
      $this->descagr = $descagr;
      return $this;
    }

    /**
     * @return string
     */
    public function getEnlaceagrp()
    {
      return $this->enlaceagrp;
    }

    /**
     * @param string $enlaceagrp
     * @return \Clases\ClaseAgrupaciones
     */
    public function setEnlaceagrp($enlaceagrp)
    {
      $this->enlaceagrp = $enlaceagrp;
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
     * @return \Clases\ClaseAgrupaciones
     */
    public function setCodcen($codcen)
    {
      $this->codcen = $codcen;
      return $this;
    }

    /**
     * @return string
     */
    public function getDesccen()
    {
      return $this->desccen;
    }

    /**
     * @param string $desccen
     * @return \Clases\ClaseAgrupaciones
     */
    public function setDesccen($desccen)
    {
      $this->desccen = $desccen;
      return $this;
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
     * @return \Clases\ClaseAgrupaciones
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
     * @return \Clases\ClaseAgrupaciones
     */
    public function setNomest($nomest)
    {
      $this->nomest = $nomest;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumcurso()
    {
      return $this->numcurso;
    }

    /**
     * @param string $numcurso
     * @return \Clases\ClaseAgrupaciones
     */
    public function setNumcurso($numcurso)
    {
      $this->numcurso = $numcurso;
      return $this;
    }

    /**
     * @return string
     */
    public function getNomturno()
    {
      return $this->nomturno;
    }

    /**
     * @param string $nomturno
     * @return \Clases\ClaseAgrupaciones
     */
    public function setNomturno($nomturno)
    {
      $this->nomturno = $nomturno;
      return $this;
    }

}
