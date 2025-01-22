<?php

namespace Clases;

class ArrayOfClaseGrupoAsi
{

    /**
     * @var ClaseGrupoAsi[] $ClaseGrupoAsi
     */
    protected $ClaseGrupoAsi = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ClaseGrupoAsi[]
     */
    public function getClaseGrupoAsi()
    {
      return $this->ClaseGrupoAsi;
    }

    /**
     * @param ClaseGrupoAsi[] $ClaseGrupoAsi
     * @return \Clases\ArrayOfClaseGrupoAsi
     */
    public function setClaseGrupoAsi(array $ClaseGrupoAsi = null)
    {
      $this->ClaseGrupoAsi = $ClaseGrupoAsi;
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
      return isset($this->ClaseGrupoAsi[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ClaseGrupoAsi
     */
    public function offsetGet($offset)
    {
      return $this->ClaseGrupoAsi[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ClaseGrupoAsi $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ClaseGrupoAsi[] = $value;
      } else {
        $this->ClaseGrupoAsi[$offset] = $value;
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
      unset($this->ClaseGrupoAsi[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ClaseGrupoAsi Return the current element
     */
    public function current()
    {
      return current($this->ClaseGrupoAsi);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ClaseGrupoAsi);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ClaseGrupoAsi);
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
      reset($this->ClaseGrupoAsi);
    }

    /**
     * Countable implementation
     *
     * @return ClaseGrupoAsi Return count of elements
     */
    public function count()
    {
      return count($this->ClaseGrupoAsi);
    }

}
