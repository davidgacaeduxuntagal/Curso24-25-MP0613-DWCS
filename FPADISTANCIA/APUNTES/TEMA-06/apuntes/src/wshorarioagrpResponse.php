<?php

namespace Clases;

class wshorarioagrpResponse
{

    /**
     * @var ArrayOfClaseHorarioAgrp $wshorarioagrpResult
     */
    protected $wshorarioagrpResult = null;

    /**
     * @param ArrayOfClaseHorarioAgrp $wshorarioagrpResult
     */
    public function __construct($wshorarioagrpResult)
    {
      $this->wshorarioagrpResult = $wshorarioagrpResult;
    }

    /**
     * @return ArrayOfClaseHorarioAgrp
     */
    public function getWshorarioagrpResult()
    {
      return $this->wshorarioagrpResult;
    }

    /**
     * @param ArrayOfClaseHorarioAgrp $wshorarioagrpResult
     * @return \Clases\wshorarioagrpResponse
     */
    public function setWshorarioagrpResult($wshorarioagrpResult)
    {
      $this->wshorarioagrpResult = $wshorarioagrpResult;
      return $this;
    }

}
