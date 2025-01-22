<?php

namespace Clases;

class getExchangeRatesByCurrency
{

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var string $DateLow
     */
    protected $DateLow = null;

    /**
     * @var string $DateHigh
     */
    protected $DateHigh = null;

    /**
     * @param string $Currency
     * @param string $DateLow
     * @param string $DateHigh
     */
    public function __construct($Currency, $DateLow, $DateHigh)
    {
      $this->Currency = $Currency;
      $this->DateLow = $DateLow;
      $this->DateHigh = $DateHigh;
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
     * @return \Clases\getExchangeRatesByCurrency
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateLow()
    {
      return $this->DateLow;
    }

    /**
     * @param string $DateLow
     * @return \Clases\getExchangeRatesByCurrency
     */
    public function setDateLow($DateLow)
    {
      $this->DateLow = $DateLow;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateHigh()
    {
      return $this->DateHigh;
    }

    /**
     * @param string $DateHigh
     * @return \Clases\getExchangeRatesByCurrency
     */
    public function setDateHigh($DateHigh)
    {
      $this->DateHigh = $DateHigh;
      return $this;
    }

}
