<?php

class ExpectedExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException RuntimeException
     */
    public function testExceptionsOfTheWrongTypeAreTraced()
    {
        throw new InvalidArgumentException();  
    }
}
