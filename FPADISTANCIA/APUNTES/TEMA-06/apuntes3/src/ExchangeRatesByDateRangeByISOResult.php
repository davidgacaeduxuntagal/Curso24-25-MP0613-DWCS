<?php

namespace Clases;

class ExchangeRatesByDateRangeByISOResult
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var UNKNOWN $namespace
     */
    protected $namespace = null;

    /**
     * @var UNKNOWN $tableTypeName
     */
    protected $tableTypeName = null;

    /**
     * @param string $any
     * @param UNKNOWN $namespace
     * @param UNKNOWN $tableTypeName
     */
    public function __construct($any, $namespace, $tableTypeName)
    {
      $this->any = $any;
      $this->namespace = $namespace;
      $this->tableTypeName = $tableTypeName;
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
     * @return \Clases\ExchangeRatesByDateRangeByISOResult
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return UNKNOWN
     */
    public function getNamespace()
    {
      return $this->namespace;
    }

    /**
     * @param UNKNOWN $namespace
     * @return \Clases\ExchangeRatesByDateRangeByISOResult
     */
    public function setNamespace($namespace)
    {
      $this->namespace = $namespace;
      return $this;
    }

    /**
     * @return UNKNOWN
     */
    public function getTableTypeName()
    {
      return $this->tableTypeName;
    }

    /**
     * @param UNKNOWN $tableTypeName
     * @return \Clases\ExchangeRatesByDateRangeByISOResult
     */
    public function setTableTypeName($tableTypeName)
    {
      $this->tableTypeName = $tableTypeName;
      return $this;
    }

}
