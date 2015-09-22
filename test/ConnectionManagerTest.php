<?php
namespace TPE\ConnectionManager\Test;

/**
 * The ConnectionManager test class
 */
class ConnectionManagerTest extends \PHPUnit_Framework_TestCase
{

    public function testConnectionManager()
    {
        db("default", new \mysqli());
        $this->assertInstanceOf("mysqli", db());

        db("remote", new \PDO('mysql:'));
        $this->assertInstanceOf("PDO", db("remote"));
    }
}