<?php

namespace Clases;

class wsasiplan
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
     * @var string $pcodest
     */
    protected $pcodest = null;

    /**
     * @param string $plengua
     * @param string $pcurso
     * @param string $pcodest
     */
    public function __construct($plengua, $pcurso, $pcodest)
    {
      $this->plengua = $plengua;
      $this->pcurso = $pcurso;
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
     * @return \Clases\wsasiplan
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
     * @return \Clases\wsasiplan
     */
    public function setPcurso($pcurso)
    {
      $this->pcurso = $pcurso;
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
     * @return \Clases\wsasiplan
     */
    public function setPcodest($pcodest)
    {
      $this->pcodest = $pcodest;
      return $this;
    }

}
