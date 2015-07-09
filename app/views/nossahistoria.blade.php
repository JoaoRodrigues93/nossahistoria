@extends('layouts.main')
@section('title')
    Nossa História: Jogo
@stop

@section('body')

    <?php
    $pergunta = Pergunta::all()->first();
    ?>

    <div class="container">
        <div class="jumbotron">

            <script>
                function alteraResposta(respostaEscolhida,idEscolhido){
                    document.getElementById('respostaEscolhida').setAttribute('value',respostaEscolhida);
                }
            </script>

            <h2>{{$pergunta->pergunta}}</h2>
            {{Form::open(array('url'=>'/nossahistoria'))}}

            <p>
                {{Form::radio('resposta','Pergunta',false,array('id'=>'resposta1',
                'onclick'=>"alteraResposta($pergunta->resposta1,resposta1)",'class'=>'resposta'))}}
                {{form::label('resposta1',$pergunta->resposta1,array('class'=>'resposta'))}}

              <p>  {{Form::radio('resposta','Pergunta',false,array('id'=>'resposta2',
              'onclick'=>"alteraResposta($pergunta->resposta2,resposta2)"))}}
                {{form::label('resposta2',$pergunta->resposta2)}}

              <p> {{Form::radio('resposta','Pergunta',false,array('id'=>'resposta3',
              'onclick'=>"alteraResposta($pergunta->resposta_certa,resposta3)"))}}
                {{form::label('resposta3',$pergunta->resposta_certa)}}

              <p>  {{Form::radio('resposta','Pergunta',false,array('id'=>'resposta4',
              'onclick'=>"alteraResposta($pergunta->resposta3,resposta4)"))}}
                {{form::label('resposta4',$pergunta->resposta3)}}

              <p> {{Form::radio('resposta','Pergunta',false,array('id'=>'resposta5',
              'onclick'=>"alteraResposta($pergunta->resposta4,resposta5)"))}}
                {{form::label('resposta5',$pergunta->resposta4)}}

                {{Form::hidden('respostaCerta',$pergunta->resposta_certa,array('id'=>'respostaCerta'))}}
                {{Form::hidden('respostaEscolhida','',array('id'=>'respostaEscolhida'))}}

            <p>{{Form::submit('Enviar')}}

            {{Form::close()}}

        </div>
    </div>
@stop