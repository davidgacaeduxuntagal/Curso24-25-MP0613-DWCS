<?php

namespace Clases;

class ArrayOfClaseConvocatorias
{

    /**
     * @var ClaseConvocatorias[] $ClaseConvocatorias
     */
    protected $ClaseConvocatorias = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ClaseConvocatorias[]
     */
    public function getClaseConvocatorias()
    {
      return $this->ClaseConvocatorias;
    }

    /**
     * @param ClaseConvocatorias[] $ClaseConvocatorias
     * @return \Clases\ArrayOfClaseConvocatorias
     */
    public function setClaseConvocatorias(array $ClaseConvocatorias = null)
    {
      $this->ClaseConvocatorias = $ClaseConvocatorias;
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
      return isset($this->ClaseConvocatorias[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ClaseConvocatorias
     */
    public function offsetGet($offset)
    {
      return $this->ClaseConvocatorias[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ClaseConvocatorias $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ClaseConvocatorias[] = $value;
      } else {
        $this->ClaseConvocatorias[$offset] = $value;
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
      unset($this->ClaseConvocatorias[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ClaseConvocatorias Return the current element
     */
    public function current()
    {
      return current($this->ClaseConvocatorias);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ClaseConvocatorias);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ClaseConvocatorias);
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
      reset($this->ClaseConvocatorias);
    }

    /**
     * Countable implementation
     *
     * @return ClaseConvocatorias Return count of elements
     */
    public function count()
    {
      return count($this->ClaseConvocatorias);
    }

}
