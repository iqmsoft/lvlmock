<?php

class LogHelper extends BaseController
{
    public function insertEntry($description)
    {
        $newEntry = new LogEvent();
        $newEntry->entered_by = Session::get('emp_id');
        $newEntry->description = $description;
        $newEntry->save();
        return;

    }
    public function unHashSocial($social)
    {
        $newSocial = (((((($social /2) -30) /6) -15) /3) -9);
        return $newSocial;
    }
}
