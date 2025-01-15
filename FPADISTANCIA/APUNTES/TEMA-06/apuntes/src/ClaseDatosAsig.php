<?php

namespace Clases;

class ClaseDatosAsig
{

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
     * @var string $crdtsteo
     */
    protected $crdtsteo = null;

    /**
     * @var string $crdtspra
     */
    protected $crdtspra = null;

    /**
     * @var string $crdtects
     */
    protected $crdtects = null;

    /**
     * @var string $duracion
     */
    protected $duracion = null;

    /**
     * @var string $tfg
     */
    protected $tfg = null;

    /**
     * @var string $programa
     */
    protected $programa = null;

    
    public function __construct()
    {
    
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
     * @return \Clases\ClaseDatosAsig
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
     * @return \Clases\ClaseDatosAsig
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
     * @return \Clases\ClaseDatosAsig
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
     * @return \Clases\ClaseDatosAsig
     */
    public function setNomasicorto($nomasicorto)
    {
      $this->nomasicorto = $nomasicorto;
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
     * @return \Clases\ClaseDatosAsig
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
     * @return \Clases\ClaseDatosAsig
     */
    public function setCrdtspra($crdtspra)
    {
      $this->crdtspra = $crdtspra;
      return $this;
    }

    /**
     * @return string
     */
    public function getCrdtects()
    {
      return $this->crdtects;
    }

    /**
     * @param string $crdtects
     * @return \Clases\ClaseDatosAsig
     */
    public function setCrdtects($crdtects)
    {
      $this->crdtects = $crdtects;
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
     * @return \Clases\ClaseDatosAsig
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
     * @return \Clases\ClaseDatosAsig
     */
    public function setTfg($tfg)
    {
      $this->tfg = $tfg;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrograma()
    {
      return $this->programa;
    }

    /**
     * @param string $programa
     * @return \Clases\ClaseDatosAsig
     */
    public function setPrograma($programa)
    {
      $this->programa = $programa;
      return $this;
    }

}
