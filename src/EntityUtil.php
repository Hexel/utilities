<?php

namespace Hexel\Utilities;

/**
 * @author Hexel Colorado <hexel@blackshieldrisk.com>
 */
class EntityUtil
{
    public static function fromId($idOrEntity, string $class, $repo, string $getter)
    {
        $entity = (is_int($idOrEntity)) ? $repo->$getter($idOrEntity) : $idOrEntity;

        if (is_int($idOrEntity) && is_null($entity)) {
            throw new \OutOfBoundsException("Could not find instance of {$class} with ID {$idOrEntity}.");
        }

        if (! is_a($entity, $class)) {
            throw new \InvalidArgumentExeption("Invalid argument. Expected either integer ID or instance of {$class}");
        }

        return $entity;
    }
}
