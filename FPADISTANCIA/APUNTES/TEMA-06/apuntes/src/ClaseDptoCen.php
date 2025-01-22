<?php

namespace Clases;

class ClaseDptoCen
{

    /**
     * @var string $codcen
     */
    protected $codcen = null;

    /**
     * @var string $coddep
     */
    protected $coddep = null;

    /**
     * @var string $nomdep
     */
    protected $nomdep = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCodcen()
    {
      return $this->codcen;
    }

    /**
     * @param string $codcen
     * @return \Clases\ClaseDptoCen
     */
    public function setCodcen($codcen)
    {
      $this->codcen = $codcen;
      return $this;
    }

    /**
     * @return string
     */
    public function getCoddep()
    {
      return $this->coddep;
    }

    /**
     * @param string $coddep
     * @return \Clases\ClaseDptoCen
     */
    public function setCoddep($coddep)
    {
      $this->coddep = $coddep;
      return $this;
    }

    /**
     * @return string
     */
    public function getNomdep()
    {
      return $this->nomdep;
    }

    /**
     * @param string $nomdep
     * @return \Clases\ClaseDptoCen
     */
    public function setNomdep($nomdep)
    {
      $this->nomdep = $nomdep;
      return $this;
    }

}
