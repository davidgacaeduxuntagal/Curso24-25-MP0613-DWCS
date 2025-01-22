<?php

namespace Clases;

class ClaseFechaExamenesAsiTotal
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

    /**
     * @var string $flgaula
     */
    protected $flgaula = null;

    /**
     * @var string $turno
     */
    protected $turno = null;

    /**
     * @var string $duracion
     */
    protected $duracion = null;

    /**
     * @var string $capacidad_aulas
     */
    protected $capacidad_aulas = null;

    /**
     * @var string $observa_ge
     */
    protected $observa_ge = null;

    
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
     * @return \Clases\ClaseFechaExamenesAsiTotal
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
     * @return \Clases\ClaseFechaExamenesAsiTotal
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
     * @return \Clases\ClaseFechaExamenesAsiTotal
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
     * @return \Clases\ClaseFechaExamenesAsiTotal
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
     * @return \Clases\ClaseFechaExamenesAsiTotal
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
     * @return \Clases\ClaseFechaExamenesAsiTotal
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
     * @return \Clases\ClaseFechaExamenesAsiTotal
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
     * @return \Clases\ClaseFechaExamenesAsiTotal
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
     * @return \Clases\ClaseFechaExamenesAsiTotal
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
     * @return \Clases\ClaseFechaExamenesAsiTotal
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
     * @return \Clases\ClaseFechaExamenesAsiTotal
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
     * @return \Clases\ClaseFechaExamenesAsiTotal
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
     * @return \Clases\ClaseFechaExamenesAsiTotal
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
     * @return \Clases\ClaseFechaExamenesAsiTotal
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
     * @return \Clases\ClaseFechaExamenesAsiTotal
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
     * @return \Clases\ClaseFechaExamenesAsiTotal
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
     * @return \Clases\ClaseFechaExamenesAsiTotal
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
     * @return \Clases\ClaseFechaExamenesAsiTotal
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
     * @return \Clases\ClaseFechaExamenesAsiTotal
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
     * @return \Clases\ClaseFechaExamenesAsiTotal
     */
    public function setOrden($orden)
    {
      $this->orden = $orden;
      return $this;
    }

    /**
     * @return string
     */
    public function getFlgaula()
    {
      return $this->flgaula;
    }

    /**
     * @param string $flgaula
     * @return \Clases\ClaseFechaExamenesAsiTotal
     */
    public function setFlgaula($flgaula)
    {
      $this->flgaula = $flgaula;
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
     * @return \Clases\ClaseFechaExamenesAsiTotal
     */
    public function setTurno($turno)
    {
      $this->turno = $turno;
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
     * @return \Clases\ClaseFechaExamenesAsiTotal
     */
    public function setDuracion($duracion)
    {
      $this->duracion = $duracion;
      return $this;
    }

    /**
     * @return string
     */
    public function getCapacidad_aulas()
    {
      return $this->capacidad_aulas;
    }

    /**
     * @param string $capacidad_aulas
     * @return \Clases\ClaseFechaExamenesAsiTotal
     */
    public function setCapacidad_aulas($capacidad_aulas)
    {
      $this->capacidad_aulas = $capacidad_aulas;
      return $this;
    }

    /**
     * @return string
     */
    public function getObserva_ge()
    {
      return $this->observa_ge;
    }

    /**
     * @param string $observa_ge
     * @return \Clases\ClaseFechaExamenesAsiTotal
     */
    public function setObserva_ge($observa_ge)
    {
      $this->observa_ge = $observa_ge;
      return $this;
    }

}
