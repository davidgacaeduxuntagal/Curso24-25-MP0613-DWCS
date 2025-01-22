<?php

namespace Clases;

class ClaseHorarios
{

    /**
     * @var string $teopra
     */
    protected $teopra = null;

    /**
     * @var string $codgrp
     */
    protected $codgrp = null;

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
     * @var string $fechainicio
     */
    protected $fechainicio = null;

    /**
     * @var string $fechafin
     */
    protected $fechafin = null;

    /**
     * @var string $dia
     */
    protected $dia = null;

    /**
     * @var string $diasemana
     */
    protected $diasemana = null;

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
     * @var string $descaula
     */
    protected $descaula = null;

    /**
     * @var string $aulasig
     */
    protected $aulasig = null;

    /**
     * @var string $clase_activ
     */
    protected $clase_activ = null;

    /**
     * @var string $descactiv
     */
    protected $descactiv = null;

    /**
     * @var string $descgrupo
     */
    protected $descgrupo = null;

    /**
     * @var string $esara_sn
     */
    protected $esara_sn = null;

    /**
     * @var string $idioma
     */
    protected $idioma = null;

    /**
     * @var string $capacidadgrupo
     */
    protected $capacidadgrupo = null;

    /**
     * @var string $flgcpc
     */
    protected $flgcpc = null;

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
    public function getTeopra()
    {
      return $this->teopra;
    }

    /**
     * @param string $teopra
     * @return \Clases\ClaseHorarios
     */
    public function setTeopra($teopra)
    {
      $this->teopra = $teopra;
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
     * @return \Clases\ClaseHorarios
     */
    public function setCodgrp($codgrp)
    {
      $this->codgrp = $codgrp;
      return $this;
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
     * @return \Clases\ClaseHorarios
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
     * @return \Clases\ClaseHorarios
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
     * @return \Clases\ClaseHorarios
     */
    public function setGaccodnum($gaccodnum)
    {
      $this->gaccodnum = $gaccodnum;
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
     * @return \Clases\ClaseHorarios
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
     * @return \Clases\ClaseHorarios
     */
    public function setFechafin($fechafin)
    {
      $this->fechafin = $fechafin;
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
     * @return \Clases\ClaseHorarios
     */
    public function setDia($dia)
    {
      $this->dia = $dia;
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
     * @return \Clases\ClaseHorarios
     */
    public function setDiasemana($diasemana)
    {
      $this->diasemana = $diasemana;
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
     * @return \Clases\ClaseHorarios
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
     * @return \Clases\ClaseHorarios
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
     * @return \Clases\ClaseHorarios
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
     * @return \Clases\ClaseHorarios
     */
    public function setDescaula($descaula)
    {
      $this->descaula = $descaula;
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
     * @return \Clases\ClaseHorarios
     */
    public function setAulasig($aulasig)
    {
      $this->aulasig = $aulasig;
      return $this;
    }

    /**
     * @return string
     */
    public function getClase_activ()
    {
      return $this->clase_activ;
    }

    /**
     * @param string $clase_activ
     * @return \Clases\ClaseHorarios
     */
    public function setClase_activ($clase_activ)
    {
      $this->clase_activ = $clase_activ;
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
     * @return \Clases\ClaseHorarios
     */
    public function setDescactiv($descactiv)
    {
      $this->descactiv = $descactiv;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescgrupo()
    {
      return $this->descgrupo;
    }

    /**
     * @param string $descgrupo
     * @return \Clases\ClaseHorarios
     */
    public function setDescgrupo($descgrupo)
    {
      $this->descgrupo = $descgrupo;
      return $this;
    }

    /**
     * @return string
     */
    public function getEsara_sn()
    {
      return $this->esara_sn;
    }

    /**
     * @param string $esara_sn
     * @return \Clases\ClaseHorarios
     */
    public function setEsara_sn($esara_sn)
    {
      $this->esara_sn = $esara_sn;
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
     * @return \Clases\ClaseHorarios
     */
    public function setIdioma($idioma)
    {
      $this->idioma = $idioma;
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
     * @return \Clases\ClaseHorarios
     */
    public function setCapacidadgrupo($capacidadgrupo)
    {
      $this->capacidadgrupo = $capacidadgrupo;
      return $this;
    }

    /**
     * @return string
     */
    public function getFlgcpc()
    {
      return $this->flgcpc;
    }

    /**
     * @param string $flgcpc
     * @return \Clases\ClaseHorarios
     */
    public function setFlgcpc($flgcpc)
    {
      $this->flgcpc = $flgcpc;
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
     * @return \Clases\ClaseHorarios
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
     * @return \Clases\ClaseHorarios
     */
    public function setPlacodalf($placodalf)
    {
      $this->placodalf = $placodalf;
      return $this;
    }

}
