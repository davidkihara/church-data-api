@extends('layouts.app')

@section('content')
    @parent

    <div class="container">
        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

        <form method="post" action="{{ route('church.store') }}">
            <!-- CROSS Site Request Forgery Protection -->
            @csrf

            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>

            <div class="mb-3">
                <label>Branch</label>
                <input type="text" class="form-control" name="branch" id="branch">
            </div>

            <div class="mb-3">
                <label>Registration Number</label>
                <input type="text" class="form-control" name="registration_number" id="registration_number">
            </div>

            <input name="user_id" value="{{Auth::user()->id}}" type="hidden">

            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
        </form>
    </div>
@endsection
