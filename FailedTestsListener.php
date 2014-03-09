<?php

class FailedTestsListener extends PHPUnit_Framework_BaseTestListener
{
    public function addFailure(PHPUnit_Framework_Test $test, PHPUnit_Framework_AssertionFailedError $e, $time)
    {
        error_log("{$test->getName()} failed");
    }
}
