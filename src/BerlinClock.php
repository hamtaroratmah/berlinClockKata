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
    public function getSecondesLine(){
        return $this->_secondesLine;
    }

    /**
     * @return string
     */
    public function getHoursPer5Line(){
        return $this->_hoursPer5Line;
    }

    /**
     * @return string
     */
    public function getHoursLine(){
        return $this->_hoursLine;
    }

    /**
     * @return string
     */
    public function getMinutesPer5Line(){
        return $this->_minutesPer5Line;
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
                return "NNNN";
            case 1 :
                return "YNNN";
            case 2 :
                return "YYNN";
            case 3 :
                return "YYYN";
            case 4 :
                return "YYYY";
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
                $ret .= "N";
            }
        }

        return $ret;
    }

    public function countHours(int $int): string {

        $tmp = $int%5;

        switch ($tmp){
            case 0 :
                return "NNNN";
            case 1 :
                return "RNNN";
            case 2 :
                return "RRNN";
            case 3 :
                return "RRRN";
            case 4 :
                return "RRRR";
        }
        return "";
    }
    public function countHoursPer5 (int $int): string {
        $count = $int/5;
        $ret = "";

        for($i = 1; $i<=4; $i++){
            if($i <= $count){
                $ret .= "R";
            }else{
                $ret .= "N";
            }
        }
        return $ret;
    }
    public function countSecondes(int $int) : string{
        $int=$int%2;

        if ($int === 1 ) return "N";

        return "R";
    }
}