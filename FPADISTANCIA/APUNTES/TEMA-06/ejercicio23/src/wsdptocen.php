<?php

namespace Clases;

class wsdptocen
{

    /**
     * @var string $plengua
     */
    protected $plengua = null;

    /**
     * @var string $pcodcen
     */
    protected $pcodcen = null;

    /**
     * @var string $pcoddep
     */
    protected $pcoddep = null;

    /**
     * @param string $plengua
     * @param string $pcodcen
     * @param string $pcoddep
     */
    public function __construct($plengua, $pcodcen, $pcoddep)
    {
      $this->plengua = $plengua;
      $this->pcodcen = $pcodcen;
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
     * @return \Clases\wsdptocen
     */
    public function setPlengua($plengua)
    {
      $this->plengua = $plengua;
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
     * @return \Clases\wsdptocen
     */
    public function setPcodcen($pcodcen)
    {
      $this->pcodcen = $pcodcen;
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
     * @return \Clases\wsdptocen
     */
    public function setPcoddep($pcoddep)
    {
      $this->pcoddep = $pcoddep;
      return $this;
    }

}
