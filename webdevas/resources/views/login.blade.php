@extends('base')
@section('title', 'Login')
@section('content')
@if(session('success'))
<div class="alert alert-success" id="success">
    {{ Session::get('success') }}
</div>
@endif

@if(session('fail'))
<div class="alert alert-danger" id="fail">
    {{ Session::get('fail') }}
</div>
@endif

<form action="{{ route('auth.login') }}" method="POST">
    @csrf
    <div class="modal-body">
        <div class="mb-3">
            <label for="stdEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">

        </div>

        <div class="mb-3">
            <label for="stdPwd" class="form-label">Password</label>
            <input type="text" class="form-control" id="password" name="password" placeholder="Enter Password">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Login</button>
</form>

<a href="{{ route('auth.register') }}" class="btn btn-secondary">Register</a>
@endsection