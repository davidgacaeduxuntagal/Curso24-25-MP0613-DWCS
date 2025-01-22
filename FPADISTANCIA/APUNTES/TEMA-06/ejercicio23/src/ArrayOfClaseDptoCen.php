<?php

namespace Clases;

class ArrayOfClaseDptoCen
{

    /**
     * @var ClaseDptoCen[] $ClaseDptoCen
     */
    protected $ClaseDptoCen = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ClaseDptoCen[]
     */
    public function getClaseDptoCen()
    {
      return $this->ClaseDptoCen;
    }

    /**
     * @param ClaseDptoCen[] $ClaseDptoCen
     * @return \Clases\ArrayOfClaseDptoCen
     */
    public function setClaseDptoCen(array $ClaseDptoCen = null)
    {
      $this->ClaseDptoCen = $ClaseDptoCen;
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
      return isset($this->ClaseDptoCen[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ClaseDptoCen
     */
    public function offsetGet($offset)
    {
      return $this->ClaseDptoCen[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ClaseDptoCen $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ClaseDptoCen[] = $value;
      } else {
        $this->ClaseDptoCen[$offset] = $value;
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
      unset($this->ClaseDptoCen[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ClaseDptoCen Return the current element
     */
    public function current()
    {
      return current($this->ClaseDptoCen);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ClaseDptoCen);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ClaseDptoCen);
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
      reset($this->ClaseDptoCen);
    }

    /**
     * Countable implementation
     *
     * @return ClaseDptoCen Return count of elements
     */
    public function count()
    {
      return count($this->ClaseDptoCen);
    }

}
