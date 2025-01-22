<?php

namespace Clases;

class ArrayOfClaseFechaExamenesAsiTotal
{

    /**
     * @var ClaseFechaExamenesAsiTotal[] $ClaseFechaExamenesAsiTotal
     */
    protected $ClaseFechaExamenesAsiTotal = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ClaseFechaExamenesAsiTotal[]
     */
    public function getClaseFechaExamenesAsiTotal()
    {
      return $this->ClaseFechaExamenesAsiTotal;
    }

    /**
     * @param ClaseFechaExamenesAsiTotal[] $ClaseFechaExamenesAsiTotal
     * @return \Clases\ArrayOfClaseFechaExamenesAsiTotal
     */
    public function setClaseFechaExamenesAsiTotal(array $ClaseFechaExamenesAsiTotal = null)
    {
      $this->ClaseFechaExamenesAsiTotal = $ClaseFechaExamenesAsiTotal;
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
      return isset($this->ClaseFechaExamenesAsiTotal[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ClaseFechaExamenesAsiTotal
     */
    public function offsetGet($offset)
    {
      return $this->ClaseFechaExamenesAsiTotal[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ClaseFechaExamenesAsiTotal $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ClaseFechaExamenesAsiTotal[] = $value;
      } else {
        $this->ClaseFechaExamenesAsiTotal[$offset] = $value;
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
      unset($this->ClaseFechaExamenesAsiTotal[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ClaseFechaExamenesAsiTotal Return the current element
     */
    public function current()
    {
      return current($this->ClaseFechaExamenesAsiTotal);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ClaseFechaExamenesAsiTotal);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ClaseFechaExamenesAsiTotal);
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
      reset($this->ClaseFechaExamenesAsiTotal);
    }

    /**
     * Countable implementation
     *
     * @return ClaseFechaExamenesAsiTotal Return count of elements
     */
    public function count()
    {
      return count($this->ClaseFechaExamenesAsiTotal);
    }

}
