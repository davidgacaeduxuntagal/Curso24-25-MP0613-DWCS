<?php

namespace Clases;

class ExchangeRates
{

    /**
     * @var \DateTime $CurrentDate
     */
    protected $CurrentDate = null;

    /**
     * @var \DateTime $NextAvailableDate
     */
    protected $NextAvailableDate = null;

    /**
     * @var \DateTime $PreviousAvailableDate
     */
    protected $PreviousAvailableDate = null;

    /**
     * @var ArrayOfExchangeRate $Rates
     */
    protected $Rates = null;

    /**
     * @param \DateTime $CurrentDate
     */
    public function __construct(\DateTime $CurrentDate)
    {
      $this->CurrentDate = $CurrentDate->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getCurrentDate()
    {
      if ($this->CurrentDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CurrentDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CurrentDate
     * @return \Clases\ExchangeRates
     */
    public function setCurrentDate(\DateTime $CurrentDate)
    {
      $this->CurrentDate = $CurrentDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getNextAvailableDate()
    {
      if ($this->NextAvailableDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->NextAvailableDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $NextAvailableDate
     * @return \Clases\ExchangeRates
     */
    public function setNextAvailableDate(\DateTime $NextAvailableDate = null)
    {
      if ($NextAvailableDate == null) {
       $this->NextAvailableDate = null;
      } else {
        $this->NextAvailableDate = $NextAvailableDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPreviousAvailableDate()
    {
      if ($this->PreviousAvailableDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PreviousAvailableDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PreviousAvailableDate
     * @return \Clases\ExchangeRates
     */
    public function setPreviousAvailableDate(\DateTime $PreviousAvailableDate = null)
    {
      if ($PreviousAvailableDate == null) {
       $this->PreviousAvailableDate = null;
      } else {
        $this->PreviousAvailableDate = $PreviousAvailableDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfExchangeRate
     */
    public function getRates()
    {
      return $this->Rates;
    }

    /**
     * @param ArrayOfExchangeRate $Rates
     * @return \Clases\ExchangeRates
     */
    public function setRates($Rates)
    {
      $this->Rates = $Rates;
      return $this;
    }

}
