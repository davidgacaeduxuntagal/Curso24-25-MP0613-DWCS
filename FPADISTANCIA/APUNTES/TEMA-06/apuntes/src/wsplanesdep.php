<?php

namespace Clases;

class wsplanesdep
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
     * @param string $plengua
     * @param string $pcurso
     * @param string $pcoddep
     */
    public function __construct($plengua, $pcurso, $pcoddep)
    {
      $this->plengua = $plengua;
      $this->pcurso = $pcurso;
      $this->pcoddep = $pcoddep;
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
     * @return \Clases\wsplanesdep
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
     * @return \Clases\wsplanesdep
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
     * @return \Clases\wsplanesdep
     */
    public function setPcoddep($pcoddep)
    {
      $this->pcoddep = $pcoddep;
      return $this;
    }

}
