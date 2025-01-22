<?php

namespace Clases;

class ClaseFechaExamenesAsi
{

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $fecha
     */
    protected $fecha = null;

    /**
     * @var string $codasi
     */
    protected $codasi = null;

    /**
     * @var string $nomasi
     */
    protected $nomasi = null;

    /**
     * @var string $codgrp
     */
    protected $codgrp = null;

    /**
     * @var string $codconv
     */
    protected $codconv = null;

    /**
     * @var string $conv
     */
    protected $conv = null;

    /**
     * @var string $observaciones
     */
    protected $observaciones = null;

    /**
     * @var string $codest
     */
    protected $codest = null;

    /**
     * @var string $numcurso
     */
    protected $numcurso = null;

    /**
     * @var string $desccurso
     */
    protected $desccurso = null;

    /**
     * @var string $complform
     */
    protected $complform = null;

    /**
     * @var string $fechareal
     */
    protected $fechareal = null;

    /**
     * @var string $horaini
     */
    protected $horaini = null;

    /**
     * @var string $horafin
     */
    protected $horafin = null;

    /**
     * @var string $aula
     */
    protected $aula = null;

    /**
     * @var string $aulasig
     */
    protected $aulasig = null;

    /**
     * @var string $descaula
     */
    protected $descaula = null;

    /**
     * @var string $dia
     */
    protected $dia = null;

    /**
     * @var string $orden
     */
    protected $orden = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \Clases\ClaseFechaExamenesAsi
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getFecha()
    {
      return $this->fecha;
    }

    /**
     * @param string $fecha
     * @return \Clases\ClaseFechaExamenesAsi
     */
    public function setFecha($fecha)
    {
      $this->fecha = $fecha;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodasi()
    {
      return $this->codasi;
    }

    /**
     * @param string $codasi
     * @return \Clases\ClaseFechaExamenesAsi
     */
    public function setCodasi($codasi)
    {
      $this->codasi = $codasi;
      return $this;
    }

    /**
     * @return string
     */
    public function getNomasi()
    {
      return $this->nomasi;
    }

    /**
     * @param string $nomasi
     * @return \Clases\ClaseFechaExamenesAsi
     */
    public function setNomasi($nomasi)
    {
      $this->nomasi = $nomasi;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodgrp()
    {
      return $this->codgrp;
    }

    /**
     * @param string $codgrp
     * @return \Clases\ClaseFechaExamenesAsi
     */
    public function setCodgrp($codgrp)
    {
      $this->codgrp = $codgrp;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodconv()
    {
      return $this->codconv;
    }

    /**
     * @param string $codconv
     * @return \Clases\ClaseFechaExamenesAsi
     */
    public function setCodconv($codconv)
    {
      $this->codconv = $codconv;
      return $this;
    }

    /**
     * @return string
     */
    public function getConv()
    {
      return $this->conv;
    }

    /**
     * @param string $conv
     * @return \Clases\ClaseFechaExamenesAsi
     */
    public function setConv($conv)
    {
      $this->conv = $conv;
      return $this;
    }

    /**
     * @return string
     */
    public function getObservaciones()
    {
      return $this->observaciones;
    }

    /**
     * @param string $observaciones
     * @return \Clases\ClaseFechaExamenesAsi
     */
    public function setObservaciones($observaciones)
    {
      $this->observaciones = $observaciones;
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
     * @return \Clases\ClaseFechaExamenesAsi
     */
    public function setCodest($codest)
    {
      $this->codest = $codest;
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
     * @return \Clases\ClaseFechaExamenesAsi
     */
    public function setNumcurso($numcurso)
    {
      $this->numcurso = $numcurso;
      return $this;
    }

    /**
     * @return string
     */
    public function getDesccurso()
    {
      return $this->desccurso;
    }

    /**
     * @param string $desccurso
     * @return \Clases\ClaseFechaExamenesAsi
     */
    public function setDesccurso($desccurso)
    {
      $this->desccurso = $desccurso;
      return $this;
    }

    /**
     * @return string
     */
    public function getComplform()
    {
      return $this->complform;
    }

    /**
     * @param string $complform
     * @return \Clases\ClaseFechaExamenesAsi
     */
    public function setComplform($complform)
    {
      $this->complform = $complform;
      return $this;
    }

    /**
     * @return string
     */
    public function getFechareal()
    {
      return $this->fechareal;
    }

    /**
     * @param string $fechareal
     * @return \Clases\ClaseFechaExamenesAsi
     */
    public function setFechareal($fechareal)
    {
      $this->fechareal = $fechareal;
      return $this;
    }

    /**
     * @return string
     */
    public function getHoraini()
    {
      return $this->horaini;
    }

    /**
     * @param string $horaini
     * @return \Clases\ClaseFechaExamenesAsi
     */
    public function setHoraini($horaini)
    {
      $this->horaini = $horaini;
      return $this;
    }

    /**
     * @return string
     */
    public function getHorafin()
    {
      return $this->horafin;
    }

    /**
     * @param string $horafin
     * @return \Clases\ClaseFechaExamenesAsi
     */
    public function setHorafin($horafin)
    {
      $this->horafin = $horafin;
      return $this;
    }

    /**
     * @return string
     */
    public function getAula()
    {
      return $this->aula;
    }

    /**
     * @param string $aula
     * @return \Clases\ClaseFechaExamenesAsi
     */
    public function setAula($aula)
    {
      $this->aula = $aula;
      return $this;
    }

    /**
     * @return string
     */
    public function getAulasig()
    {
      return $this->aulasig;
    }

    /**
     * @param string $aulasig
     * @return \Clases\ClaseFechaExamenesAsi
     */
    public function setAulasig($aulasig)
    {
      $this->aulasig = $aulasig;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescaula()
    {
      return $this->descaula;
    }

    /**
     * @param string $descaula
     * @return \Clases\ClaseFechaExamenesAsi
     */
    public function setDescaula($descaula)
    {
      $this->descaula = $descaula;
      return $this;
    }

    /**
     * @return string
     */
    public function getDia()
    {
      return $this->dia;
    }

    /**
     * @param string $dia
     * @return \Clases\ClaseFechaExamenesAsi
     */
    public function setDia($dia)
    {
      $this->dia = $dia;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrden()
    {
      return $this->orden;
    }

    /**
     * @param string $orden
     * @return \Clases\ClaseFechaExamenesAsi
     */
    public function setOrden($orden)
    {
      $this->orden = $orden;
      return $this;
    }

}
