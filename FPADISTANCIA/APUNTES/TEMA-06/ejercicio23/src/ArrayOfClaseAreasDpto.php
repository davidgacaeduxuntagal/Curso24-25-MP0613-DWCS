<?php

namespace Clases;

class ArrayOfClaseAreasDpto
{

    /**
     * @var ClaseAreasDpto[] $ClaseAreasDpto
     */
    protected $ClaseAreasDpto = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ClaseAreasDpto[]
     */
    public function getClaseAreasDpto()
    {
      return $this->ClaseAreasDpto;
    }

    /**
     * @param ClaseAreasDpto[] $ClaseAreasDpto
     * @return \Clases\ArrayOfClaseAreasDpto
     */
    public function setClaseAreasDpto(array $ClaseAreasDpto = null)
    {
      $this->ClaseAreasDpto = $ClaseAreasDpto;
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
      return isset($this->ClaseAreasDpto[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ClaseAreasDpto
     */
    public function offsetGet($offset)
    {
      return $this->ClaseAreasDpto[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ClaseAreasDpto $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ClaseAreasDpto[] = $value;
      } else {
        $this->ClaseAreasDpto[$offset] = $value;
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
      unset($this->ClaseAreasDpto[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ClaseAreasDpto Return the current element
     */
    public function current()
    {
      return current($this->ClaseAreasDpto);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ClaseAreasDpto);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ClaseAreasDpto);
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
      reset($this->ClaseAreasDpto);
    }

    /**
     * Countable implementation
     *
     * @return ClaseAreasDpto Return count of elements
     */
    public function count()
    {
      return count($this->ClaseAreasDpto);
    }

}
