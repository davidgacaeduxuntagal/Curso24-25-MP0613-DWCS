<?php

namespace Clases;

class ArrayOfClaseDptoAsig
{

    /**
     * @var ClaseDptoAsig[] $ClaseDptoAsig
     */
    protected $ClaseDptoAsig = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ClaseDptoAsig[]
     */
    public function getClaseDptoAsig()
    {
      return $this->ClaseDptoAsig;
    }

    /**
     * @param ClaseDptoAsig[] $ClaseDptoAsig
     * @return \Clases\ArrayOfClaseDptoAsig
     */
    public function setClaseDptoAsig(array $ClaseDptoAsig = null)
    {
      $this->ClaseDptoAsig = $ClaseDptoAsig;
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
      return isset($this->ClaseDptoAsig[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ClaseDptoAsig
     */
    public function offsetGet($offset)
    {
      return $this->ClaseDptoAsig[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ClaseDptoAsig $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ClaseDptoAsig[] = $value;
      } else {
        $this->ClaseDptoAsig[$offset] = $value;
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
      unset($this->ClaseDptoAsig[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ClaseDptoAsig Return the current element
     */
    public function current()
    {
      return current($this->ClaseDptoAsig);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ClaseDptoAsig);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ClaseDptoAsig);
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
      reset($this->ClaseDptoAsig);
    }

    /**
     * Countable implementation
     *
     * @return ClaseDptoAsig Return count of elements
     */
    public function count()
    {
      return count($this->ClaseDptoAsig);
    }

}
