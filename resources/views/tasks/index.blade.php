@extends('layouts.app')

@section('pageTitle', 'Tasks')

@section('content')
    <div class="container">
        <h1>Tasks index page</h1>
        @foreach($tasks as $task)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-10">
                            {{ $task->title }}
                        </div>
                        <div class="col-md-2 text-right">
                            <a href="{{route('tasks.edit', $task->id)}}"><i class="fa fa-edit"></i></a>
                            <a href="#"><i class="fa fa-close"></i></a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    {{ $task->description }}
                </div>
            </div>
        @endforeach
    </div>
@stop

