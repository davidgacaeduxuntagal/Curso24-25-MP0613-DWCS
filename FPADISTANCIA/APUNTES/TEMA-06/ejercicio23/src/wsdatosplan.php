<?php

namespace Clases;

class wsdatosplan
{

    /**
     * @var string $plengua
     */
    protected $plengua = null;

    /**
     * @var string $pcodest
     */
    protected $pcodest = null;

    /**
     * @var string $ptipo
     */
    protected $ptipo = null;

    /**
     * @var string $psubtipo
     */
    protected $psubtipo = null;

    /**
     * @var string $pcodcen
     */
    protected $pcodcen = null;

    /**
     * @var string $pcurso
     */
    protected $pcurso = null;

    /**
     * @var string $pflgmovil
     */
    protected $pflgmovil = null;

    /**
     * @param string $plengua
     * @param string $pcodest
     * @param string $ptipo
     * @param string $psubtipo
     * @param string $pcodcen
     * @param string $pcurso
     * @param string $pflgmovil
     */
    public function __construct($plengua, $pcodest, $ptipo, $psubtipo, $pcodcen, $pcurso, $pflgmovil)
    {
      $this->plengua = $plengua;
      $this->pcodest = $pcodest;
      $this->ptipo = $ptipo;
      $this->psubtipo = $psubtipo;
      $this->pcodcen = $pcodcen;
      $this->pcurso = $pcurso;
      $this->pflgmovil = $pflgmovil;
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
     * @return \Clases\wsdatosplan
     */
    public function setPlengua($plengua)
    {
      $this->plengua = $plengua;
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
     * @return \Clases\wsdatosplan
     */
    public function setPcodest($pcodest)
    {
      $this->pcodest = $pcodest;
      return $this;
    }

    /**
     * @return string
     */
    public function getPtipo()
    {
      return $this->ptipo;
    }

    /**
     * @param string $ptipo
     * @return \Clases\wsdatosplan
     */
    public function setPtipo($ptipo)
    {
      $this->ptipo = $ptipo;
      return $this;
    }

    /**
     * @return string
     */
    public function getPsubtipo()
    {
      return $this->psubtipo;
    }

    /**
     * @param string $psubtipo
     * @return \Clases\wsdatosplan
     */
    public function setPsubtipo($psubtipo)
    {
      $this->psubtipo = $psubtipo;
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
     * @return \Clases\wsdatosplan
     */
    public function setPcodcen($pcodcen)
    {
      $this->pcodcen = $pcodcen;
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
     * @return \Clases\wsdatosplan
     */
    public function setPcurso($pcurso)
    {
      $this->pcurso = $pcurso;
      return $this;
    }

    /**
     * @return string
     */
    public function getPflgmovil()
    {
      return $this->pflgmovil;
    }

    /**
     * @param string $pflgmovil
     * @return \Clases\wsdatosplan
     */
    public function setPflgmovil($pflgmovil)
    {
      $this->pflgmovil = $pflgmovil;
      return $this;
    }

}
