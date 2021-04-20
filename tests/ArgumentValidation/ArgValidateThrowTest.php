<?php

namespace Hexel\Utilities\Tests\ArgumentValidation;

use Hexel\Utilities\ArgumentValidation\ArgValidateThrow;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

/**
 * @covers DefaultClass \Hexel\Utilities\ArgumentValidation\ArgValidateThrow
 * @author Hexel Colorado <hexelcolorado@gmail.com>
 */
class ArgValidateThrowTest extends TestCase
{
    /**
     * @covers ::objectHasNestedProperty()
     */
    public function testObjectHasNestedProperty()
    {
        $object = (object) ['a' => 'apple'];

        $this->expectException(InvalidArgumentException::class);

        ArgValidateThrow::objectHasNestedProperty($object, 'b');
    }
}
