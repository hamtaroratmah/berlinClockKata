<?php

require("../src/BerlinClock.php");

use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase{

    public function testCountminutes0ExpectedXXXX(){
        $clock = new BerlinClock(0, 0, 0);
        $this->assertEquals("XXXX", $clock->getMinutesLine());
    }

    public function testCountminutes1ExpectedOXXX() {
        $clock = new BerlinClock(0, 1, 0);
        $result = $clock->getMinutesLine();
        $this->assertEquals("OXXX", $result);
    }

    public function testCountminutes1ExpectedOOXX() {
        $clock = new BerlinClock(0, 2, 0);
        $result = $clock->getMinutesLine();
        $this->assertEquals("OOXX", $result);
    }

    public function testCountminutes1ExpectedOOOX() {
        $clock = new BerlinClock(0, 3, 0);
        $result = $clock->getMinutesLine();
        $this->assertEquals("OOOX", $result);
    }

    public function testCountminutes1ExpectedOOOO() {
        $clock = new BerlinClock(0, 4, 0);
        $result = $clock->getMinutesLine();
        $this->assertEquals("OOOO", $result);
    }

    public function testCountMinutesPer50Expected11X(){
        $clock = new BerlinClock(0, 0, 0);
        $result = $clock->getMinutesPer5Line();
        $this->assertEquals("XXXXXXXXXXX", $result);
    }

    public function testCountMinutesPer55ExpectedY10X(){
        $clock = new BerlinClock(0, 5, 0);
        $result = $clock->getMinutesPer5Line();
        $this->assertEquals("YXXXXXXXXXX", $result);
    }

    public function testCountMinutesPer510ExpectedYY9X(){
        $clock = new BerlinClock(0, 10, 0);
        $result = $clock->getMinutesPer5Line();
        $this->assertEquals("YYXXXXXXXXX", $result);
    }

    public function testCountMinutesPer515ExpectedYYR8X(){
        $clock = new BerlinClock(0, 15, 0);
        $result = $clock->getMinutesPer5Line();
        $this->assertEquals("YYRXXXXXXXX", $result);
    }

    public function testCountMinutesPer520ExpectedYYRY7X(){
        $clock = new BerlinClock(0, 20, 0);
        $result = $clock->getMinutesPer5Line();
        $this->assertEquals("YYRYXXXXXXX", $result);
    }

    public function testCountMinutesPer525ExpectedYYRYY6X(){
        $clock = new BerlinClock(0, 25, 0);
        $result = $clock->getMinutesPer5Line();
        $this->assertEquals("YYRYYXXXXXX", $result);
    }

    public function testCountMinutesPer530ExpectedYYRYYR5X(){
        $clock = new BerlinClock(0, 30, 0);
        $result = $clock->getMinutesPer5Line();
        $this->assertEquals("YYRYYRXXXXX", $result);
    }

    public function testCountMinutesPer535ExpectedYYRYYRY4X(){
        $clock = new BerlinClock(0, 35, 0);
        $result = $clock->getMinutesPer5Line();
        $this->assertEquals("YYRYYRYXXXX", $result);
    }

    public function testCountMinutesPer540ExpectedYYRYYRYY3X(){
        $clock = new BerlinClock(0, 40, 0);
        $result = $clock->getMinutesPer5Line();
        $this->assertEquals("YYRYYRYYXXX", $result);
    }

    public function testCountMinutesPer545ExpectedYYRYYRYYR2X(){
        $clock = new BerlinClock(0, 45, 0);
        $result = $clock->getMinutesPer5Line();
        $this->assertEquals("YYRYYRYYRXX", $result);
    }

}
