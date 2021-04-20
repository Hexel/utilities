<?php

namespace Hexel\Utilities;

/**
 * @author Hexel Colorado <hexel@blackshieldrisk.com>
 */
class GeneralUtil
{
    public static function match($switch, array $cases)
    {
        foreach ($cases as $case => $return) {
            if ($switch === $case) {
                return $return;
            }
        }

        return null;
    }

    public static function toss(\Exception $exception)
    {
        throw $exception;

        return null;
    }
}
