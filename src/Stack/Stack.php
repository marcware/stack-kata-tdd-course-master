<?php

namespace Stack;

use Stack\StackException;

/**
 * Class Stack
 */
class Stack
{
    private $stack ;

    public function __construct()
    {
        $this->stack = array();
    }

    public function count()
    {
        return count($this->stack);
    }

    public function push($data)
    {
        array_push($this->stack, $data);
    }

    public function pop()
    {
        $pop = array_pop($this->stack);

        if (is_null($pop)){
          throw new StackException();
        }

      return $pop;
    }

}

