@extends('layouts.app')

@section('pageTitle', 'Tasks')

@section('content')
    <div class="container">
        <h1>Tasks index page</h1>
        @foreach($tasks as $task)
            <div class="panel panel-default">
                <div class="panel-heading">{{ $task->title }}</div>
                <div class="panel-body">
                    {{ $task->description }}
                </div>
            </div>
        @endforeach
    </div>
@stop

