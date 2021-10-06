@extends('layouts.app')

@section('content')
    @parent

    <div class="container">
        <h1 class="h1">
            Group Details
        </h1>

        <div class="row">
            <div class="col">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th scope="row">Name</th>
                            <td>{{$group->name}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <h2 class="h2">Members</h2>

        <div class="row">
            @foreach($members as $member)
                <a href="/member/{{ $member->id }}">
                    <div class="col-2">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="p-0">
                                    {{ $member->name }}
                                </h4>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
