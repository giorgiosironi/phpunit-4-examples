<?php
require_once __DIR__ . '/../src/Bin.php';
require_once __DIR__ . '/../src/Paint.php';

class CoverageTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers Bin::fillWith
     * @covers Bin::color
     */
    public function testCoversOnlyASpecificMethod()
    {
        $bin = new Bin();
        $bin->fillWith(new Paint());
        $this->assertEquals('red', $bin->color());
    }
}

