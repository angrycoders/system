<?php


use Jkuatapp\System as System;


class RouterFactoryTest extends PHPUnit_Framework_TestCase
{
    public function testGetReturnsReferenceToRouter()
    {
        $reference = System\RouterFactory::get();
        $this->assertInstanceOf("Jkuatapp\System\Router", $reference);
    }
}

