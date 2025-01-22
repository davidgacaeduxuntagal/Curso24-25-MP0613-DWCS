<?php

namespace Clases;

class wsconvocatorias
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
     * @var string $pidgrupo
     */
    protected $pidgrupo = null;

    /**
     * @param string $plengua
     * @param string $pcurso
     * @param string $pcodasi
     * @param string $pidgrupo
     */
    public function __construct($plengua, $pcurso, $pcodasi, $pidgrupo)
    {
      $this->plengua = $plengua;
      $this->pcurso = $pcurso;
      $this->pcodasi = $pcodasi;
      $this->pidgrupo = $pidgrupo;
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
     * @return \Clases\wsconvocatorias
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
     * @return \Clases\wsconvocatorias
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
     * @return \Clases\wsconvocatorias
     */
    public function setPcodasi($pcodasi)
    {
      $this->pcodasi = $pcodasi;
      return $this;
    }

    /**
     * @return string
     */
    public function getPidgrupo()
    {
      return $this->pidgrupo;
    }

    /**
     * @param string $pidgrupo
     * @return \Clases\wsconvocatorias
     */
    public function setPidgrupo($pidgrupo)
    {
      $this->pidgrupo = $pidgrupo;
      return $this;
    }

}
