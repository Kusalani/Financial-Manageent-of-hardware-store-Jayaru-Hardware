@extends('task2s.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Report</h2>
                <br>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('task2s.index') }}"> Back</a>
                <br>
            </div>
        </div>
    </div>

    <br>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>>Name:</strong>
                {{ $task2->name }}
            </div>
        </div>
        <br>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>>Amount:</strong>
                {{ $task2->amount }}
            </div>
        </div>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>>settle Before:</strong>
            {{ $task2->date }}
        </div>
    </div>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>>Created Date:</strong>
                {{ $task2->created_at }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>>Edited Date:</strong>
                {{ $task2->updated_at }}
            </div>
        </div>
    </div>
@endsection

