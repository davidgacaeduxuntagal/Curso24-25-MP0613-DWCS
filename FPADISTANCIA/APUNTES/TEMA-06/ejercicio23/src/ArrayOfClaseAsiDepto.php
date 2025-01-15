<?php

namespace Clases;

class ArrayOfClaseAsiDepto
{

    /**
     * @var ClaseAsiDepto[] $ClaseAsiDepto
     */
    protected $ClaseAsiDepto = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ClaseAsiDepto[]
     */
    public function getClaseAsiDepto()
    {
      return $this->ClaseAsiDepto;
    }

    /**
     * @param ClaseAsiDepto[] $ClaseAsiDepto
     * @return \Clases\ArrayOfClaseAsiDepto
     */
    public function setClaseAsiDepto(array $ClaseAsiDepto = null)
    {
      $this->ClaseAsiDepto = $ClaseAsiDepto;
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
      return isset($this->ClaseAsiDepto[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ClaseAsiDepto
     */
    public function offsetGet($offset)
    {
      return $this->ClaseAsiDepto[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ClaseAsiDepto $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ClaseAsiDepto[] = $value;
      } else {
        $this->ClaseAsiDepto[$offset] = $value;
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
      unset($this->ClaseAsiDepto[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ClaseAsiDepto Return the current element
     */
    public function current()
    {
      return current($this->ClaseAsiDepto);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ClaseAsiDepto);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ClaseAsiDepto);
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
      reset($this->ClaseAsiDepto);
    }

    /**
     * Countable implementation
     *
     * @return ClaseAsiDepto Return count of elements
     */
    public function count()
    {
      return count($this->ClaseAsiDepto);
    }

}
