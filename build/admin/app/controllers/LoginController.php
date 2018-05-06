<?php

class LoginController extends BaseController
{
    public function showLogin()
    {
        return View::make('login');
    }

    public function login()
    {
        $user = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );
        if (Auth::attempt($user)) {
            return Redirect::to('/');
        }
        return Redirect::to('/login')->with('login_failed', true);
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('/');
    }
}