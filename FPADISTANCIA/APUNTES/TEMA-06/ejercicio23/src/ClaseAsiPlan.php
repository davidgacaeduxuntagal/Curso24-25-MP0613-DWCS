<?php

namespace Clases;

class ClaseAsiPlan
{

    /**
     * @var string $codest
     */
    protected $codest = null;

    /**
     * @var string $caca
     */
    protected $caca = null;

    /**
     * @var string $codasi
     */
    protected $codasi = null;

    /**
     * @var string $nomasi
     */
    protected $nomasi = null;

    /**
     * @var string $nomasicorto
     */
    protected $nomasicorto = null;

    /**
     * @var string $tipo
     */
    protected $tipo = null;

    /**
     * @var string $ciclo
     */
    protected $ciclo = null;

    /**
     * @var string $curso
     */
    protected $curso = null;

    /**
     * @var string $desccurso
     */
    protected $desccurso = null;

    /**
     * @var string $ofertada
     */
    protected $ofertada = null;

    /**
     * @var string $docencia
     */
    protected $docencia = null;

    /**
     * @var string $complform
     */
    protected $complform = null;

    /**
     * @var string $crdtsteo
     */
    protected $crdtsteo = null;

    /**
     * @var string $crdtspra
     */
    protected $crdtspra = null;

    /**
     * @var string $crdtsects
     */
    protected $crdtsects = null;

    /**
     * @var string $duracion
     */
    protected $duracion = null;

    /**
     * @var string $tfg
     */
    protected $tfg = null;

    /**
     * @var string $estadoasi
     */
    protected $estadoasi = null;

    
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
     * @return \Clases\ClaseAsiPlan
     */
    public function setCodest($codest)
    {
      $this->codest = $codest;
      return $this;
    }

    /**
     * @return string
     */
    public function getCaca()
    {
      return $this->caca;
    }

    /**
     * @param string $caca
     * @return \Clases\ClaseAsiPlan
     */
    public function setCaca($caca)
    {
      $this->caca = $caca;
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
     * @return \Clases\ClaseAsiPlan
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
     * @return \Clases\ClaseAsiPlan
     */
    public function setNomasi($nomasi)
    {
      $this->nomasi = $nomasi;
      return $this;
    }

    /**
     * @return string
     */
    public function getNomasicorto()
    {
      return $this->nomasicorto;
    }

    /**
     * @param string $nomasicorto
     * @return \Clases\ClaseAsiPlan
     */
    public function setNomasicorto($nomasicorto)
    {
      $this->nomasicorto = $nomasicorto;
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
     * @return \Clases\ClaseAsiPlan
     */
    public function setTipo($tipo)
    {
      $this->tipo = $tipo;
      return $this;
    }

    /**
     * @return string
     */
    public function getCiclo()
    {
      return $this->ciclo;
    }

    /**
     * @param string $ciclo
     * @return \Clases\ClaseAsiPlan
     */
    public function setCiclo($ciclo)
    {
      $this->ciclo = $ciclo;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurso()
    {
      return $this->curso;
    }

    /**
     * @param string $curso
     * @return \Clases\ClaseAsiPlan
     */
    public function setCurso($curso)
    {
      $this->curso = $curso;
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
     * @return \Clases\ClaseAsiPlan
     */
    public function setDesccurso($desccurso)
    {
      $this->desccurso = $desccurso;
      return $this;
    }

    /**
     * @return string
     */
    public function getOfertada()
    {
      return $this->ofertada;
    }

    /**
     * @param string $ofertada
     * @return \Clases\ClaseAsiPlan
     */
    public function setOfertada($ofertada)
    {
      $this->ofertada = $ofertada;
      return $this;
    }

    /**
     * @return string
     */
    public function getDocencia()
    {
      return $this->docencia;
    }

    /**
     * @param string $docencia
     * @return \Clases\ClaseAsiPlan
     */
    public function setDocencia($docencia)
    {
      $this->docencia = $docencia;
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
     * @return \Clases\ClaseAsiPlan
     */
    public function setComplform($complform)
    {
      $this->complform = $complform;
      return $this;
    }

    /**
     * @return string
     */
    public function getCrdtsteo()
    {
      return $this->crdtsteo;
    }

    /**
     * @param string $crdtsteo
     * @return \Clases\ClaseAsiPlan
     */
    public function setCrdtsteo($crdtsteo)
    {
      $this->crdtsteo = $crdtsteo;
      return $this;
    }

    /**
     * @return string
     */
    public function getCrdtspra()
    {
      return $this->crdtspra;
    }

    /**
     * @param string $crdtspra
     * @return \Clases\ClaseAsiPlan
     */
    public function setCrdtspra($crdtspra)
    {
      $this->crdtspra = $crdtspra;
      return $this;
    }

    /**
     * @return string
     */
    public function getCrdtsects()
    {
      return $this->crdtsects;
    }

    /**
     * @param string $crdtsects
     * @return \Clases\ClaseAsiPlan
     */
    public function setCrdtsects($crdtsects)
    {
      $this->crdtsects = $crdtsects;
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
     * @return \Clases\ClaseAsiPlan
     */
    public function setDuracion($duracion)
    {
      $this->duracion = $duracion;
      return $this;
    }

    /**
     * @return string
     */
    public function getTfg()
    {
      return $this->tfg;
    }

    /**
     * @param string $tfg
     * @return \Clases\ClaseAsiPlan
     */
    public function setTfg($tfg)
    {
      $this->tfg = $tfg;
      return $this;
    }

    /**
     * @return string
     */
    public function getEstadoasi()
    {
      return $this->estadoasi;
    }

    /**
     * @param string $estadoasi
     * @return \Clases\ClaseAsiPlan
     */
    public function setEstadoasi($estadoasi)
    {
      $this->estadoasi = $estadoasi;
      return $this;
    }

}
