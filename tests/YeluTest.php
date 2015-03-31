<?php

use Coppel\Yelu\Yelu;

class YeluTest extends PHPUnit_Framework_TestCase
{
    public function testYeluHasCode()
    {
        $yelu = new Yelu();
        $this->assertTrue($yelu->hasCode());
    }
}