<?php

namespace Clases;

class wscalificaciones
{

    /**
     * @var string $plengua
     */
    protected $plengua = null;

    /**
     * @var string $pcodasi
     */
    protected $pcodasi = null;

    /**
     * @param string $plengua
     * @param string $pcodasi
     */
    public function __construct($plengua, $pcodasi)
    {
      $this->plengua = $plengua;
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
     * @return \Clases\wscalificaciones
     */
    public function setPlengua($plengua)
    {
      $this->plengua = $plengua;
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
     * @return \Clases\wscalificaciones
     */
    public function setPcodasi($pcodasi)
    {
      $this->pcodasi = $pcodasi;
      return $this;
    }

}
