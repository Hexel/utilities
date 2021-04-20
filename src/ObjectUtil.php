<?php

namespace Hexel\Utilities;

use Hexel\Utilities\ArgumentValidation\ArgValidate;

/**
 * @author Hexel Colorado <hexel@blackshieldrisk.com>
 */
class ObjectUtil
{
    public static function fromJson(string $json): object
    {
        return (object) json_decode($json);
    }

    public static function chainRead(object $object, string ...$properties)
    {
        if (ArgValidate::objectHasNestedProperty($object, ...$properties)) {
            $current = $object;

            foreach ($properties as $prop) {
                $current = $current->$prop;
            }

            return $current;
        }

        return null;
    }
}
