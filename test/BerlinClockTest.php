<?php

require("../src/BerlinClock.php");

use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase{

    public function testCountminutes0ExpectedXXXX(){
        $clock = new BerlinClock(0);
        $this->assertEquals("XXXX", $clock->getMinutesLine());
    }
}
