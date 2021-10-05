<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Church</title>
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

        <form method="post" action="{{ route('group.store') }}">
            <!-- CROSS Site Request Forgery Protection -->
            @csrf

            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>

            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
        </form>
    </div>
</body>
</html>
