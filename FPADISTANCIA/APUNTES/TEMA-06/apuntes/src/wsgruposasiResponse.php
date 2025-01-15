<?php

namespace Clases;

class wsgruposasiResponse
{

    /**
     * @var ArrayOfClaseGrupoAsi $wsgruposasiResult
     */
    protected $wsgruposasiResult = null;

    /**
     * @param ArrayOfClaseGrupoAsi $wsgruposasiResult
     */
    public function __construct($wsgruposasiResult)
    {
      $this->wsgruposasiResult = $wsgruposasiResult;
    }

    /**
     * @return ArrayOfClaseGrupoAsi
     */
    public function getWsgruposasiResult()
    {
      return $this->wsgruposasiResult;
    }

    /**
     * @param ArrayOfClaseGrupoAsi $wsgruposasiResult
     * @return \Clases\wsgruposasiResponse
     */
    public function setWsgruposasiResult($wsgruposasiResult)
    {
      $this->wsgruposasiResult = $wsgruposasiResult;
      return $this;
    }

}
