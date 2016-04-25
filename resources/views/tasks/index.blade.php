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
                            <label>delete
                                <input type="checkbox" name="delete[]" value="{{$task->id}}" form="delete">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    {{ $task->description }}
                </div>
            </div>
        @endforeach
        <div class="row">
            <div class="col-md-10">
                {!! $tasks->links() !!}
            </div>
            <div class="col-md-10">
                <div class="form-group">
                    <button class="btn btn-danger" name="submit" form="delete">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <form action="/tasks/1" method="post" id="delete">
        {{csrf_field()}}
    </form>
@stop

