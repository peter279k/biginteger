<?php

namespace PHP\Math\BigIntegerTest;

use PHP\Math\BigInteger\BigInteger;
use PHPUnit_Framework_TestCase;

class BigIntegerSubtractTest extends PHPUnit_Framework_TestCase
{
    public function testWithInteger()
    {
        // Arrange
        $bigInteger = new BigInteger('123');

        // Act
        $bigInteger->subtract(123);

        // Assert
        $this->assertInternalType('string', $bigInteger->getValue());
        $this->assertEquals('0', $bigInteger->getValue());
    }

    public function testWithString()
    {
        // Arrange
        $bigInteger = new BigInteger('123');

        // Act
        $bigInteger->subtract('123');

        // Assert
        $this->assertInternalType('string', $bigInteger->getValue());
        $this->assertEquals('0', $bigInteger->getValue());
    }

    public function testWithBigInteger()
    {
        // Arrange
        $bigInteger = new BigInteger('123');
        $bigIntegerValue = new BigInteger('123');

        // Act
        $bigInteger->subtract($bigIntegerValue);

        // Assert
        $this->assertInternalType('string', $bigInteger->getValue());
        $this->assertEquals('0', $bigInteger->getValue());
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testWithInvalidValue()
    {
        // Arrange
        $bigInteger = new BigInteger('123');

        // Act
        $bigInteger->subtract('123.123');

        // Assert
        // ...
    }
}