@extends('layouts.main')


<header class="masthead">
    <div class="container col-md-4">
        <div class="row align-items-center justify-content-center text-center">

            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center text-white font-weight-bold">Please Login</h1>
            <form action="/login" method="post">
                @csrf
              <div class="form-floating">
                <input type="username" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" autofocus required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">
                    {{ $massage }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
            {{-- <small class="d-block text-center text-white-75 mt-3">
                Not Registered ? <a href="http:/register" class="btn btn-primary">Register now!</a>
            </small> --}}
          </main>

        </div>
    </div>
</header>

