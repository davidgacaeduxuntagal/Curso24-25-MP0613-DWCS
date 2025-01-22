<?php

namespace Clases;

class ArrayOfClaseHorarios
{

    /**
     * @var ClaseHorarios[] $ClaseHorarios
     */
    protected $ClaseHorarios = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ClaseHorarios[]
     */
    public function getClaseHorarios()
    {
      return $this->ClaseHorarios;
    }

    /**
     * @param ClaseHorarios[] $ClaseHorarios
     * @return \Clases\ArrayOfClaseHorarios
     */
    public function setClaseHorarios(array $ClaseHorarios = null)
    {
      $this->ClaseHorarios = $ClaseHorarios;
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
      return isset($this->ClaseHorarios[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ClaseHorarios
     */
    public function offsetGet($offset)
    {
      return $this->ClaseHorarios[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ClaseHorarios $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ClaseHorarios[] = $value;
      } else {
        $this->ClaseHorarios[$offset] = $value;
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
      unset($this->ClaseHorarios[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ClaseHorarios Return the current element
     */
    public function current()
    {
      return current($this->ClaseHorarios);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ClaseHorarios);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ClaseHorarios);
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
      reset($this->ClaseHorarios);
    }

    /**
     * Countable implementation
     *
     * @return ClaseHorarios Return count of elements
     */
    public function count()
    {
      return count($this->ClaseHorarios);
    }

}
