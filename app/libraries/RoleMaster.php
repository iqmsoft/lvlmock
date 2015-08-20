<?php

class RoleMaster
{
    public function hashSocial($social)
    {
        $newSocial = (((((($social + 9) *3) +15) *6) +30) *2);
        return $newSocial;
    }
    public function unHashSocial($social)
    {
        $newSocial = (((((($social /2) -30) /6) -15) /3) -9);
        return $newSocial;
    }
}
