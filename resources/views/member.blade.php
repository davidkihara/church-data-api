@extends('layouts.app')

@section('content')
    @parent

    <div class="container">
        <h1 class="h1">Member Details</h1>

        <div class="row">
            <div class="col">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th scope="row">Email</th>
                            <td>{{$member->email}}</td>
                        </tr>

                        <tr>
                            <th scope="row">Phone Number</th>
                            <td>{{$member->phone_number}}</td>
                        </tr>

                        <tr>
                            <th scope="row">Social Security Number</th>
                            <td>{{$member->social_security_number}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
