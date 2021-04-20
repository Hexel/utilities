<?php

namespace Hexel\Utilities\Tests\ArgumentValidation;

use Hexel\Utilities\ArgumentValidation\ArgValidate;
use PHPUnit\Framework\TestCase;

/**
 * @covers DefaultClass \Hexel\Utilities\ArgumentValidation\ArgValidate
 * @author Hexel Colorado <hexelcolorado@gmail.com>
 */
class ArgValidateTest extends TestCase
{
    /**
     * @covers ::objectHasNestedProperty()
     */
    public function testObjectHasNestedProperty()
    {
        $object = (object) [
            'a' => 'apple',
            'b' => (object) [
                'c' => 'carrot',
                'd' => (object) [
                    'e' => 'egg',
                ],
            ],
        ];

        $test = fn (...$props) => ArgValidate::objectHasNestedProperty($object, ...$props);

        $this->assertTrue($test('a'));
        $this->assertTrue($test('b'));
        $this->assertTrue($test('b', 'c'));
        $this->assertTrue($test('b', 'd'));
        $this->assertTrue($test('b', 'd', 'e'));

        $this->assertFalse($test('c'));
        $this->assertFalse($test('b', 'a'));
        $this->assertFalse($test('b', 'c', 'e'));
        $this->assertFalse($test('b', 'd', 'd', 'f'));
    }
}
