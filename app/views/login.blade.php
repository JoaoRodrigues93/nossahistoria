@extends('layouts.main')
@section('title')
    Nossa História: Login
@stop
@section('body')
<section class="container">
{{Form::open(array('url'=>'/'))}}
    <p>{{Form::label('username','Username:',array('class'=>''))}}
    <p>{{Form::text('username')}}

    <p>{{Form::label('password','Password:')}}
    <p>{{Form::password('password')}}
    <p>{{Form::submit('Entrar')}}
{{Form::close()}}
 </section>
@stop