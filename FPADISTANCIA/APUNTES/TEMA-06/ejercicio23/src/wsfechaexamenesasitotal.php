<?php

namespace Clases;

class wsfechaexamenesasitotal
{

    /**
     * @var string $plengua
     */
    protected $plengua = null;

    /**
     * @var string $pcodest
     */
    protected $pcodest = null;

    /**
     * @var string $pcurso
     */
    protected $pcurso = null;

    /**
     * @var string $pcodasi
     */
    protected $pcodasi = null;

    /**
     * @var string $pcodconvoc
     */
    protected $pcodconvoc = null;

    /**
     * @var string $porden
     */
    protected $porden = null;

    /**
     * @param string $plengua
     * @param string $pcodest
     * @param string $pcurso
     * @param string $pcodasi
     * @param string $pcodconvoc
     * @param string $porden
     */
    public function __construct($plengua, $pcodest, $pcurso, $pcodasi, $pcodconvoc, $porden)
    {
      $this->plengua = $plengua;
      $this->pcodest = $pcodest;
      $this->pcurso = $pcurso;
      $this->pcodasi = $pcodasi;
      $this->pcodconvoc = $pcodconvoc;
      $this->porden = $porden;
    }

    /**
     * @return string
     */
    public function getPlengua()
    {
      return $this->plengua;
    }

    /**
     * @param string $plengua
     * @return \Clases\wsfechaexamenesasitotal
     */
    public function setPlengua($plengua)
    {
      $this->plengua = $plengua;
      return $this;
    }

    /**
     * @return string
     */
    public function getPcodest()
    {
      return $this->pcodest;
    }

    /**
     * @param string $pcodest
     * @return \Clases\wsfechaexamenesasitotal
     */
    public function setPcodest($pcodest)
    {
      $this->pcodest = $pcodest;
      return $this;
    }

    /**
     * @return string
     */
    public function getPcurso()
    {
      return $this->pcurso;
    }

    /**
     * @param string $pcurso
     * @return \Clases\wsfechaexamenesasitotal
     */
    public function setPcurso($pcurso)
    {
      $this->pcurso = $pcurso;
      return $this;
    }

    /**
     * @return string
     */
    public function getPcodasi()
    {
      return $this->pcodasi;
    }

    /**
     * @param string $pcodasi
     * @return \Clases\wsfechaexamenesasitotal
     */
    public function setPcodasi($pcodasi)
    {
      $this->pcodasi = $pcodasi;
      return $this;
    }

    /**
     * @return string
     */
    public function getPcodconvoc()
    {
      return $this->pcodconvoc;
    }

    /**
     * @param string $pcodconvoc
     * @return \Clases\wsfechaexamenesasitotal
     */
    public function setPcodconvoc($pcodconvoc)
    {
      $this->pcodconvoc = $pcodconvoc;
      return $this;
    }

    /**
     * @return string
     */
    public function getPorden()
    {
      return $this->porden;
    }

    /**
     * @param string $porden
     * @return \Clases\wsfechaexamenesasitotal
     */
    public function setPorden($porden)
    {
      $this->porden = $porden;
      return $this;
    }

}
