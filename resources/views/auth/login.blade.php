@extends('layputs.app')

@section('content')
    <div class='text-center'>
        <h1>Log in</h1>
    </div>
    
    <div class='row'>
        <div class='col-md-6 col-md-offset-3'>
            
            {!! Form::open(['route' => 'login.post']) !!}