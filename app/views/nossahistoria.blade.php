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

            <h2>{{$pergunta->pergunta}}</h2>
            {{Form::open(array('url'=>'/nossahistoria'))}}

            <p>
                {{Form::radio('resposta','Pergunta',false,array('id'=>'resposta1'))}}
                {{form::label('resposta1',$pergunta->resposta1)}}

              <p>  {{Form::radio('resposta','Pergunta',false,array('id'=>'resposta2'))}}
                {{form::label('resposta2',$pergunta->resposta2)}}

              <p> {{Form::radio('resposta','Pergunta',false,array('id'=>'resposta3'))}}
                {{form::label('resposta3',$pergunta->resposta_certa)}}

              <p>  {{Form::radio('resposta','Pergunta',false,array('id'=>'resposta4'))}}
                {{form::label('resposta4',$pergunta->resposta3)}}

              <p> {{Form::radio('resposta','Pergunta',false,array('id'=>'resposta5'))}}
                {{form::label('resposta5',$pergunta->resposta4)}}

            <p>{{Form::submit('Enviar')}}

            {{Form::close()}}

        </div>
    </div>
@stop