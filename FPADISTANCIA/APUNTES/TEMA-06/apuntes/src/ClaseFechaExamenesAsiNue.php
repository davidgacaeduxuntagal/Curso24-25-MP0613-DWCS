<?php

namespace Clases;

class ClaseFechaExamenesAsiNue
{

    /**
     * @var string $codexa
     */
    protected $codexa = null;

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
     * @var string $idactiv
     */
    protected $idactiv = null;

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
     * @var string $idperiodo
     */
    protected $idperiodo = null;

    /**
     * @var string $observaciones
     */
    protected $observaciones = null;

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
     * @var string $diasemana
     */
    protected $diasemana = null;

    /**
     * @var string $abrdsm
     */
    protected $abrdsm = null;

    /**
     * @var string $dsm
     */
    protected $dsm = null;

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
     * @var string $campus
     */
    protected $campus = null;

    /**
     * @var string $edificio
     */
    protected $edificio = null;

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
    public function getCodexa()
    {
      return $this->codexa;
    }

    /**
     * @param string $codexa
     * @return \Clases\ClaseFechaExamenesAsiNue
     */
    public function setCodexa($codexa)
    {
      $this->codexa = $codexa;
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
     * @return \Clases\ClaseFechaExamenesAsiNue
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
     * @return \Clases\ClaseFechaExamenesAsiNue
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
     * @return \Clases\ClaseFechaExamenesAsiNue
     */
    public function setNomasi($nomasi)
    {
      $this->nomasi = $nomasi;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdactiv()
    {
      return $this->idactiv;
    }

    /**
     * @param string $idactiv
     * @return \Clases\ClaseFechaExamenesAsiNue
     */
    public function setIdactiv($idactiv)
    {
      $this->idactiv = $idactiv;
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
     * @return \Clases\ClaseFechaExamenesAsiNue
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
     * @return \Clases\ClaseFechaExamenesAsiNue
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
     * @return \Clases\ClaseFechaExamenesAsiNue
     */
    public function setConv($conv)
    {
      $this->conv = $conv;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdperiodo()
    {
      return $this->idperiodo;
    }

    /**
     * @param string $idperiodo
     * @return \Clases\ClaseFechaExamenesAsiNue
     */
    public function setIdperiodo($idperiodo)
    {
      $this->idperiodo = $idperiodo;
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
     * @return \Clases\ClaseFechaExamenesAsiNue
     */
    public function setObservaciones($observaciones)
    {
      $this->observaciones = $observaciones;
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
     * @return \Clases\ClaseFechaExamenesAsiNue
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
     * @return \Clases\ClaseFechaExamenesAsiNue
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
     * @return \Clases\ClaseFechaExamenesAsiNue
     */
    public function setHorafin($horafin)
    {
      $this->horafin = $horafin;
      return $this;
    }

    /**
     * @return string
     */
    public function getDiasemana()
    {
      return $this->diasemana;
    }

    /**
     * @param string $diasemana
     * @return \Clases\ClaseFechaExamenesAsiNue
     */
    public function setDiasemana($diasemana)
    {
      $this->diasemana = $diasemana;
      return $this;
    }

    /**
     * @return string
     */
    public function getAbrdsm()
    {
      return $this->abrdsm;
    }

    /**
     * @param string $abrdsm
     * @return \Clases\ClaseFechaExamenesAsiNue
     */
    public function setAbrdsm($abrdsm)
    {
      $this->abrdsm = $abrdsm;
      return $this;
    }

    /**
     * @return string
     */
    public function getDsm()
    {
      return $this->dsm;
    }

    /**
     * @param string $dsm
     * @return \Clases\ClaseFechaExamenesAsiNue
     */
    public function setDsm($dsm)
    {
      $this->dsm = $dsm;
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
     * @return \Clases\ClaseFechaExamenesAsiNue
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
     * @return \Clases\ClaseFechaExamenesAsiNue
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
     * @return \Clases\ClaseFechaExamenesAsiNue
     */
    public function setDescaula($descaula)
    {
      $this->descaula = $descaula;
      return $this;
    }

    /**
     * @return string
     */
    public function getCampus()
    {
      return $this->campus;
    }

    /**
     * @param string $campus
     * @return \Clases\ClaseFechaExamenesAsiNue
     */
    public function setCampus($campus)
    {
      $this->campus = $campus;
      return $this;
    }

    /**
     * @return string
     */
    public function getEdificio()
    {
      return $this->edificio;
    }

    /**
     * @param string $edificio
     * @return \Clases\ClaseFechaExamenesAsiNue
     */
    public function setEdificio($edificio)
    {
      $this->edificio = $edificio;
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
     * @return \Clases\ClaseFechaExamenesAsiNue
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
     * @return \Clases\ClaseFechaExamenesAsiNue
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
     * @return \Clases\ClaseFechaExamenesAsiNue
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
     * @return \Clases\ClaseFechaExamenesAsiNue
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
     * @return \Clases\ClaseFechaExamenesAsiNue
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
     * @return \Clases\ClaseFechaExamenesAsiNue
     */
    public function setObserva_ge($observa_ge)
    {
      $this->observa_ge = $observa_ge;
      return $this;
    }

}
