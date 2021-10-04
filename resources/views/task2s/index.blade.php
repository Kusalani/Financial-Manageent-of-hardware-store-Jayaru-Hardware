@extends('task2s.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Creditors
                <br>
                </h2>
            </div>
            <br>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('task2s.create') }}">Add Creditor</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

<br>
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Amount</th>
            <th>Settle Before</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($task2s as $task2)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $task2->name }}</td>
                <td>{{ $task2->amount }}</td>
                <td>{{$task2 ->date}}</td>
                <td>
                    <form action="{{ route('task2s.destroy',$task2->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('task2s.show',$task2->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('task2s.edit',$task2->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


@endsection
