<?php

namespace Clases;

class wscalificacionesResponse
{

    /**
     * @var ArrayOfClaseCalificaciones $wscalificacionesResult
     */
    protected $wscalificacionesResult = null;

    /**
     * @param ArrayOfClaseCalificaciones $wscalificacionesResult
     */
    public function __construct($wscalificacionesResult)
    {
      $this->wscalificacionesResult = $wscalificacionesResult;
    }

    /**
     * @return ArrayOfClaseCalificaciones
     */
    public function getWscalificacionesResult()
    {
      return $this->wscalificacionesResult;
    }

    /**
     * @param ArrayOfClaseCalificaciones $wscalificacionesResult
     * @return \Clases\wscalificacionesResponse
     */
    public function setWscalificacionesResult($wscalificacionesResult)
    {
      $this->wscalificacionesResult = $wscalificacionesResult;
      return $this;
    }

}
