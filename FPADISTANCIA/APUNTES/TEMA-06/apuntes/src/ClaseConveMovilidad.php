<?php

namespace Clases;

class ClaseConveMovilidad
{

    /**
     * @var string $tip_codnum
     */
    protected $tip_codnum = null;

    /**
     * @var string $uni_codalf
     */
    protected $uni_codalf = null;

    /**
     * @var string $pai_codalf
     */
    protected $pai_codalf = null;

    /**
     * @var string $nombre
     */
    protected $nombre = null;

    /**
     * @var string $nomuni
     */
    protected $nomuni = null;

    /**
     * @var string $are_codalf
     */
    protected $are_codalf = null;

    /**
     * @var string $desc_area_eng
     */
    protected $desc_area_eng = null;

    /**
     * @var string $desc_area_val
     */
    protected $desc_area_val = null;

    /**
     * @var string $desc_area_cas
     */
    protected $desc_area_cas = null;

    /**
     * @var string $nivel
     */
    protected $nivel = null;

    /**
     * @var string $plazas
     */
    protected $plazas = null;

    /**
     * @var string $meses
     */
    protected $meses = null;

    /**
     * @var string $vigente
     */
    protected $vigente = null;

    /**
     * @var string $desde
     */
    protected $desde = null;

    /**
     * @var string $hasta
     */
    protected $hasta = null;

    /**
     * @var string $flgmodificable
     */
    protected $flgmodificable = null;

    /**
     * @var string $disp_desidi2
     */
    protected $disp_desidi2 = null;

    /**
     * @var string $prog_codnum
     */
    protected $prog_codnum = null;

    /**
     * @var string $cen_codnum
     */
    protected $cen_codnum = null;

    /**
     * @var string $nom_centro
     */
    protected $nom_centro = null;

    /**
     * @var string $idi_universidad
     */
    protected $idi_universidad = null;

    /**
     * @var string $modo
     */
    protected $modo = null;

    /**
     * @var string $idiomas_nivel1
     */
    protected $idiomas_nivel1 = null;

    /**
     * @var string $idiomas_nivel2
     */
    protected $idiomas_nivel2 = null;

    /**
     * @var string $idiomas_nivel3
     */
    protected $idiomas_nivel3 = null;

    /**
     * @var string $nomcoordina
     */
    protected $nomcoordina = null;

    /**
     * @var string $promotor_ua
     */
    protected $promotor_ua = null;

    /**
     * @var string $web_uni
     */
    protected $web_uni = null;

    /**
     * @var string $web_oficina
     */
    protected $web_oficina = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getTip_codnum()
    {
      return $this->tip_codnum;
    }

    /**
     * @param string $tip_codnum
     * @return \Clases\ClaseConveMovilidad
     */
    public function setTip_codnum($tip_codnum)
    {
      $this->tip_codnum = $tip_codnum;
      return $this;
    }

    /**
     * @return string
     */
    public function getUni_codalf()
    {
      return $this->uni_codalf;
    }

    /**
     * @param string $uni_codalf
     * @return \Clases\ClaseConveMovilidad
     */
    public function setUni_codalf($uni_codalf)
    {
      $this->uni_codalf = $uni_codalf;
      return $this;
    }

    /**
     * @return string
     */
    public function getPai_codalf()
    {
      return $this->pai_codalf;
    }

