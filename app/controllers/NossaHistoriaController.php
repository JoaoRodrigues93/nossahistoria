<?php
/**
 * Created by PhpStorm.
 * User: João
 * Date: 18/06/2015
 * Time: 12:05
 */

class NossaHistoriaController extends BaseController {

    public function showJogo () {
        return View::make('nossahistoria');
    }

    public function doPergunta (){
        return "GITHUB FUNCIONA MESMO SEM INSTALAR A APLICAÇÃO";
        //mas rodrigues  é mesmo ket mesmo
        return "GITHUB FUNCIONA MESMO SEM INSTALAR A APLICAÇÃO shit";
    }
}