@extends('layouts.app')

@section('content')
    @parent

    <div class="container">
        <div class="row mb-3">
            <div class="col">
                <h1 class="h1">Churches</h1>
            </div>
        </div>

        @auth
            <div class="row mb-5">
                <div class="col">
                    <a href="/church" class="btn btn-primary">
                        Add Church
                    </a>
                </div>

                <div class="col">
                    <a href="/group" class="btn btn-primary">
                        Add Group
                    </a>
                </div>

                <div class="col">
                    <a href="/member" class="btn btn-primary">
                        Add Member
                    </a>
                </div>
            </div>
        @endauth

        <div class="row">
            @foreach($churches as $church)
                <a href="/church/{{ $church->id }}">
                    <div class="col-2">
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
@endsection
