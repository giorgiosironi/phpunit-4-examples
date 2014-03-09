<?php

class ProxiesTest extends \PHPUnit_Framework_TestCase
{
    public function testProxyingToArrayObject()
    {
        $proxy = $this->getMockBuilder('ArrayObject')
                      ->enableProxyingToOriginalMethods()
                      ->getMock();

        $proxy->expects($this->exactly(2))
              ->method('getArrayCopy');

        $this->assertEquals([], $proxy->getArrayCopy());
    }
}
