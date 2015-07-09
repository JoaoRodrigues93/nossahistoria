@extends('layouts.main')
@section('title')
    Nossa História: Jogo
@stop

@section('body')

    <?php
    $pergunta = Pergunta::all()->first();
    $numero = rand(1,5);
     if($numero==1){
         $resposta1 = $pergunta->resposta1;
         $resposta2 = $pergunta->resposta2;
         $resposta3 = $pergunta->resposta3;
         $resposta4 = $pergunta->resposta4;
         $resposta5 = $pergunta->resposta_certa;

     }
            elseif($numero==2){
                $resposta2 = $pergunta->resposta1;
                $resposta3 = $pergunta->resposta2;
                $resposta4 = $pergunta->resposta3;
                $resposta5 = $pergunta->resposta4;
                $resposta1 = $pergunta->resposta_certa;
            }
            elseif($numero==3){
                $resposta3 = $pergunta->resposta1;
                $resposta4 = $pergunta->resposta2;
                $resposta5 = $pergunta->resposta3;
                $resposta1 = $pergunta->resposta4;
                $resposta2 = $pergunta->resposta_certa;
            }
            elseif($numero==4){
                $resposta4 = $pergunta->resposta1;
                $resposta5 = $pergunta->resposta2;
                $resposta1 = $pergunta->resposta3;
                $resposta2 = $pergunta->resposta4;
                $resposta3 = $pergunta->resposta_certa;
            }

            elseif($numero==5){
                $resposta5 = $pergunta->resposta1;
                $resposta1 = $pergunta->resposta2;
                $resposta2 = $pergunta->resposta3;
                $resposta3 = $pergunta->resposta4;
                $resposta4 = $pergunta->resposta_certa;
            }
    ?>

    <div class="container">
        <div class="jumbotron">

            <script>
                function alteraResposta(respostaEscolhida,idEscolhido){
                    deSeleciona();
                    document.getElementById('respostaEscolhida').setAttribute('value',respostaEscolhida);
                    document.getElementById(idEscolhido).setAttribute('class','resposta');
                }

                function deSeleciona(){
                    for (i=1;i<=5;i++)
                        document.getElementById('resp'+i).setAttribute('class','');
                }
            </script>

            <h2>{{$pergunta->pergunta}}</h2>
            {{Form::open(array('url'=>'/nossahistoria'))}}

            <p id="resp1">
                {{Form::radio('resposta','Pergunta',false,array('id'=>'resposta1',
                'onclick'=>"alteraResposta($resposta1,'resp1')"))}}
                {{form::label('resposta1',$resposta1,array('onclick'))}}
            </p>

              <p id="resp2">  {{Form::radio('resposta','Pergunta',false,array('id'=>'resposta2',
              'onclick'=>"alteraResposta($resposta2,'resp2')"))}}
                {{form::label('resposta2',$resposta2)}}
              </p>

              <p id="resp3"> {{Form::radio('resposta','Pergunta',false,array('id'=>'resposta3',
              'onclick'=>"alteraResposta($resposta3,'resp3')"))}}
                {{form::label('resposta3',$resposta3)}}
              </p>

              <p id="resp4">  {{Form::radio('resposta','Pergunta',false,array('id'=>'resposta4',
              'onclick'=>"alteraResposta($resposta4,'resp4')"))}}
                {{form::label('resposta4',$resposta4)}}
              </p>

              <p id="resp5"> {{Form::radio('resposta','Pergunta',false,array('id'=>'resposta5',
              'onclick'=>"alteraResposta($resposta5,'resp5')"))}}
                {{form::label('resposta5',$resposta5)}}
              </p>

                {{Form::hidden('respostaCerta',$pergunta->resposta_certa,array('id'=>'respostaCerta'))}}
                {{Form::hidden('respostaEscolhida','',array('id'=>'respostaEscolhida'))}}

            <p>{{Form::submit('Enviar')}}

            {{Form::close()}}

        </div>
    </div>
@stop