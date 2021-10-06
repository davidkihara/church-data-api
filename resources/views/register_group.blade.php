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

        <form method="post" action="{{ route('group.store') }}">
            <!-- CROSS Site Request Forgery Protection -->
            @csrf

            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" name="name" id="name">
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
