<?php

namespace Clases;

class getExchangeRate
{

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var string $Date
     */
    protected $Date = null;

    /**
     * @param string $Currency
     * @param string $Date
     */
    public function __construct($Currency, $Date)
    {
      $this->Currency = $Currency;
      $this->Date = $Date;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return \Clases\getExchangeRate
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
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
     * @return \Clases\getExchangeRate
     */
    public function setDate($Date)
    {
      $this->Date = $Date;
      return $this;
    }

}
