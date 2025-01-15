<?php

namespace Clases;

class wsfechaexamenesplan
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
     * @var string $pcodconv
     */
    protected $pcodconv = null;

    /**
     * @var string $porden
     */
    protected $porden = null;

    /**
     * @param string $plengua
     * @param string $pcodest
     * @param string $pcurso
     * @param string $pcodconv
     * @param string $porden
     */
    public function __construct($plengua, $pcodest, $pcurso, $pcodconv, $porden)
    {
      $this->plengua = $plengua;
      $this->pcodest = $pcodest;
      $this->pcurso = $pcurso;
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
     * @return \Clases\wsfechaexamenesplan
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
     * @return \Clases\wsfechaexamenesplan
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
     * @return \Clases\wsfechaexamenesplan
     */
    public function setPcurso($pcurso)
    {
      $this->pcurso = $pcurso;
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
     * @return \Clases\wsfechaexamenesplan
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
     * @return \Clases\wsfechaexamenesplan
     */
    public function setPorden($porden)
    {
      $this->porden = $porden;
      return $this;
    }

}
