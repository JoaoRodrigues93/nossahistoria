@extends('layouts.main')
@section('title')
    Nossa História: Registo
@stop
@section('body')
    <section class="container">
        <h1>Registe-se para Jogar</h1>
        {{Form::open(array('url'=>'registo'))}}
        <p>{{Form::label('username','Username:',array('class'=>''))}}
        <p>{{Form::text('username')}}

        <p>{{Form::label('email','Email:')}}
        <p>{{Form::email('email')}}

        <p>{{Form::label('password','Password:')}}
        <p>{{Form::password('password')}}
        <p>{{Form::submit('Entrar')}}
            {{Form::close()}}
    </section>
@stop