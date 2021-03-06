@extends('layouts.master')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Add New Task
            <div class="panel-nav pull-right" style="margin-top: -7px;">
                <a href="{!! route('tasks.index') !!}" class="btn btn-default">Back</a>
            </div>
        </div>
        <div class="panel-body">
            @include('tasks.form')
        </div>
    </div>

@stop