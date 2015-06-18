<?php
/**
 * Created by PhpStorm.
 * User: João
 * Date: 18/06/2015
 * Time: 12:17
 */

class PerguntaTableSeeder extends Seeder {

    public function  run(){

        Pergunta::truncate();

        $pergunta1 = Pergunta::create(array('pergunta'=>'Quando é que Moçambique se tornou independete?',
                    'resposta1'=>'1965','resposta2'=>'1982','resposta3'=>'1974','resposta4'=>'1976','resposta_certa'=>'1975'
            ));

        $pergunta2 = Pergunta::create(array('pergunta'=>'Qual foi o primeiro presidente de Moçambique?',
            'resposta1'=>'A.E.Guebuza',
            'resposta2'=>'E.C.Mondlane',
            'resposta3'=>'J.A.Chissano',
            'resposta4'=>'F.J.Nyusi',
            'resposta_certa'=>'S.M.Machel'
        ));

    }
}
