<?php

namespace Clases;

class wsconvocatoriasResponse
{

    /**
     * @var ArrayOfClaseConvocatorias $wsconvocatoriasResult
     */
    protected $wsconvocatoriasResult = null;

    /**
     * @param ArrayOfClaseConvocatorias $wsconvocatoriasResult
     */
    public function __construct($wsconvocatoriasResult)
    {
      $this->wsconvocatoriasResult = $wsconvocatoriasResult;
    }

    /**
     * @return ArrayOfClaseConvocatorias
     */
    public function getWsconvocatoriasResult()
    {
      return $this->wsconvocatoriasResult;
    }

    /**
     * @param ArrayOfClaseConvocatorias $wsconvocatoriasResult
     * @return \Clases\wsconvocatoriasResponse
     */
    public function setWsconvocatoriasResult($wsconvocatoriasResult)
    {
      $this->wsconvocatoriasResult = $wsconvocatoriasResult;
      return $this;
    }

}
