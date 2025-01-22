<?php

namespace Clases;

class ArrayOfClaseFechaExamenesAsi
{

    /**
     * @var ClaseFechaExamenesAsi[] $ClaseFechaExamenesAsi
     */
    protected $ClaseFechaExamenesAsi = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ClaseFechaExamenesAsi[]
     */
    public function getClaseFechaExamenesAsi()
    {
      return $this->ClaseFechaExamenesAsi;
    }

    /**
     * @param ClaseFechaExamenesAsi[] $ClaseFechaExamenesAsi
     * @return \Clases\ArrayOfClaseFechaExamenesAsi
     */
    public function setClaseFechaExamenesAsi(array $ClaseFechaExamenesAsi = null)
    {
      $this->ClaseFechaExamenesAsi = $ClaseFechaExamenesAsi;
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
      return isset($this->ClaseFechaExamenesAsi[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ClaseFechaExamenesAsi
     */
    public function offsetGet($offset)
    {
      return $this->ClaseFechaExamenesAsi[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ClaseFechaExamenesAsi $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ClaseFechaExamenesAsi[] = $value;
      } else {
        $this->ClaseFechaExamenesAsi[$offset] = $value;
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
      unset($this->ClaseFechaExamenesAsi[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ClaseFechaExamenesAsi Return the current element
     */
    public function current()
    {
      return current($this->ClaseFechaExamenesAsi);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ClaseFechaExamenesAsi);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ClaseFechaExamenesAsi);
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
      reset($this->ClaseFechaExamenesAsi);
    }

    /**
     * Countable implementation
     *
     * @return ClaseFechaExamenesAsi Return count of elements
     */
    public function count()
    {
      return count($this->ClaseFechaExamenesAsi);
    }

}
