<?php

namespace Clases;

class wstitulospropiosuni
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
     * @var string $ptipocurso
     */
    protected $ptipocurso = null;

    /**
     * @param string $plengua
     * @param string $pcurso
     * @param string $ptipocurso
     */
    public function __construct($plengua, $pcurso, $ptipocurso)
    {
      $this->plengua = $plengua;
      $this->pcurso = $pcurso;
      $this->ptipocurso = $ptipocurso;
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
     * @return \Clases\wstitulospropiosuni
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
     * @return \Clases\wstitulospropiosuni
     */
    public function setPcurso($pcurso)
    {
      $this->pcurso = $pcurso;
      return $this;
    }

    /**
     * @return string
     */
    public function getPtipocurso()
    {
      return $this->ptipocurso;
    }

    /**
     * @param string $ptipocurso
     * @return \Clases\wstitulospropiosuni
     */
    public function setPtipocurso($ptipocurso)
    {
      $this->ptipocurso = $ptipocurso;
      return $this;
    }

}
