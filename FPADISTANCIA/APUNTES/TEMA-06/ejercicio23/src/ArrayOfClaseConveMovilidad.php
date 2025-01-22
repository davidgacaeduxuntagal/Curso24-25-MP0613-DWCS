<?php

namespace Clases;

class ArrayOfClaseConveMovilidad
{

    /**
     * @var ClaseConveMovilidad[] $ClaseConveMovilidad
     */
    protected $ClaseConveMovilidad = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ClaseConveMovilidad[]
     */
    public function getClaseConveMovilidad()
    {
      return $this->ClaseConveMovilidad;
    }

    /**
     * @param ClaseConveMovilidad[] $ClaseConveMovilidad
     * @return \Clases\ArrayOfClaseConveMovilidad
     */
    public function setClaseConveMovilidad(array $ClaseConveMovilidad = null)
    {
      $this->ClaseConveMovilidad = $ClaseConveMovilidad;
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
      return isset($this->ClaseConveMovilidad[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ClaseConveMovilidad
     */
    public function offsetGet($offset)
    {
      return $this->ClaseConveMovilidad[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ClaseConveMovilidad $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ClaseConveMovilidad[] = $value;
      } else {
        $this->ClaseConveMovilidad[$offset] = $value;
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
      unset($this->ClaseConveMovilidad[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ClaseConveMovilidad Return the current element
     */
    public function current()
    {
      return current($this->ClaseConveMovilidad);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ClaseConveMovilidad);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ClaseConveMovilidad);
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
      reset($this->ClaseConveMovilidad);
    }

    /**
     * Countable implementation
     *
     * @return ClaseConveMovilidad Return count of elements
     */
    public function count()
    {
      return count($this->ClaseConveMovilidad);
    }

}
