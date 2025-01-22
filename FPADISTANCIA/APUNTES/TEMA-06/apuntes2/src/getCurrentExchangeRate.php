<?php

namespace Clases;

class getCurrentExchangeRate
{

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @param string $Currency
     */
    public function __construct($Currency)
    {
      $this->Currency = $Currency;
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
     * @return \Clases\getCurrentExchangeRate
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

}
