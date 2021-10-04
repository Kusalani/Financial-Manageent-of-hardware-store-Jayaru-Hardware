@extends('task1s.layout')


@section('content')
    <br>
    <div class="row ">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Loss Or Profit Statement</h2>
                <br>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('task1s.create') }}"> Add today's details</a>
                <br>

            </div>
            <br>


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
            <th>ID</th>
            <th>Loss Or Profit</th>
            <th>Amount</th>
            <th> Date </th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($task1s as $task1)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $task1->detail }}</td>
                <td>{{ $task1->amount }}</td>
                <td>{{ $task1->created_at }}</td>

                <td>
                    <form action="{{ route('task1s.destroy',$task1->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('task1s.show',$task1->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('task1s.edit',$task1->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


@endsection
