<?php

namespace Clases;

class ClaseHorarioAgrp
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
     * @var string $codgrp
     */
    protected $codgrp = null;

    /**
     * @var string $nomgrp
     */
    protected $nomgrp = null;

    /**
     * @var string $aula
     */
    protected $aula = null;

    /**
     * @var string $descaula
     */
    protected $descaula = null;

    /**
     * @var string $dni
     */
    protected $dni = null;

    /**
     * @var string $nombre
     */
    protected $nombre = null;

    /**
     * @var string $apellido1
     */
    protected $apellido1 = null;

    /**
     * @var string $apellido2
     */
    protected $apellido2 = null;

    /**
     * @var string $idplaza
     */
    protected $idplaza = null;

    /**
     * @var string $nomplaz
     */
    protected $nomplaz = null;

    /**
     * @var string $fechainicio
     */
    protected $fechainicio = null;

    /**
     * @var string $fechafin
     */
    protected $fechafin = null;

    /**
     * @var string $horaini
     */
    protected $horaini = null;

    /**
     * @var string $horafin
     */
    protected $horafin = null;

    /**
     * @var string $idactiv
     */
    protected $idactiv = null;

    /**
     * @var string $nomact
     */
    protected $nomact = null;

    /**
     * @var string $teopra
     */
    protected $teopra = null;

    /**
     * @var string $codasi
     */
    protected $codasi = null;

    /**
     * @var string $nomasi
     */
    protected $nomasi = null;

    /**
     * @var string $dia
     */
    protected $dia = null;

    /**
     * @var string $diasem
     */
    protected $diasem = null;

    /**
     * @var string $edificio
     */
    protected $edificio = null;

    /**
     * @var string $aulasig
     */
    protected $aulasig = null;

    
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
     * @return \Clases\ClaseHorarioAgrp
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
     * @return \Clases\ClaseHorarioAgrp
     */
    public function setDescagr($descagr)
    {
      $this->descagr = $descagr;
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
     * @return \Clases\ClaseHorarioAgrp
     */
    public function setCodgrp($codgrp)
    {
      $this->codgrp = $codgrp;
      return $this;
    }

    /**
     * @return string
     */
    public function getNomgrp()
    {
      return $this->nomgrp;
    }

    /**
     * @param string $nomgrp
     * @return \Clases\ClaseHorarioAgrp
     */
    public function setNomgrp($nomgrp)
    {
      $this->nomgrp = $nomgrp;
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
     * @return \Clases\ClaseHorarioAgrp
     */
    public function setAula($aula)
    {
      $this->aula = $aula;
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
     * @return \Clases\ClaseHorarioAgrp
     */
    public function setDescaula($descaula)
    {
      $this->descaula = $descaula;
      return $this;
    }

    /**
     * @return string
     */
    public function getDni()
    {
      return $this->dni;
    }

    /**
     * @param string $dni
     * @return \Clases\ClaseHorarioAgrp
     */
    public function setDni($dni)
    {
      $this->dni = $dni;
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
     * @return \Clases\ClaseHorarioAgrp
     */
    public function setNombre($nombre)
    {
      $this->nombre = $nombre;
      return $this;
    }

    /**
     * @return string
     */
    public function getApellido1()
    {
      return $this->apellido1;
    }

    /**
     * @param string $apellido1
     * @return \Clases\ClaseHorarioAgrp
     */
    public function setApellido1($apellido1)
    {
      $this->apellido1 = $apellido1;
      return $this;
    }

    /**
     * @return string
     */
    public function getApellido2()
    {
      return $this->apellido2;
    }

    /**
     * @param string $apellido2
     * @return \Clases\ClaseHorarioAgrp
     */
    public function setApellido2($apellido2)
    {
      $this->apellido2 = $apellido2;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdplaza()
    {
      return $this->idplaza;
    }

    /**
     * @param string $idplaza
     * @return \Clases\ClaseHorarioAgrp
     */
    public function setIdplaza($idplaza)
    {
      $this->idplaza = $idplaza;
      return $this;
    }

    /**
     * @return string
     */
    public function getNomplaz()
    {
      return $this->nomplaz;
    }

    /**
     * @param string $nomplaz
     * @return \Clases\ClaseHorarioAgrp
     */
    public function setNomplaz($nomplaz)
    {
      $this->nomplaz = $nomplaz;
      return $this;
    }

    /**
     * @return string
     */
    public function getFechainicio()
    {
      return $this->fechainicio;
    }

    /**
     * @param string $fechainicio
     * @return \Clases\ClaseHorarioAgrp
     */
    public function setFechainicio($fechainicio)
    {
      $this->fechainicio = $fechainicio;
      return $this;
    }

    /**
     * @return string
     */
    public function getFechafin()
    {
      return $this->fechafin;
    }

    /**
     * @param string $fechafin
     * @return \Clases\ClaseHorarioAgrp
     */
    public function setFechafin($fechafin)
    {
      $this->fechafin = $fechafin;
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
     * @return \Clases\ClaseHorarioAgrp
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
     * @return \Clases\ClaseHorarioAgrp
     */
    public function setHorafin($horafin)
    {
      $this->horafin = $horafin;
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
     * @return \Clases\ClaseHorarioAgrp
     */
    public function setIdactiv($idactiv)
    {
      $this->idactiv = $idactiv;
      return $this;
    }

    /**
     * @return string
     */
    public function getNomact()
    {
      return $this->nomact;
    }

    /**
     * @param string $nomact
     * @return \Clases\ClaseHorarioAgrp
     */
    public function setNomact($nomact)
    {
      $this->nomact = $nomact;
      return $this;
    }

    /**
     * @return string
     */
    public function getTeopra()
    {
      return $this->teopra;
    }

    /**
     * @param string $teopra
     * @return \Clases\ClaseHorarioAgrp
     */
    public function setTeopra($teopra)
    {
      $this->teopra = $teopra;
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
     * @return \Clases\ClaseHorarioAgrp
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
     * @return \Clases\ClaseHorarioAgrp
     */
    public function setNomasi($nomasi)
    {
      $this->nomasi = $nomasi;
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
     * @return \Clases\ClaseHorarioAgrp
     */
    public function setDia($dia)
    {
      $this->dia = $dia;
      return $this;
    }

    /**
     * @return string
     */
    public function getDiasem()
    {
      return $this->diasem;
    }

    /**
     * @param string $diasem
     * @return \Clases\ClaseHorarioAgrp
     */
    public function setDiasem($diasem)
    {
      $this->diasem = $diasem;
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
     * @return \Clases\ClaseHorarioAgrp
     */
    public function setEdificio($edificio)
    {
      $this->edificio = $edificio;
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
     * @return \Clases\ClaseHorarioAgrp
     */
    public function setAulasig($aulasig)
    {
      $this->aulasig = $aulasig;
      return $this;
    }

}
