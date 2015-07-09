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
        $respostaCerta = Input::get('respostaCerta');
        $respostaEscolhida = Input::get('respostaEscolhida');

        if($respostaEscolhida==$respostaCerta)
        return "Parabens: Acertaste a pergunta.";
        else
            return "Infelizmente a resposta está errada. A resposta certa é: $respostaCerta";

    }
}