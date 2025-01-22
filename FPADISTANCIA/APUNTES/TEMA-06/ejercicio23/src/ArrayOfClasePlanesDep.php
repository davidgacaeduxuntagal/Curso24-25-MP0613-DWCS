<?php

namespace Clases;

class ArrayOfClasePlanesDep
{

    /**
     * @var ClasePlanesDep[] $ClasePlanesDep
     */
    protected $ClasePlanesDep = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ClasePlanesDep[]
     */
    public function getClasePlanesDep()
    {
      return $this->ClasePlanesDep;
    }

    /**
     * @param ClasePlanesDep[] $ClasePlanesDep
     * @return \Clases\ArrayOfClasePlanesDep
     */
    public function setClasePlanesDep(array $ClasePlanesDep = null)
    {
      $this->ClasePlanesDep = $ClasePlanesDep;
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
      return isset($this->ClasePlanesDep[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ClasePlanesDep
     */
    public function offsetGet($offset)
    {
      return $this->ClasePlanesDep[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ClasePlanesDep $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ClasePlanesDep[] = $value;
      } else {
        $this->ClasePlanesDep[$offset] = $value;
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
      unset($this->ClasePlanesDep[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ClasePlanesDep Return the current element
     */
    public function current()
    {
      return current($this->ClasePlanesDep);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ClasePlanesDep);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ClasePlanesDep);
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
      reset($this->ClasePlanesDep);
    }

    /**
     * Countable implementation
     *
     * @return ClasePlanesDep Return count of elements
     */
    public function count()
    {
      return count($this->ClasePlanesDep);
    }

}
