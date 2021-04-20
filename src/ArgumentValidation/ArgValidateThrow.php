<?php

namespace Hexel\Utilities\ArgumentValidation;

/**
 * @author Hexel Colorado <hexel@blackshieldrisk.com>
 */
class ArgValidateThrow extends ArgValidate
{
    protected static bool $failureShouldBeThrown = true;
}
