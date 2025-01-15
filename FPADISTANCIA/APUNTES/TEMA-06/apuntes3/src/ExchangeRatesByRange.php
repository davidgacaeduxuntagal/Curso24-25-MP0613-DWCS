<?php

namespace Clases;

class ExchangeRatesByRange
{

    /**
     * @var float $Rate
     */
    protected $Rate = null;

    /**
     * @var int $Amount
     */
    protected $Amount = null;

    /**
     * @var ISO $ISO
     */
    protected $ISO = null;

    /**
     * @var float $Diff
     */
    protected $Diff = null;

    /**
     * @var \DateTime $RateDate
     */
    protected $RateDate = null;

    /**
     * @param float $Rate
     * @param int $Amount
     * @param ISO $ISO
     * @param float $Diff
     * @param \DateTime $RateDate
     */
    public function __construct($Rate, $Amount, $ISO, $Diff, \DateTime $RateDate)
    {
      $this->Rate = $Rate;
      $this->Amount = $Amount;
      $this->ISO = $ISO;
      $this->Diff = $Diff;
      $this->RateDate = $RateDate->format(\DateTime::ATOM);
    }

    /**
     * @return float
     */
    public function getRate()
    {
      return $this->Rate;
    }

    /**
     * @param float $Rate
     * @return \Clases\ExchangeRatesByRange
     */
    public function setRate($Rate)
    {
      $this->Rate = $Rate;
      return $this;
    }

    /**
     * @return int
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param int $Amount
     * @return \Clases\ExchangeRatesByRange
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return ISO
     */
    public function getISO()
    {
      return $this->ISO;
    }

    /**
     * @param ISO $ISO
     * @return \Clases\ExchangeRatesByRange
     */
    public function setISO($ISO)
    {
      $this->ISO = $ISO;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiff()
    {
      return $this->Diff;
    }

    /**
     * @param float $Diff
     * @return \Clases\ExchangeRatesByRange
     */
    public function setDiff($Diff)
    {
      $this->Diff = $Diff;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRateDate()
    {
      if ($this->RateDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->RateDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $RateDate
     * @return \Clases\ExchangeRatesByRange
     */
    public function setRateDate(\DateTime $RateDate)
    {
      $this->RateDate = $RateDate->format(\DateTime::ATOM);
      return $this;
    }

}
