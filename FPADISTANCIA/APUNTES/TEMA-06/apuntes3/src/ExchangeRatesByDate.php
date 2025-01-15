<?php

namespace Clases;

class ExchangeRatesByDate
{

    /**
     * @var \DateTime $date
     */
    protected $date = null;

    /**
     * @param \DateTime $date
     */
    public function __construct(\DateTime $date)
    {
      $this->date = $date->format(\DateTime::ATOM);
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
     * @return \Clases\ExchangeRatesByDate
     */
    public function setDate(\DateTime $date)
    {
      $this->date = $date->format(\DateTime::ATOM);
      return $this;
    }

}
