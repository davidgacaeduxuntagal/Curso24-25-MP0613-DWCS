<?php

namespace Clases;

class ArrayOfClaseHorarioAgrp
{

    /**
     * @var ClaseHorarioAgrp[] $ClaseHorarioAgrp
     */
    protected $ClaseHorarioAgrp = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ClaseHorarioAgrp[]
     */
    public function getClaseHorarioAgrp()
    {
      return $this->ClaseHorarioAgrp;
    }

    /**
     * @param ClaseHorarioAgrp[] $ClaseHorarioAgrp
     * @return \Clases\ArrayOfClaseHorarioAgrp
     */
    public function setClaseHorarioAgrp(array $ClaseHorarioAgrp = null)
    {
      $this->ClaseHorarioAgrp = $ClaseHorarioAgrp;
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
      return isset($this->ClaseHorarioAgrp[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ClaseHorarioAgrp
     */
    public function offsetGet($offset)
    {
      return $this->ClaseHorarioAgrp[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ClaseHorarioAgrp $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ClaseHorarioAgrp[] = $value;
      } else {
        $this->ClaseHorarioAgrp[$offset] = $value;
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
      unset($this->ClaseHorarioAgrp[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ClaseHorarioAgrp Return the current element
     */
    public function current()
    {
      return current($this->ClaseHorarioAgrp);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ClaseHorarioAgrp);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ClaseHorarioAgrp);
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
      reset($this->ClaseHorarioAgrp);
    }

    /**
     * Countable implementation
     *
     * @return ClaseHorarioAgrp Return count of elements
     */
    public function count()
    {
      return count($this->ClaseHorarioAgrp);
    }

}
