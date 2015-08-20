<?php

class LogInController extends BaseController
{

    public function postLogin()
    {
        $input = Input::all();
        $rules = array(
            'email' => 'required|max:200',
            'password' => 'required|max:200');
        $v = Validator::make($input, $rules);
        if ($v->passes()) {
            $password = $input['password'];
            $username = $input['email'];            
           
             return View::Make('internalLanding.mainDash');

            
        } else {
            return Redirect::to('/login')->withInput()->withErrors($v);
        }
    }

    public function logout()
    {
        //Auth::logout();
        return Redirect::to('/');
    }

} 