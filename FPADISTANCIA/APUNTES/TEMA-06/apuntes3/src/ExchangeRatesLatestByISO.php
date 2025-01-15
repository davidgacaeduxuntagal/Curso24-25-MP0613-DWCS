<?php

namespace Clases;

class ExchangeRatesLatestByISO
{

    /**
     * @var string $ISO
     */
    protected $ISO = null;

    /**
     * @param string $ISO
     */
    public function __construct($ISO)
    {
      $this->ISO = $ISO;
    }

    /**
     * @return string
     */
    public function getISO()
    {
      return $this->ISO;
    }

    /**
     * @param string $ISO
     * @return \Clases\ExchangeRatesLatestByISO
     */
    public function setISO($ISO)
    {
      $this->ISO = $ISO;
      return $this;
    }

}
