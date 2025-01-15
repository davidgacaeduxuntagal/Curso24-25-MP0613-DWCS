<?php

namespace Clases;

class ArrayOfClaseCalificaciones
{

    /**
     * @var ClaseCalificaciones[] $ClaseCalificaciones
     */
    protected $ClaseCalificaciones = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ClaseCalificaciones[]
     */
    public function getClaseCalificaciones()
    {
      return $this->ClaseCalificaciones;
    }

    /**
     * @param ClaseCalificaciones[] $ClaseCalificaciones
     * @return \Clases\ArrayOfClaseCalificaciones
     */
    public function setClaseCalificaciones(array $ClaseCalificaciones = null)
    {
      $this->ClaseCalificaciones = $ClaseCalificaciones;
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
      return isset($this->ClaseCalificaciones[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ClaseCalificaciones
     */
    public function offsetGet($offset)
    {
      return $this->ClaseCalificaciones[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ClaseCalificaciones $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ClaseCalificaciones[] = $value;
      } else {
        $this->ClaseCalificaciones[$offset] = $value;
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
      unset($this->ClaseCalificaciones[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ClaseCalificaciones Return the current element
     */
    public function current()
    {
      return current($this->ClaseCalificaciones);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ClaseCalificaciones);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ClaseCalificaciones);
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
      reset($this->ClaseCalificaciones);
    }

    /**
     * Countable implementation
     *
     * @return ClaseCalificaciones Return count of elements
     */
    public function count()
    {
      return count($this->ClaseCalificaciones);
    }

}
