<?php

require("src/BerlinClock.php");

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

    public function testCountMinutesPer550ExpectedYYRYYRYYRYX(){
        $clock = new BerlinClock(0, 50, 0);
        $result = $clock->getMinutesPer5Line();
        $this->assertEquals("YYRYYRYYRYX", $result);
    }

    public function testCountMinutesPer555ExpectedYYRYYRYYRYY(){
        $clock = new BerlinClock(0, 55, 0);
        $result = $clock->getMinutesPer5Line();
        $this->assertEquals("YYRYYRYYRYY", $result);
    }

    public function testCoutHours0ExpectedXXXX() {
        $clock = new BerlinClock(0, 0, 0);
        $result = $clock->getHoursLine();
        $this->assertEquals("XXXX", $result);
    }

    public function testCoutHours1ExpectedOXXX() {
        $clock = new BerlinClock(1, 0, 0);
        $result = $clock->getHoursLine();
        $this->assertEquals("OXXX", $result);
    }

    public function testCoutHours2ExpectedOOXX() {
        $clock = new BerlinClock(2, 0, 0);
        $result = $clock->getHoursLine();
        $this->assertEquals("OOXX", $result);
    }

    public function testCoutHours3ExpectedOOOX() {
        $clock = new BerlinClock(3, 0, 0);
        $result = $clock->getHoursLine();
        $this->assertEquals("OOOX", $result);
    }

    public function testCoutHours4ExpectedOOOO() {
        $clock = new BerlinClock(4, 0, 0);
        $result = $clock->getHoursLine();
        $this->assertEquals("OOOO", $result);
    }

    public function testCoutHours5ExpectedXXXX() {
        $clock = new BerlinClock(5, 0, 0);
        $result = $clock->getHoursLine();
        $this->assertEquals("XXXX", $result);
    }

    public function testCountHoursPer50ExpectedXXXX() {
        $clock = new BerlinClock(0, 0, 0);
        $result = $clock->getHoursPer5Line();
        $this->assertEquals("XXXX", $result);
    }

    public function testCountHoursPer55ExpectedOXXX() {
        $clock = new BerlinClock(5, 0, 5);
        $result = $clock->getHoursPer5Line();
        $this->assertEquals("OXXX", $result);
    }

    public function testCountHoursPer510ExpectedOOXX() {
        $clock = new BerlinClock(10, 0, 10);
        $result = $clock->getHoursPer5Line();
        $this->assertEquals("OOXX", $result);
    }

    public function testCountHoursPer515ExpectedOOOX() {
        $clock = new BerlinClock(15, 0, 0);
        $result = $clock->getHoursPer5Line();
        $this->assertEquals("OOOX", $result);
    }

    public function testCountHoursPer520ExpectedOOOO() {
        $clock = new BerlinClock(20, 0, 0);
        $result = $clock->getHoursPer5Line();
        $this->assertEquals("OOOO", $result);
    }

    public function testCountSeconds0ExpectedO(){
        $clock = new BerlinClock(0, 0, 0);
        $result = $clock->getSecondesLine();
        $this->assertEquals("O", $result);
    }

    public function testCountSeconds11ExpectedX(){
        $clock = new BerlinClock(0, 0, 11);
        $result = $clock->getSecondesLine();
        $this->assertEquals("X", $result);
    }

    public function testmakeClockSecondes0Minutes0Heures0ExpectedAucuneLumiereAllumeSaufSeconde() {
        $clock = new BerlinClock(0, 0, 0);
        $result = $clock->getClock();
        $this->assertEquals("O\nXXXX\nXXXX\nXXXXXXXXXXX\nXXXX", $result);
    }

    public function testMakeClockSecondes59Minutes59Heures23ExpectedToutAullumeSaufSecondeEt4emeLumiereHeure() {
        $clock = new BerlinClock(23, 59, 59);
        $result = $clock->getClock();
        $this->assertEquals("X\nOOOO\nOOOX\nYYRYYRYYRYY\nOOOO", $result);
    }

}
