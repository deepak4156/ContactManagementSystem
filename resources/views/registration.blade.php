@extends('layout')
@section('title', 'Registration')
@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif

        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
        @endif

        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('error') }}
            </div>
        @endif
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Login</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('register.post') }}" method="POST" accept="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="password" class="form-label">Name:</label>
                                <input type="name" class="form-control" id="password" placeholder="Enter your Name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address:</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="password" required
                                    placeholder="Enter your password" name="password">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Retype Password</label>
                                <input type="password" class="form-control" id="password" required
                                    placeholder="Retype your password" name="password_confirmation">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-primary">register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
