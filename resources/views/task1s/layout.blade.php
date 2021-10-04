<!DOCTYPE html>
<html>
<head>
    <title>Financial Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" rel="stylesheet">
</head>
<body>


{{--<div class="container">--}}
{{--    <div class="row">--}}

{{--        <div class="col-4">--}}
{{--            <div class="container">--}}
{{--                @include('task1s.sidebar')--}}
{{--            </div>--}}

{{--        </div>--}}
{{--        <div class="col-6">--}}
{{--            <div class="container">--}}
{{--                @include('task1s.header')--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="container">
    @yield('content')
</div>


</body>
</html>
