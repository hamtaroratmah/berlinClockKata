<?php

class BerlinClock {

    private $_minutesLine;

    public function __construct($minutes){
        $this->_minutesLine=$this->countMinutes($minutes);
    }

    /**
     * @return string
     */
    public function getMinutesLine(){
        return $this->_minutesLine;
    }

    public function countMinutes (int $int): string{

        $tmp = $int%5;

        switch ($tmp){
            case 0 :
                return "XXXX";
            case 1 :
                return "OXXX";
            case 2 :
                return "OOXX";
            case 3 :
                return "OOOX";
            case 4 :
                return "OOOO";
        }

        return "";
    }

}