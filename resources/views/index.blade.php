@extends('layouts.master')
@section('content')
    <h1>this is home page</h1>
    <a href="{{route('logout')}}" class="btn btn-danger">Logout</a>
@endsection