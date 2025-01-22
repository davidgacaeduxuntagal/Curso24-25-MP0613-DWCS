<?php

namespace Clases;

class ExchangeRatesByDateByISO
{

    /**
     * @var \DateTime $date
     */
    protected $date = null;

    /**
     * @var string $ISO
     */
    protected $ISO = null;

    /**
     * @param \DateTime $date
     * @param string $ISO
     */
    public function __construct(\DateTime $date, $ISO)
    {
      $this->date = $date->format(\DateTime::ATOM);
      $this->ISO = $ISO;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      if ($this->date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $date
     * @return \Clases\ExchangeRatesByDateByISO
     */
    public function setDate(\DateTime $date)
    {
      $this->date = $date->format(\DateTime::ATOM);
      return $this;
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
     * @return \Clases\ExchangeRatesByDateByISO
     */
    public function setISO($ISO)
    {
      $this->ISO = $ISO;
      return $this;
    }

}
