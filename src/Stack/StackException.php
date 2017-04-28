<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 28/04/2017
 * Time: 12:52
 */

namespace Stack;


class StackException extends \Exception
{
    public function __construct()
    {
        parent::__construct("Empty stack");
    }
}