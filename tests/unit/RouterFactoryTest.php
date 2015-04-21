<?php


use Jkuatapp\System as System;


class RouterFactoryTest extends PHPUnit_Framework_TestCase
{
    public function testGetReturnsReferenceToRouter()
    {
        $reference = System\RouterFactory::get();
        $this->assertInstanceOf("Jkuatapp\\System\\Router", $reference);
    }

    public function testGetReturnsSameReference()
    {
        $reference1 = System\RouterFactory::get();
        $reference2 = System\RouterFactory::get();
        $this->assertSame($reference1, $reference2);
    }
}

