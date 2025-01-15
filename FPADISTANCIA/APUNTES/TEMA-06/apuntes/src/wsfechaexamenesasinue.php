<?php

namespace Clases;

class wsfechaexamenesasinue
{

    /**
     * @var string $plengua
     */
    protected $plengua = null;

    /**
     * @var string $pcurso
     */
    protected $pcurso = null;

    /**
     * @var string $pcodasi
     */
    protected $pcodasi = null;

    /**
     * @var string $pcodconv
     */
    protected $pcodconv = null;

    /**
     * @var string $porden
     */
    protected $porden = null;

    /**
     * @param string $plengua
     * @param string $pcurso
     * @param string $pcodasi
     * @param string $pcodconv
     * @param string $porden
     */
    public function __construct($plengua, $pcurso, $pcodasi, $pcodconv, $porden)
    {
      $this->plengua = $plengua;
      $this->pcurso = $pcurso;
      $this->pcodasi = $pcodasi;
      $this->pcodconv = $pcodconv;
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
     * @return \Clases\wsfechaexamenesasinue
     */
    public function setPlengua($plengua)
    {
      $this->plengua = $plengua;
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
     * @return \Clases\wsfechaexamenesasinue
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
     * @return \Clases\wsfechaexamenesasinue
     */
    public function setPcodasi($pcodasi)
    {
      $this->pcodasi = $pcodasi;
      return $this;
    }

    /**
     * @return string
     */
    public function getPcodconv()
    {
      return $this->pcodconv;
    }

    /**
     * @param string $pcodconv
     * @return \Clases\wsfechaexamenesasinue
     */
    public function setPcodconv($pcodconv)
    {
      $this->pcodconv = $pcodconv;
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
     * @return \Clases\wsfechaexamenesasinue
     */
    public function setPorden($porden)
    {
      $this->porden = $porden;
      return $this;
    }

}
