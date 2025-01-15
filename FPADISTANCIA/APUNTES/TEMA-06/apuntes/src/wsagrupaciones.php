<?php

namespace Clases;

class wsagrupaciones
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
     * @var string $pcodcen
     */
    protected $pcodcen = null;

    /**
     * @var string $pcodest
     */
    protected $pcodest = null;

    /**
     * @param string $plengua
     * @param string $pcurso
     * @param string $pcodcen
     * @param string $pcodest
     */
    public function __construct($plengua, $pcurso, $pcodcen, $pcodest)
    {
      $this->plengua = $plengua;
      $this->pcurso = $pcurso;
      $this->pcodcen = $pcodcen;
      $this->pcodest = $pcodest;
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
     * @return \Clases\wsagrupaciones
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
     * @return \Clases\wsagrupaciones
     */
    public function setPcurso($pcurso)
    {
      $this->pcurso = $pcurso;
      return $this;
    }

    /**
     * @return string
     */
    public function getPcodcen()
    {
      return $this->pcodcen;
    }

    /**
     * @param string $pcodcen
     * @return \Clases\wsagrupaciones
     */
    public function setPcodcen($pcodcen)
    {
      $this->pcodcen = $pcodcen;
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
     * @return \Clases\wsagrupaciones
     */
    public function setPcodest($pcodest)
    {
      $this->pcodest = $pcodest;
      return $this;
    }

}
