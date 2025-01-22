<?php

namespace Clases;

class ExchangeRatesByDateRangeByISO
{

    /**
     * @var string $ISOCodes
     */
    protected $ISOCodes = null;

    /**
     * @var \DateTime $DateFrom
     */
    protected $DateFrom = null;

    /**
     * @var \DateTime $DateTo
     */
    protected $DateTo = null;

    /**
     * @param string $ISOCodes
     * @param \DateTime $DateFrom
     * @param \DateTime $DateTo
     */
    public function __construct($ISOCodes, \DateTime $DateFrom, \DateTime $DateTo)
    {
      $this->ISOCodes = $ISOCodes;
      $this->DateFrom = $DateFrom->format(\DateTime::ATOM);
      $this->DateTo = $DateTo->format(\DateTime::ATOM);
    }

    /**
     * @return string
     */
    public function getISOCodes()
    {
      return $this->ISOCodes;
    }

    /**
     * @param string $ISOCodes
     * @return \Clases\ExchangeRatesByDateRangeByISO
     */
    public function setISOCodes($ISOCodes)
    {
      $this->ISOCodes = $ISOCodes;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateFrom()
    {
      if ($this->DateFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateFrom
     * @return \Clases\ExchangeRatesByDateRangeByISO
     */
    public function setDateFrom(\DateTime $DateFrom)
    {
      $this->DateFrom = $DateFrom->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateTo()
    {
      if ($this->DateTo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateTo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateTo
     * @return \Clases\ExchangeRatesByDateRangeByISO
     */
    public function setDateTo(\DateTime $DateTo)
    {
      $this->DateTo = $DateTo->format(\DateTime::ATOM);
      return $this;
    }

}
