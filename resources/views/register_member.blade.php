@extends('layouts.app')

@section('content')
    @parent

    <div class="container mt-5">
        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

        <form method="post" action="{{ route('member.store') }}">
            <!-- CROSS Site Request Forgery Protection -->
            @csrf

            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>

            <div class="mb-3">
                <label>Phone Number</label>
                <input type="tel" class="form-control" name="phone_number" id="phone_number">
            </div>

            <div class="mb-3">
                <label>Social Security Number</label>
                <input type="text" class="form-control" name="social_security_number" id="social_security_number">
            </div>

            <div class="mb-3">
                <label>Church</label>
                <select class="form-select" name="church_id">
                    @foreach($churches as $church)
                        <option value="{{ $church->id }}">
                            {{ $church->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
        </form>
    </div>
@endsection
