<?php

namespace Clases;

class ClaseAsiDepto
{

    /**
     * @var string $codasi
     */
    protected $codasi = null;

    /**
     * @var string $nomasi
     */
    protected $nomasi = null;

    /**
     * @var string $enlaceasi
     */
    protected $enlaceasi = null;

    /**
     * @var string $codest
     */
    protected $codest = null;

    /**
     * @var string $nomest
     */
    protected $nomest = null;

    /**
     * @var string $cred_teoasi
     */
    protected $cred_teoasi = null;

    /**
     * @var string $cred_prasi
     */
    protected $cred_prasi = null;

    /**
     * @var string $cred_asignatura
     */
    protected $cred_asignatura = null;

    /**
     * @var string $cred_no_presenciales
     */
    protected $cred_no_presenciales = null;

    /**
     * @var string $cred_teodepare
     */
    protected $cred_teodepare = null;

    /**
     * @var string $cred_pradepare
     */
    protected $cred_pradepare = null;

    
    public function __construct()
    {
    
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
     * @return \Clases\ClaseAsiDepto
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
     * @return \Clases\ClaseAsiDepto
     */
    public function setNomasi($nomasi)
    {
      $this->nomasi = $nomasi;
      return $this;
    }

    /**
     * @return string
     */
    public function getEnlaceasi()
    {
      return $this->enlaceasi;
    }

    /**
     * @param string $enlaceasi
     * @return \Clases\ClaseAsiDepto
     */
    public function setEnlaceasi($enlaceasi)
    {
      $this->enlaceasi = $enlaceasi;
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
     * @return \Clases\ClaseAsiDepto
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
     * @return \Clases\ClaseAsiDepto
     */
    public function setNomest($nomest)
    {
      $this->nomest = $nomest;
      return $this;
    }

    /**
     * @return string
     */
    public function getCred_teoasi()
    {
      return $this->cred_teoasi;
    }

    /**
     * @param string $cred_teoasi
     * @return \Clases\ClaseAsiDepto
     */
    public function setCred_teoasi($cred_teoasi)
    {
      $this->cred_teoasi = $cred_teoasi;
      return $this;
    }

    /**
     * @return string
     */
    public function getCred_prasi()
    {
      return $this->cred_prasi;
    }

    /**
     * @param string $cred_prasi
     * @return \Clases\ClaseAsiDepto
     */
    public function setCred_prasi($cred_prasi)
    {
      $this->cred_prasi = $cred_prasi;
      return $this;
    }

    /**
     * @return string
     */
    public function getCred_asignatura()
    {
      return $this->cred_asignatura;
    }

    /**
     * @param string $cred_asignatura
     * @return \Clases\ClaseAsiDepto
     */
    public function setCred_asignatura($cred_asignatura)
    {
      $this->cred_asignatura = $cred_asignatura;
      return $this;
    }

    /**
     * @return string
     */
    public function getCred_no_presenciales()
    {
      return $this->cred_no_presenciales;
    }

    /**
     * @param string $cred_no_presenciales
     * @return \Clases\ClaseAsiDepto
     */
    public function setCred_no_presenciales($cred_no_presenciales)
    {
      $this->cred_no_presenciales = $cred_no_presenciales;
      return $this;
    }

    /**
     * @return string
     */
    public function getCred_teodepare()
    {
      return $this->cred_teodepare;
    }

    /**
     * @param string $cred_teodepare
     * @return \Clases\ClaseAsiDepto
     */
    public function setCred_teodepare($cred_teodepare)
    {
      $this->cred_teodepare = $cred_teodepare;
      return $this;
    }

    /**
     * @return string
     */
    public function getCred_pradepare()
    {
      return $this->cred_pradepare;
    }

    /**
     * @param string $cred_pradepare
     * @return \Clases\ClaseAsiDepto
     */
    public function setCred_pradepare($cred_pradepare)
    {
      $this->cred_pradepare = $cred_pradepare;
      return $this;
    }

}
