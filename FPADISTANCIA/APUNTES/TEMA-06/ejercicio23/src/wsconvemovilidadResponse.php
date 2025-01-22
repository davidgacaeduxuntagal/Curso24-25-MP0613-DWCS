<?php

namespace Clases;

class wsconvemovilidadResponse
{

    /**
     * @var ArrayOfClaseConveMovilidad $wsconvemovilidadResult
     */
    protected $wsconvemovilidadResult = null;

    /**
     * @param ArrayOfClaseConveMovilidad $wsconvemovilidadResult
     */
    public function __construct($wsconvemovilidadResult)
    {
      $this->wsconvemovilidadResult = $wsconvemovilidadResult;
    }

    /**
     * @return ArrayOfClaseConveMovilidad
     */
    public function getWsconvemovilidadResult()
    {
      return $this->wsconvemovilidadResult;
    }

    /**
     * @param ArrayOfClaseConveMovilidad $wsconvemovilidadResult
     * @return \Clases\wsconvemovilidadResponse
     */
    public function setWsconvemovilidadResult($wsconvemovilidadResult)
    {
      $this->wsconvemovilidadResult = $wsconvemovilidadResult;
      return $this;
    }

}
