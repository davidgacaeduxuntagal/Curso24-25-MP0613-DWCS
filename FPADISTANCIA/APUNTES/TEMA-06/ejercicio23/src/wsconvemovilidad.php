<?php

namespace Clases;

class wsconvemovilidad
{

    /**
     * @var string $ptipoflujo
     */
    protected $ptipoflujo = null;

    /**
     * @param string $ptipoflujo
     */
    public function __construct($ptipoflujo)
    {
      $this->ptipoflujo = $ptipoflujo;
    }

    /**
     * @return string
     */
    public function getPtipoflujo()
    {
      return $this->ptipoflujo;
    }

    /**
     * @param string $ptipoflujo
     * @return \Clases\wsconvemovilidad
     */
    public function setPtipoflujo($ptipoflujo)
    {
      $this->ptipoflujo = $ptipoflujo;
      return $this;
    }

}
