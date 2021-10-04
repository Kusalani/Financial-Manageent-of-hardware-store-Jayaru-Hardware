<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Search with pagination</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" rel="stylesheet">
</head>
<body>

<div class="container">
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









</div>










</body>
</html>




