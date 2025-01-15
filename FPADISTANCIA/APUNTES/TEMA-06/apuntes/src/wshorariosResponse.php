<?php

namespace Clases;

class wshorariosResponse
{

    /**
     * @var ArrayOfClaseHorarios $wshorariosResult
     */
    protected $wshorariosResult = null;

    /**
     * @param ArrayOfClaseHorarios $wshorariosResult
     */
    public function __construct($wshorariosResult)
    {
      $this->wshorariosResult = $wshorariosResult;
    }

    /**
     * @return ArrayOfClaseHorarios
     */
    public function getWshorariosResult()
    {
      return $this->wshorariosResult;
    }

    /**
     * @param ArrayOfClaseHorarios $wshorariosResult
     * @return \Clases\wshorariosResponse
     */
    public function setWshorariosResult($wshorariosResult)
    {
      $this->wshorariosResult = $wshorariosResult;
      return $this;
    }

}
