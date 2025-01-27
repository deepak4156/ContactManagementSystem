@extends('layout');
@section('title', 'Dashboard');
@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Dashboard</h4>
                    </div>
                    <div class="card-body">
                        <h5>Welcome, {{ auth()->user()->name }}</h5>
                        <p>Your email is: {{ auth()->user()->email }}</p>
                        <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection