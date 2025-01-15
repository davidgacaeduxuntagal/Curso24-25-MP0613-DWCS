<?php

namespace Clases;

class ClasePlanesAsig
{

    /**
     * @var string $curso
     */
    protected $curso = null;

    /**
     * @var string $asignatura
     */
    protected $asignatura = null;

    /**
     * @var string $codplan
     */
    protected $codplan = null;

    /**
     * @var string $nomplan
     */
    protected $nomplan = null;

    /**
     * @var string $codcen
     */
    protected $codcen = null;

    
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
     * @return \Clases\ClasePlanesAsig
     */
    public function setCurso($curso)
    {
      $this->curso = $curso;
      return $this;
    }

    /**
     * @return string
     */
    public function getAsignatura()
    {
      return $this->asignatura;
    }

    /**
     * @param string $asignatura
     * @return \Clases\ClasePlanesAsig
     */
    public function setAsignatura($asignatura)
    {
      $this->asignatura = $asignatura;
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
     * @return \Clases\ClasePlanesAsig
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
     * @return \Clases\ClasePlanesAsig
     */
    public function setNomplan($nomplan)
    {
      $this->nomplan = $nomplan;
      return $this;
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
     * @return \Clases\ClasePlanesAsig
     */
    public function setCodcen($codcen)
    {
      $this->codcen = $codcen;
      return $this;
    }

}
