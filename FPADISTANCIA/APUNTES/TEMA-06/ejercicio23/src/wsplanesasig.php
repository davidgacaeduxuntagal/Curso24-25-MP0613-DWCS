<?php

namespace Clases;

class wsplanesasig
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
     * @param string $plengua
     * @param string $pcurso
     * @param string $pcodasi
     */
    public function __construct($plengua, $pcurso, $pcodasi)
    {
      $this->plengua = $plengua;
      $this->pcurso = $pcurso;
      $this->pcodasi = $pcodasi;
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
     * @return \Clases\wsplanesasig
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
     * @return \Clases\wsplanesasig
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
     * @return \Clases\wsplanesasig
     */
    public function setPcodasi($pcodasi)
    {
      $this->pcodasi = $pcodasi;
      return $this;
    }

}
