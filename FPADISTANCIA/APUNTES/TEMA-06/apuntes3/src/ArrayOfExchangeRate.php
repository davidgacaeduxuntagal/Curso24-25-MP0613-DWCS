<?php

namespace Clases;

class ArrayOfExchangeRate
{

    /**
     * @var ExchangeRate[] $ExchangeRate
     */
    protected $ExchangeRate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ExchangeRate[]
     */
    public function getExchangeRate()
    {
      return $this->ExchangeRate;
    }

    /**
     * @param ExchangeRate[] $ExchangeRate
     * @return \Clases\ArrayOfExchangeRate
     */
    public function setExchangeRate(array $ExchangeRate = null)
    {
      $this->ExchangeRate = $ExchangeRate;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->ExchangeRate[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ExchangeRate
     */
    public function offsetGet($offset)
    {
      return $this->ExchangeRate[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ExchangeRate $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ExchangeRate[] = $value;
      } else {
        $this->ExchangeRate[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ExchangeRate[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ExchangeRate Return the current element
     */
    public function current()
    {
      return current($this->ExchangeRate);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ExchangeRate);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ExchangeRate);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->ExchangeRate);
    }

    /**
     * Countable implementation
     *
     * @return ExchangeRate Return count of elements
     */
    public function count()
    {
      return count($this->ExchangeRate);
    }

}
