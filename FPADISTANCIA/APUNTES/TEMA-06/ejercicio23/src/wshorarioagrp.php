<?php

namespace Clases;

class wshorarioagrp
{

    /**
     * @var string $plengua
     */
    protected $plengua = null;

    /**
     * @var string $pcurso
     */
    protected $pcurso = null;

    /**
     * @var string $pagrupa
     */
    protected $pagrupa = null;

    /**
     * @param string $plengua
     * @param string $pcurso
     * @param string $pagrupa
     */
    public function __construct($plengua, $pcurso, $pagrupa)
    {
      $this->plengua = $plengua;
      $this->pcurso = $pcurso;
      $this->pagrupa = $pagrupa;
    }

    /**
     * @return string
     */
    public function getPlengua()
    {
      return $this->plengua;
    }

    /**
     * @param string $plengua
     * @return \Clases\wshorarioagrp
     */
    public function setPlengua($plengua)
    {
      $this->plengua = $plengua;
      return $this;
    }

    /**
     * @return string
     */
    public function getPcurso()
    {
      return $this->pcurso;
    }

    /**
     * @param string $pcurso
     * @return \Clases\wshorarioagrp
     */
    public function setPcurso($pcurso)
    {
      $this->pcurso = $pcurso;
      return $this;
    }

    /**
     * @return string
     */
    public function getPagrupa()
    {
      return $this->pagrupa;
    }

    /**
     * @param string $pagrupa
     * @return \Clases\wshorarioagrp
     */
    public function setPagrupa($pagrupa)
    {
      $this->pagrupa = $pagrupa;
      return $this;
    }

}
