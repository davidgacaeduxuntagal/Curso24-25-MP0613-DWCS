<?php

namespace Clases;

class getExchangeRatesByDateResult
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $any
     */
    public function __construct($any)
    {
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \Clases\getExchangeRatesByDateResult
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
