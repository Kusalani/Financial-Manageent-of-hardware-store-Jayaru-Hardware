@extends('task2s.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Details</h2>
            </div>
            <br>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('task2s.index') }}"> Back</a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('task2s.update',$task2->id) }}" method="POST">
        @csrf
        @method('PUT')

<br>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $task2->name }}" class="form-control" placeholder="Enter Name">
                </div>
            </div>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <br>
                <div class="form-group">
                    <strong>Amount:</strong>
                    <textarea class="form-control" style="height:150px" name="amount" placeholder="Enter Amount">{{ $task2->amount }}</textarea>
                </div>
            </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Date:</strong>
                        <input type="text" name="date" value="{{ $task2->date }}" class="form-control" placeholder="Enter Date">
                    </div>
                </div>
                <br>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>


    </form>


@endsection
