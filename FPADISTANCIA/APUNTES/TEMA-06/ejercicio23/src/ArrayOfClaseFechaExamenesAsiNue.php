<?php

namespace Clases;

class ArrayOfClaseFechaExamenesAsiNue
{

    /**
     * @var ClaseFechaExamenesAsiNue[] $ClaseFechaExamenesAsiNue
     */
    protected $ClaseFechaExamenesAsiNue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ClaseFechaExamenesAsiNue[]
     */
    public function getClaseFechaExamenesAsiNue()
    {
      return $this->ClaseFechaExamenesAsiNue;
    }

    /**
     * @param ClaseFechaExamenesAsiNue[] $ClaseFechaExamenesAsiNue
     * @return \Clases\ArrayOfClaseFechaExamenesAsiNue
     */
    public function setClaseFechaExamenesAsiNue(array $ClaseFechaExamenesAsiNue = null)
    {
      $this->ClaseFechaExamenesAsiNue = $ClaseFechaExamenesAsiNue;
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
      return isset($this->ClaseFechaExamenesAsiNue[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ClaseFechaExamenesAsiNue
     */
    public function offsetGet($offset)
    {
      return $this->ClaseFechaExamenesAsiNue[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ClaseFechaExamenesAsiNue $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ClaseFechaExamenesAsiNue[] = $value;
      } else {
        $this->ClaseFechaExamenesAsiNue[$offset] = $value;
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
      unset($this->ClaseFechaExamenesAsiNue[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ClaseFechaExamenesAsiNue Return the current element
     */
    public function current()
    {
      return current($this->ClaseFechaExamenesAsiNue);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ClaseFechaExamenesAsiNue);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ClaseFechaExamenesAsiNue);
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
      reset($this->ClaseFechaExamenesAsiNue);
    }

    /**
     * Countable implementation
     *
     * @return ClaseFechaExamenesAsiNue Return count of elements
     */
    public function count()
    {
      return count($this->ClaseFechaExamenesAsiNue);
    }

}
