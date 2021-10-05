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
    @yield('navigation')

    <div class="container">
        <div class="row">
            @foreach($churches as $church)
            <a href="/church/{{ $church->id }}">
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="p-0">
                                {{ $church->name }}
                            </h4>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</body>
</html>
