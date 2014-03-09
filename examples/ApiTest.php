<?php

class ApiTest extends \PHPUnit_Framework_TestCase
{
    public function testCountOf()
    {
        $mock = $this->getMock('InterfaceToMock');
        $mock->expects($this->once())
            ->method('doSomething')
            ->with($this->countOf(3));

        $mock->doSomething([1, 2, 3, 4]);
    }

    public function testDateTimeComparisonShowsASingleRepresentation()
    {
        $this->assertEquals(
            new DateTime('2013-03-29T05:13:35+0000'),
            new DateTime('2013-03-29T06:13:35+0000')
        );
    }
}

interface InterfaceToMock
{
    public function doSomething($parameter);
}
