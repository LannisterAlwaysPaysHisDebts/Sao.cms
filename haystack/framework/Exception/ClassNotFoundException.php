<?php
/**
 */

namespace Core\Exception;

class ClassNotFoundException extends \RuntimeException
{
    protected $class;

    public function __construct(string $message = "", string $class = "")
    {
        $this->message = $message;
        $this->class = $class;
    }

    public function getClass()
    {
        return $this->class;
    }
}