@extends('layout.main')

@section('content')

<div class="row justify-content-start">
    <div class="col-sm-6">
        @if (session()->has('Success'))
        <div class="alert alert-success alert-dismissible fade show " role="alert">
            {{ session('Success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
</div>



<h2 class="form-title mb-4 text-decoration-underline" style="padding-left: 1%">Log In</h2>

<div class="container">
    <form action="/login" method="post">
        @csrf
        <div class="row g-3">
            <div class="col">
                <div>
                    <label for="email">Email Address:</label>
                    <input type="email" class="form-control mb-4 @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div>
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
            </div>
            <div class="col">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button class="w-50 btn btn-lg btn-primary btn reg mt-5" type="submit">Submit</button>
            </div>
            <div class="col">
                <a href="/register">Don't have an account? Click here to Sign Up</a>
            </div>
        </div>
    </form>
</div>

@endsection
