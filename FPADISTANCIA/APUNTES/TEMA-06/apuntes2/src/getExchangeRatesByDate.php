<?php

namespace Clases;

class getExchangeRatesByDate
{

    /**
     * @var string $Date
     */
    protected $Date = null;

    /**
     * @param string $Date
     */
    public function __construct($Date)
    {
      $this->Date = $Date;
    }

    /**
     * @return string
     */
    public function getDate()
    {
      return $this->Date;
    }

    /**
     * @param string $Date
     * @return \Clases\getExchangeRatesByDate
     */
    public function setDate($Date)
    {
      $this->Date = $Date;
      return $this;
    }

}
