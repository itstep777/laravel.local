@extends('layouts.app')

@section('pageTitle', 'Edit task')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit task</div>
                    <div class="panel-body">
                        <div class="col-md-6">
                            <form action="{{route('tasks.update', $task->id)}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" value="{{$task->title}}">
                                    <div>{{ $errors->first('title')}}</div>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control">{{$task->description}}</textarea>
                                    <div>{{ $errors->first('description') }}</div>
                                </div>
                                <div class="form-group">
                                    {!! Helpers::select($priority, $task->status_priority_id, "Выберите важность", ['class' => 'form-control', 'name' => 'status_priority_id']) !!}
                                    <div>{{ $errors->first('status_priority_id') }}</div>
                                </div>
                                <div class="form-group">
                                    <label>Date end</label>
                                    <input type="text" name="date_end" class="form-control" value="{{$task->date_end}}">
                                    <div>{{ $errors->first('date_end') }}</div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" name="submit">Edit task</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
