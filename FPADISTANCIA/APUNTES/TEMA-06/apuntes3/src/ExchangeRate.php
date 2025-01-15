<?php

namespace Clases;

class ExchangeRate
{

    /**
     * @var string $ISO
     */
    protected $ISO = null;

    /**
     * @var string $Amount
     */
    protected $Amount = null;

    /**
     * @var string $Rate
     */
    protected $Rate = null;

    /**
     * @var string $Difference
     */
    protected $Difference = null;

    
    public function __construct()
    {
    
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
     * @return \Clases\ExchangeRate
     */
    public function setISO($ISO)
    {
      $this->ISO = $ISO;
      return $this;
    }

    /**
     * @return string
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param string $Amount
     * @return \Clases\ExchangeRate
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getRate()
    {
      return $this->Rate;
    }

    /**
     * @param string $Rate
     * @return \Clases\ExchangeRate
     */
    public function setRate($Rate)
    {
      $this->Rate = $Rate;
      return $this;
    }

    /**
     * @return string
     */
    public function getDifference()
    {
      return $this->Difference;
    }

    /**
     * @param string $Difference
     * @return \Clases\ExchangeRate
     */
    public function setDifference($Difference)
    {
      $this->Difference = $Difference;
      return $this;
    }

}
