<?php

namespace Hexel\Utilities\ArgumentValidation;

use InvalidArgumentException;

/**
 * @author Hexel Colorado <hexelcolorado@gmail.com>
 */
class ArgValidate
{
    protected static bool $failureShouldBeThrown = false;

    public static function objectHasNestedProperty(object $object, string ...$properties)
    {
        $current = $object;

        foreach ($properties as $prop) {
            if (! isset($current->$prop)) {
                static::throwArg('Object property does not exist.');
                return false;
            }

            $current = $current->$prop;
        }

        return true;
    }

    public static function chainProperties(object $object, string ...$properties)
    {
        $current = $object;

        foreach ($properties as $prop) {
            $current = $current->$prop;
        }

        return $current;
    }

    protected static function throwArg(string $message = null)
    {
        if (static::$failureShouldBeThrown) {
            throw new InvalidArgumentException($message);
        }
    }
}
