<?php

namespace Clases;

class ArrayOfClaseAgrupaciones
{

    /**
     * @var ClaseAgrupaciones[] $ClaseAgrupaciones
     */
    protected $ClaseAgrupaciones = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ClaseAgrupaciones[]
     */
    public function getClaseAgrupaciones()
    {
      return $this->ClaseAgrupaciones;
    }

    /**
     * @param ClaseAgrupaciones[] $ClaseAgrupaciones
     * @return \Clases\ArrayOfClaseAgrupaciones
     */
    public function setClaseAgrupaciones(array $ClaseAgrupaciones = null)
    {
      $this->ClaseAgrupaciones = $ClaseAgrupaciones;
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
      return isset($this->ClaseAgrupaciones[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ClaseAgrupaciones
     */
    public function offsetGet($offset)
    {
      return $this->ClaseAgrupaciones[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ClaseAgrupaciones $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ClaseAgrupaciones[] = $value;
      } else {
        $this->ClaseAgrupaciones[$offset] = $value;
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
      unset($this->ClaseAgrupaciones[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ClaseAgrupaciones Return the current element
     */
    public function current()
    {
      return current($this->ClaseAgrupaciones);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ClaseAgrupaciones);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ClaseAgrupaciones);
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
      reset($this->ClaseAgrupaciones);
    }

    /**
     * Countable implementation
     *
     * @return ClaseAgrupaciones Return count of elements
     */
    public function count()
    {
      return count($this->ClaseAgrupaciones);
    }

}
