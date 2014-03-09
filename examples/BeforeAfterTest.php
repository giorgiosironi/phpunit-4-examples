<?php

class BeforeAfterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @before
     */
    public function databaseStart()
    {
        $this->db = new Db();
        $this->db->create();
    }

    /**
     * @after
     */
    public function databaseCleanup()
    {
        $this->db->drop();
    }

    public function testBeforeAndAfterAreExecutedAsSetupAndTearDown()
    {
        
    }
}

class Db
{
    public function create()
    {
        echo "Create", PHP_EOL;
    }

    public function drop()
    {
        echo "Drop", PHP_EOL;
    }
}
