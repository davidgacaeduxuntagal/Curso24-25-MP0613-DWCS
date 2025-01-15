<?php

namespace Clases;

class ArrayOfClaseAsiPlan
{

    /**
     * @var ClaseAsiPlan[] $ClaseAsiPlan
     */
    protected $ClaseAsiPlan = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ClaseAsiPlan[]
     */
    public function getClaseAsiPlan()
    {
      return $this->ClaseAsiPlan;
    }

    /**
     * @param ClaseAsiPlan[] $ClaseAsiPlan
     * @return \Clases\ArrayOfClaseAsiPlan
     */
    public function setClaseAsiPlan(array $ClaseAsiPlan = null)
    {
      $this->ClaseAsiPlan = $ClaseAsiPlan;
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
      return isset($this->ClaseAsiPlan[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ClaseAsiPlan
     */
    public function offsetGet($offset)
    {
      return $this->ClaseAsiPlan[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ClaseAsiPlan $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ClaseAsiPlan[] = $value;
      } else {
        $this->ClaseAsiPlan[$offset] = $value;
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
      unset($this->ClaseAsiPlan[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ClaseAsiPlan Return the current element
     */
    public function current()
    {
      return current($this->ClaseAsiPlan);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ClaseAsiPlan);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ClaseAsiPlan);
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
      reset($this->ClaseAsiPlan);
    }

    /**
     * Countable implementation
     *
     * @return ClaseAsiPlan Return count of elements
     */
    public function count()
    {
      return count($this->ClaseAsiPlan);
    }

}
