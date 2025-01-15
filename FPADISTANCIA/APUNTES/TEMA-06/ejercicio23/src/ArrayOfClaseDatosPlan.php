<?php

namespace Clases;

class ArrayOfClaseDatosPlan
{

    /**
     * @var ClaseDatosPlan[] $ClaseDatosPlan
     */
    protected $ClaseDatosPlan = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ClaseDatosPlan[]
     */
    public function getClaseDatosPlan()
    {
      return $this->ClaseDatosPlan;
    }

    /**
     * @param ClaseDatosPlan[] $ClaseDatosPlan
     * @return \Clases\ArrayOfClaseDatosPlan
     */
    public function setClaseDatosPlan(array $ClaseDatosPlan = null)
    {
      $this->ClaseDatosPlan = $ClaseDatosPlan;
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
      return isset($this->ClaseDatosPlan[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ClaseDatosPlan
     */
    public function offsetGet($offset)
    {
      return $this->ClaseDatosPlan[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ClaseDatosPlan $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ClaseDatosPlan[] = $value;
      } else {
        $this->ClaseDatosPlan[$offset] = $value;
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
      unset($this->ClaseDatosPlan[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ClaseDatosPlan Return the current element
     */
    public function current()
    {
      return current($this->ClaseDatosPlan);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ClaseDatosPlan);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ClaseDatosPlan);
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
      reset($this->ClaseDatosPlan);
    }

    /**
     * Countable implementation
     *
     * @return ClaseDatosPlan Return count of elements
     */
    public function count()
    {
      return count($this->ClaseDatosPlan);
    }

}
