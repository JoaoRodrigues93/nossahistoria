<?php
/**
 * Created by PhpStorm.
 * User: João
 * Date: 16/06/2015
 * Time: 16:52
 */

class LoginController extends  BaseController {

    public function entrar (){
        $credentials = Input::only('username','password');
        if(Auth::attempt($credentials)){
            return Redirect::intended('/registo');
        }

        return Redirect::to('/');
    }
}