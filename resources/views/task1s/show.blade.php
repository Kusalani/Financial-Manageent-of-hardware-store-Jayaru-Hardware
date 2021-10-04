@extends('task1s.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Report</h2>
                <br>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('task1s.index') }}"> Back</a>
                <br>
            </div>
        </div>
    </div>

<br>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>>Detail:</strong>
                {{ $task1->detail }}
            </div>
        </div>
        <br>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>>Amount:</strong>
                {{ $task1->amount }}
            </div>
        </div>
    <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>>Created Date:</strong>
                {{ $task1->created_at }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>>Edited Date:</strong>
                {{ $task1->updated_at }}
            </div>
        </div>
    </div>
@endsection
