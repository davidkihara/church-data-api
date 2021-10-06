@extends('layouts.app')

@section('content')
    @parent

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h1">Church Details</h1>

                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th scope="row">Name</th>
                            <td>{{$church->name}}</td>
                        </tr>

                        <tr>
                            <th scope="row">Branch</th>
                            <td>{{$church->branch}}</td>
                        </tr>

                        <tr>
                            <th scope="row">Registration Number</th>
                            <td>{{$church->registration_number}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <h2 class="h2">Groups</h2>

        <div class="row mb-3">
            @foreach($groups as $group)
                <a href="/group/{{ $group->id }}">
                    <div class="col-2">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="p-0">
                                    {{ $group->name }}
                                </h4>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
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
