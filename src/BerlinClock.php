<?php

class BerlinClock {

    private $_secondesLine;
    private $_hoursPer5Line;
    private $_hoursLine;
    private $_minutesPer5Line;
    private $_minutesLine;

    public function __construct($hours, $minutes, $secondes){
        $this->_secondesLine = $this->countSecondes($secondes);
        $this->_hoursPer5Line = $this->countHoursPer5($hours);
        $this->_hoursLine = $this->countHours($hours);
        $this->_minutesPer5Line = $this->countMinutesPer5($minutes);
        $this->_minutesLine = $this->countMinutes($minutes);
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

    public function countMinutesPer5 (int $int): string {
        $count = $int/5;
        $ret = "";

        for($i = 1; $i<=11; $i++){
            if($i <= $count){
                if($i%3 == 0)
                    $ret .= "R";
                else
                    $ret .= "Y";
            }else{
                $ret .= "X";
            }
        }
        return $ret;
    }

    public function countHours(int $int): string {

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

    public function countHoursPer5 (int $int): string {
        $count = $int/5;
        $ret = "";

        for($i = 1; $i<=4; $i++){
            if($i <= $count){
                $ret .= "O";
            }else{
                $ret .= "X";
            }
        }
        return $ret;
    }

    public function countSecondes(int $int) : string{
        $int=$int%2;

        if ($int === 1 ) return "X";

        return "O";
    }

    /**
     * @return string
     */
    public function getMinutesPer5Line(): string
    {
        return $this->_minutesPer5Line;
    }

    public function getHoursLine(): string {
        return $this->_hoursLine;
    }

    /**
     * @return mixed
     */
    public function getHoursPer5Line()
    {
        return $this->_hoursPer5Line;
    }

    /**
     * @return string
     */
    public function getSecondesLine(): string
    {
        return $this->_secondesLine;
    }

}