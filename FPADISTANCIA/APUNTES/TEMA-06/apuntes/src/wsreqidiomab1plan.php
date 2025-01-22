<?php

namespace Clases;

class wsreqidiomab1plan
{

    /**
     * @var string $pcodest
     */
    protected $pcodest = null;

    /**
     * @var string $pcodasi
     */
    protected $pcodasi = null;

    /**
     * @var string $pcurso
     */
    protected $pcurso = null;

    /**
     * @param string $pcodest
     * @param string $pcodasi
     * @param string $pcurso
     */
    public function __construct($pcodest, $pcodasi, $pcurso)
    {
      $this->pcodest = $pcodest;
      $this->pcodasi = $pcodasi;
      $this->pcurso = $pcurso;
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
     * @return \Clases\wsreqidiomab1plan
     */
    public function setPcodest($pcodest)
    {
      $this->pcodest = $pcodest;
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
     * @return \Clases\wsreqidiomab1plan
     */
    public function setPcodasi($pcodasi)
    {
      $this->pcodasi = $pcodasi;
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
     * @return \Clases\wsreqidiomab1plan
     */
    public function setPcurso($pcurso)
    {
      $this->pcurso = $pcurso;
      return $this;
    }

}
