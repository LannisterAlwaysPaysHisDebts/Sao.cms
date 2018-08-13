<?php
/**
 * 容器类
 */

namespace Core;

use ArrayAccess;
use ArrayIterator;
use Closure;
use Countable;
use InvalidArgumentException;
use IteratorAggregate;
use ReflectionClass;
use ReflectionException;
use ReflectionFunction;
use ReflectionMethod;
use Core\Exception\ClassNotFoundException;

class Container implements ArrayAccess, IteratorAggregate, Countable
{
    public function offsetGet($offset)
    {
    }

    public function count()
    {
        // TODO: Implement count() method.
    }

    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
    }

    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
    }

    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
    }

    public function getIterator()
    {
        // TODO: Implement getIterator() method.
    }
}