<?php

namespace Clases;

class ArrayOfClasePlanesAsig
{

    /**
     * @var ClasePlanesAsig[] $ClasePlanesAsig
     */
    protected $ClasePlanesAsig = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ClasePlanesAsig[]
     */
    public function getClasePlanesAsig()
    {
      return $this->ClasePlanesAsig;
    }

    /**
     * @param ClasePlanesAsig[] $ClasePlanesAsig
     * @return \Clases\ArrayOfClasePlanesAsig
     */
    public function setClasePlanesAsig(array $ClasePlanesAsig = null)
    {
      $this->ClasePlanesAsig = $ClasePlanesAsig;
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
      return isset($this->ClasePlanesAsig[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ClasePlanesAsig
     */
    public function offsetGet($offset)
    {
      return $this->ClasePlanesAsig[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ClasePlanesAsig $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ClasePlanesAsig[] = $value;
      } else {
        $this->ClasePlanesAsig[$offset] = $value;
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
      unset($this->ClasePlanesAsig[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ClasePlanesAsig Return the current element
     */
    public function current()
    {
      return current($this->ClasePlanesAsig);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ClasePlanesAsig);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ClasePlanesAsig);
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
      reset($this->ClasePlanesAsig);
    }

    /**
     * Countable implementation
     *
     * @return ClasePlanesAsig Return count of elements
     */
    public function count()
    {
      return count($this->ClasePlanesAsig);
    }

}
