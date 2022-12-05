@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-8 m-auto">
            <div class="card p-3">
                <div class="card-header text-center">
                    <h3>Register</h3>
                    @if (Session::has('success'))
                    <div class="alert alert-success text-center" role="alert">
                        {{Session::get('success')}}
                    </div>
                    @endif
                </div>
                <form action="{{route('register-user')}}" method="POST">
                    @csrf
                    <div class="mb-3">  
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                    </div>
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
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
                        <button class="btn btn-primary">Register</button>
                    </div>
                </form>
                <div class="card-footer text-center">
                    <p>Already have an account ? <a href="{{route('login')}}">Login</a></p>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
