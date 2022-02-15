<?php

namespace App\helpers;

use Carbon\Carbon;

trait Format {

    private $day;
    private $time;
    private $dayBR;
    private $timeBR;
    
    public function formatDay() {
        $currentTime = explode(' ',Carbon::now('America/Sao_Paulo')
        ->toDateTimeString());

        $this->day = $currentTime[0];

        return $this->day;
    }

    public function formatTime() {

        $currentTime = explode(' ',Carbon::now('America/Sao_Paulo')
        ->toDateTimeString());
        
        $currentTime = explode(':', $currentTime[1]);
        $time = $currentTime[0] .':'. $currentTime[1];
        
        $this->time = $time;

        return $this->time;
    }

    public function formatTimeBR() {
        $currentTime = explode(':',$this->formatTime());
        $timeBR = $currentTime[0] . ':' . $currentTime[1];

        $this->timeBR = $timeBR;

        return $this->timeBR;
    }

    public function formatDayBR() {
        $currentTime = explode('-', $this->formatDay());
        $dayBR = $currentTime[2] . '/' . $currentTime[1] . '/' . $currentTime[0];
        $this->dayBR = $dayBR;

        return $this->day;
    }
}
