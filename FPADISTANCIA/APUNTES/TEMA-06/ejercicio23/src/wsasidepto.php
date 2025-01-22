<?php

namespace Clases;

class wsasidepto
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
     * @var string $pcoddep
     */
    protected $pcoddep = null;

    /**
     * @var string $pcodest
     */
    protected $pcodest = null;

    /**
     * @var string $pcodarea
     */
    protected $pcodarea = null;

    /**
     * @param string $plengua
     * @param string $pcurso
     * @param string $pcoddep
     * @param string $pcodest
     * @param string $pcodarea
     */
    public function __construct($plengua, $pcurso, $pcoddep, $pcodest, $pcodarea)
    {
      $this->plengua = $plengua;
      $this->pcurso = $pcurso;
      $this->pcoddep = $pcoddep;
      $this->pcodest = $pcodest;
      $this->pcodarea = $pcodarea;
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
     * @return \Clases\wsasidepto
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
     * @return \Clases\wsasidepto
     */
    public function setPcurso($pcurso)
    {
      $this->pcurso = $pcurso;
      return $this;
    }

    /**
     * @return string
     */
    public function getPcoddep()
    {
      return $this->pcoddep;
    }

    /**
     * @param string $pcoddep
     * @return \Clases\wsasidepto
     */
    public function setPcoddep($pcoddep)
    {
      $this->pcoddep = $pcoddep;
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
     * @return \Clases\wsasidepto
     */
    public function setPcodest($pcodest)
    {
      $this->pcodest = $pcodest;
      return $this;
    }

    /**
     * @return string
     */
    public function getPcodarea()
    {
      return $this->pcodarea;
    }

    /**
     * @param string $pcodarea
     * @return \Clases\wsasidepto
     */
    public function setPcodarea($pcodarea)
    {
      $this->pcodarea = $pcodarea;
      return $this;
    }

}
