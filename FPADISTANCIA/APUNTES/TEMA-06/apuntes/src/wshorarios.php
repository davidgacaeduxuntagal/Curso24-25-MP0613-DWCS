<?php

namespace Clases;

class wshorarios
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
     * @var string $porden
     */
    protected $porden = null;

    /**
     * @param string $plengua
     * @param string $pcurso
     * @param string $pcodasi
     * @param string $porden
     */
    public function __construct($plengua, $pcurso, $pcodasi, $porden)
    {
      $this->plengua = $plengua;
      $this->pcurso = $pcurso;
      $this->pcodasi = $pcodasi;
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
     * @return \Clases\wshorarios
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
     * @return \Clases\wshorarios
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
     * @return \Clases\wshorarios
     */
    public function setPcodasi($pcodasi)
    {
      $this->pcodasi = $pcodasi;
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
     * @return \Clases\wshorarios
     */
    public function setPorden($porden)
    {
      $this->porden = $porden;
      return $this;
    }

}
