@extends('layouts.main')

@section('title')
  <title>{{ config('app.name') }} - Login</title>
  <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" />
@endsection

@section('container')
    <!-- PROJECTS -->
    <div class="container full-height px-lg-5">
        <div class="row pb-4" data-aos="fade-up">
            <div class="col-lg-8">
              <h6 class="text-brand">Log In</h6>
              <h1>For More Complete Access</h1>
            </div>
          </div>

    <div class="shadow p-3 mb-5 bg-dark text-white rounded">
        <form action="/login" method="post">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="email">
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
                @error('password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <input type="submit" value="Login" class="btn btn-info">
                <a href="#" class="mx-2">Register</a>
            </div>
        </form>
    </div>
    </div>
    <!-- PROJECTS END -->
    <script src="{{ asset('assets/js/aos.js') }}"></script>
@endsection
