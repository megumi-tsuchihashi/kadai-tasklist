@extends('layouts.app')

@section('content')
    @if (Auth::check())
       <div class="center jumbotron">
            <div class="text-center">
                <h1>ごめんなさい:(</h1>
                {!! link_to_route('tasks.index', 'Check your tasks!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Tasklist</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection