@extends('task1s.layout')


@section('content')

    <div class="row">
        <div class="col-md-6" style="margin-top: 40px">
            <h4>Search Date     </h4>
            <form action="{{route('web.search')}}" method="get">
                <div class="form-group">
                    <label for="">Search Date            </label>
                    <input type="text" class="form-control0" name="query" placeholder="Search Date">

                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
                <br>
                @if(isset($task1s))
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Detail</th>
                            <th>Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($task1s)>0)
                            @foreach($task1s as $task1)
                                <tr>
                                    <td>{{$task1->id}}}</td>
                                    <td>{{$task1->detail}}}</td>
                                    <td>{{$task1s->amount}}}</td>
                                </tr>
                            @endforeach

                        @else
                            <tr><td>No result found</td></tr>
                        @endif
                        </tbody>


                    </table>
                @endif
            </form>

        </div>
    </div>












@endsection