    /**
     * @param string $pai_codalf
     * @return \Clases\ClaseConveMovilidad
     */
    public function setPai_codalf($pai_codalf)
    {
      $this->pai_codalf = $pai_codalf;
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
     * @return \Clases\ClaseConveMovilidad
     */
    public function setNombre($nombre)
    {
      $this->nombre = $nombre;
      return $this;
    }

    /**
     * @return string
     */
    public function getNomuni()
    {
      return $this->nomuni;
    }

    /**
     * @param string $nomuni
     * @return \Clases\ClaseConveMovilidad
     */
    public function setNomuni($nomuni)
    {
      $this->nomuni = $nomuni;
      return $this;
    }

    /**
     * @return string
     */
    public function getAre_codalf()
    {
      return $this->are_codalf;
    }

    /**
     * @param string $are_codalf
     * @return \Clases\ClaseConveMovilidad
     */
    public function setAre_codalf($are_codalf)
    {
      $this->are_codalf = $are_codalf;
      return $this;
    }

    /**
     * @return string
     */
    public function getDesc_area_eng()
    {
      return $this->desc_area_eng;
    }

    /**
     * @param string $desc_area_eng
     * @return \Clases\ClaseConveMovilidad
     */
    public function setDesc_area_eng($desc_area_eng)
    {
      $this->desc_area_eng = $desc_area_eng;
      return $this;
    }

    /**
     * @return string
     */
    public function getDesc_area_val()
    {
      return $this->desc_area_val;
    }

    /**
     * @param string $desc_area_val
     * @return \Clases\ClaseConveMovilidad
     */
    public function setDesc_area_val($desc_area_val)
    {
      $this->desc_area_val = $desc_area_val;
      return $this;
    }

    /**
     * @return string
     */
    public function getDesc_area_cas()
    {
      return $this->desc_area_cas;
    }

    /**
     * @param string $desc_area_cas
     * @return \Clases\ClaseConveMovilidad
     */
    public function setDesc_area_cas($desc_area_cas)
    {
      $this->desc_area_cas = $desc_area_cas;
      return $this;
    }

    /**
     * @return string
     */
    public function getNivel()
    {
      return $this->nivel;
    }

    /**
     * @param string $nivel
     * @return \Clases\ClaseConveMovilidad
     */
    public function setNivel($nivel)
    {
      $this->nivel = $nivel;
      return $this;
    }

    /**
     * @return string
     */
    public function getPlazas()
    {
      return $this->plazas;
    }

    /**
     * @param string $plazas
     * @return \Clases\ClaseConveMovilidad
     */
    public function setPlazas($plazas)
    {
      $this->plazas = $plazas;
      return $this;
    }

    /**
     * @return string
     */
    public function getMeses()
    {
      return $this->meses;
    }

    /**
     * @param string $meses
     * @return \Clases\ClaseConveMovilidad
     */
    public function setMeses($meses)
    {
      $this->meses = $meses;
      return $this;
    }

    /**
     * @return string
     */
    public function getVigente()
    {
      return $this->vigente;
    }

    /**
     * @param string $vigente
     * @return \Clases\ClaseConveMovilidad
     */
    public function setVigente($vigente)
    {
      $this->vigente = $vigente;
      return $this;
    }

    /**
     * @return string
     */
    public function getDesde()
    {
      return $this->desde;
    }

    /**
     * @param string $desde
     * @return \Clases\ClaseConveMovilidad
     */
    public function setDesde($desde)
    {
      $this->desde = $desde;
      return $this;
    }

    /**
     * @return string
     */
    public function getHasta()
    {
      return $this->hasta;
    }

    /**
     * @param string $hasta
     * @return \Clases\ClaseConveMovilidad
     */
    public function setHasta($hasta)
    {
      $this->hasta = $hasta;
      return $this;
    }

    /**
     * @return string
     */
    public function getFlgmodificable()
    {
      return $this->flgmodificable;
    }

    /**
     * @param string $flgmodificable
     * @return \Clases\ClaseConveMovilidad
     */
    public function setFlgmodificable($flgmodificable)
    {
      $this->flgmodificable = $flgmodificable;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisp_desidi2()
    {
      return $this->disp_desidi2;
    }

    /**
     * @param string $disp_desidi2
     * @return \Clases\ClaseConveMovilidad
     */
    public function setDisp_desidi2($disp_desidi2)
    {
      $this->disp_desidi2 = $disp_desidi2;
      return $this;
    }

    /**
     * @return string
     */
    public function getProg_codnum()
    {
      return $this->prog_codnum;
    }

    /**
     * @param string $prog_codnum
     * @return \Clases\ClaseConveMovilidad
     */
    public function setProg_codnum($prog_codnum)
    {
      $this->prog_codnum = $prog_codnum;
      return $this;
    }

    /**
     * @return string
     */
    public function getCen_codnum()
    {
      return $this->cen_codnum;
    }

    /**
     * @param string $cen_codnum
     * @return \Clases\ClaseConveMovilidad
     */
    public function setCen_codnum($cen_codnum)
    {
      $this->cen_codnum = $cen_codnum;
      return $this;
    }

    /**
     * @return string
     */
    public function getNom_centro()
    {
      return $this->nom_centro;
    }

    /**
     * @param string $nom_centro
     * @return \Clases\ClaseConveMovilidad
     */
    public function setNom_centro($nom_centro)
    {
      $this->nom_centro = $nom_centro;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdi_universidad()
    {
      return $this->idi_universidad;
    }

    /**
     * @param string $idi_universidad
     * @return \Clases\ClaseConveMovilidad
     */
    public function setIdi_universidad($idi_universidad)
    {
      $this->idi_universidad = $idi_universidad;
      return $this;
    }

    /**
     * @return string
     */
    public function getModo()
    {
      return $this->modo;
    }

    /**
     * @param string $modo
     * @return \Clases\ClaseConveMovilidad
     */
    public function setModo($modo)
    {
      $this->modo = $modo;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdiomas_nivel1()
    {
      return $this->idiomas_nivel1;
    }

    /**
     * @param string $idiomas_nivel1
     * @return \Clases\ClaseConveMovilidad
     */
    public function setIdiomas_nivel1($idiomas_nivel1)
    {
      $this->idiomas_nivel1 = $idiomas_nivel1;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdiomas_nivel2()
    {
      return $this->idiomas_nivel2;
    }

    /**
     * @param string $idiomas_nivel2
     * @return \Clases\ClaseConveMovilidad
     */
    public function setIdiomas_nivel2($idiomas_nivel2)
    {
      $this->idiomas_nivel2 = $idiomas_nivel2;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdiomas_nivel3()
    {
      return $this->idiomas_nivel3;
    }

    /**
     * @param string $idiomas_nivel3
     * @return \Clases\ClaseConveMovilidad
     */
    public function setIdiomas_nivel3($idiomas_nivel3)
    {
      $this->idiomas_nivel3 = $idiomas_nivel3;
      return $this;
    }

    /**
     * @return string
     */
    public function getNomcoordina()
    {
      return $this->nomcoordina;
    }

    /**
     * @param string $nomcoordina
     * @return \Clases\ClaseConveMovilidad
     */
    public function setNomcoordina($nomcoordina)
    {
      $this->nomcoordina = $nomcoordina;
      return $this;
    }

    /**
     * @return string
     */
    public function getPromotor_ua()
    {
      return $this->promotor_ua;
    }

    /**
     * @param string $promotor_ua
     * @return \Clases\ClaseConveMovilidad
     */
    public function setPromotor_ua($promotor_ua)
    {
      $this->promotor_ua = $promotor_ua;
      return $this;
    }

    /**
     * @return string
     */
    public function getWeb_uni()
    {
      return $this->web_uni;
    }

    /**
     * @param string $web_uni
     * @return \Clases\ClaseConveMovilidad
     */
    public function setWeb_uni($web_uni)
    {
      $this->web_uni = $web_uni;
      return $this;
    }

    /**
     * @return string
     */
    public function getWeb_oficina()
    {
      return $this->web_oficina;
    }

    /**
     * @param string $web_oficina
     * @return \Clases\ClaseConveMovilidad
     */
    public function setWeb_oficina($web_oficina)
    {
      $this->web_oficina = $web_oficina;
      return $this;
    }

}
