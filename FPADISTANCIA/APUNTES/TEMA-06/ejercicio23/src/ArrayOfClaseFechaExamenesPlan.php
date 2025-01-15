<?php

namespace Clases;

class ArrayOfClaseFechaExamenesPlan
{

    /**
     * @var ClaseFechaExamenesPlan[] $ClaseFechaExamenesPlan
     */
    protected $ClaseFechaExamenesPlan = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ClaseFechaExamenesPlan[]
     */
    public function getClaseFechaExamenesPlan()
    {
      return $this->ClaseFechaExamenesPlan;
    }

    /**
     * @param ClaseFechaExamenesPlan[] $ClaseFechaExamenesPlan
     * @return \Clases\ArrayOfClaseFechaExamenesPlan
     */
    public function setClaseFechaExamenesPlan(array $ClaseFechaExamenesPlan = null)
    {
      $this->ClaseFechaExamenesPlan = $ClaseFechaExamenesPlan;
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
      return isset($this->ClaseFechaExamenesPlan[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ClaseFechaExamenesPlan
     */
    public function offsetGet($offset)
    {
      return $this->ClaseFechaExamenesPlan[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ClaseFechaExamenesPlan $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ClaseFechaExamenesPlan[] = $value;
      } else {
        $this->ClaseFechaExamenesPlan[$offset] = $value;
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
      unset($this->ClaseFechaExamenesPlan[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ClaseFechaExamenesPlan Return the current element
     */
    public function current()
    {
      return current($this->ClaseFechaExamenesPlan);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ClaseFechaExamenesPlan);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ClaseFechaExamenesPlan);
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
      reset($this->ClaseFechaExamenesPlan);
    }

    /**
     * Countable implementation
     *
     * @return ClaseFechaExamenesPlan Return count of elements
     */
    public function count()
    {
      return count($this->ClaseFechaExamenesPlan);
    }

}
