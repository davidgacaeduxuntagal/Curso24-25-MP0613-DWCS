<?php

namespace Clases;

class ArrayOfClaseTitulosPropiosUni
{

    /**
     * @var ClaseTitulosPropiosUni[] $ClaseTitulosPropiosUni
     */
    protected $ClaseTitulosPropiosUni = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ClaseTitulosPropiosUni[]
     */
    public function getClaseTitulosPropiosUni()
    {
      return $this->ClaseTitulosPropiosUni;
    }

    /**
     * @param ClaseTitulosPropiosUni[] $ClaseTitulosPropiosUni
     * @return \Clases\ArrayOfClaseTitulosPropiosUni
     */
    public function setClaseTitulosPropiosUni(array $ClaseTitulosPropiosUni = null)
    {
      $this->ClaseTitulosPropiosUni = $ClaseTitulosPropiosUni;
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
      return isset($this->ClaseTitulosPropiosUni[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ClaseTitulosPropiosUni
     */
    public function offsetGet($offset)
    {
      return $this->ClaseTitulosPropiosUni[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ClaseTitulosPropiosUni $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ClaseTitulosPropiosUni[] = $value;
      } else {
        $this->ClaseTitulosPropiosUni[$offset] = $value;
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
      unset($this->ClaseTitulosPropiosUni[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ClaseTitulosPropiosUni Return the current element
     */
    public function current()
    {
      return current($this->ClaseTitulosPropiosUni);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ClaseTitulosPropiosUni);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ClaseTitulosPropiosUni);
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
      reset($this->ClaseTitulosPropiosUni);
    }

    /**
     * Countable implementation
     *
     * @return ClaseTitulosPropiosUni Return count of elements
     */
    public function count()
    {
      return count($this->ClaseTitulosPropiosUni);
    }

}
