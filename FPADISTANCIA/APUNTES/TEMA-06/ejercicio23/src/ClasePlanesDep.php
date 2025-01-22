<?php

namespace Clases;

class ClasePlanesDep
{

    /**
     * @var string $curso
     */
    protected $curso = null;

    /**
     * @var string $coddep
     */
    protected $coddep = null;

    /**
     * @var string $codplan
     */
    protected $codplan = null;

    /**
     * @var string $nomplan
     */
    protected $nomplan = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCurso()
    {
      return $this->curso;
    }

    /**
     * @param string $curso
     * @return \Clases\ClasePlanesDep
     */
    public function setCurso($curso)
    {
      $this->curso = $curso;
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
     * @return \Clases\ClasePlanesDep
     */
    public function setCoddep($coddep)
    {
      $this->coddep = $coddep;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodplan()
    {
      return $this->codplan;
    }

    /**
     * @param string $codplan
     * @return \Clases\ClasePlanesDep
     */
    public function setCodplan($codplan)
    {
      $this->codplan = $codplan;
      return $this;
    }

    /**
     * @return string
     */
    public function getNomplan()
    {
      return $this->nomplan;
    }

    /**
     * @param string $nomplan
     * @return \Clases\ClasePlanesDep
     */
    public function setNomplan($nomplan)
    {
      $this->nomplan = $nomplan;
      return $this;
    }

}
