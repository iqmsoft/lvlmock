<?php

class Helper_DailyPaperwork
{
    protected $currentBusDate;


    public function getDate()
    {
        //First lets get the business date this should be applying to
        $currentDate = date('m/d/Y');
        $currentHour = date('G');
        if ($currentHour < 3) {
            $yestDate = date('m/d/Y', strtotime($currentDate . ' - 1 day'));
            return $yestDate;
        } else {
            return $currentDate;
        }
    }

    public function getShift()
    {
        $currentHour = date('G');
        if ($currentHour > 4 && $currentHour < 12) {
            //Shift is AM or Purchases
        }
        if ($currentHour > 21) {
            //shift is PM
        }

    }
}
