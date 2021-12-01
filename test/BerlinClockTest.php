<?php

require("src/BerlinClock.php");

use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase{

    public function testCountminutes0ExpectedXXXX(){
        $clock = new BerlinClock(0, 0, 0);
        $this->assertEquals("XXXX", $clock->getMinutesLine());
    }

    public function testCountminutes1ExceptedOXXX() {
        $clock = new BerlinClock(0, 1, 0);
        $result = $clock->getMinutesLine();
        $this->assertEquals("OXXX", $result);
    }

    public function testCountminutes1ExceptedOOXX() {
        $clock = new BerlinClock(0, 2, 0);
        $result = $clock->getMinutesLine();
        $this->assertEquals("OOXX", $result);
    }

    public function testCountminutes1ExceptedOOOX() {
        $clock = new BerlinClock(0, 3, 0);
        $result = $clock->getMinutesLine();
        $this->assertEquals("OOOX", $result);
    }

    public function testCountminutes1ExceptedOOOO() {
        $clock = new BerlinClock(0, 4, 0);
        $result = $clock->getMinutesLine();
        $this->assertEquals("OOOO", $result);
    }

}
