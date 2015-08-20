<?php

class LandingController extends BaseController
{

    public function getIndex()
    {
        
        return View::Make('internalLanding.mainDash');
        
    }

   
}
