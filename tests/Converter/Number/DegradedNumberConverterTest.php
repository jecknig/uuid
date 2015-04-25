<?php

namespace Ramsey\Uuid\Converter\Number;

use Ramsey\Uuid\TestCase;

class DegradedNumberConverterTest extends TestCase
{
    /**
     * @expectedException Ramsey\Uuid\Exception\UnsatisfiedDependencyException
     */
    public function testConvertingFromHexThrowsException()
    {
        $converter = new DegradedNumberConverter();

        $converter->fromHex('ffff');
    }

    /**
     * @expectedException Ramsey\Uuid\Exception\UnsatisfiedDependencyException
     */
    public function testConvertingToHexThrowsException()
    {
        $converter = new DegradedNumberConverter();

        $converter->toHex(0);
    }
}
