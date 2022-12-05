@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-8 m-auto">
            <div class="card p-3">
                <div class="card-header text-center">
                    <h3>Login</h3>
                    @if (Session::has('fail'))
                    <div class="alert alert-danger text-center" role="alert">
                        {{Session::get('fail')}}
                    </div>
                    @endif
                </div>
                <form action="{{route('login-user')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
                    </div>
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                    </div>
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="mb-3 d-grid">
                        <button class="btn btn-primary">Login</button>
                    </div>
                </form>
                <div class="card-footer text-center">
                    <p>Don't have an account ? <a href="{{route('register')}}">Register</a></p>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
