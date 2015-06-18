<?php
/**
 * Created by PhpStorm.
 * User: João
 * Date: 16/06/2015
 * Time: 16:07
 */

class RegistoController extends BaseController {

    public function showRegisto(){
        return View::make('registo');
    }

    public function  registar(){
        $usuario = new Usuario;
        $usuario -> username = Input::get('username');
        $usuario -> email = Input::get('email');
        $usuario -> password = Hash::make(Input::get('password'));
        $usuario -> save();


        return Redirect::to('/');
    }

}