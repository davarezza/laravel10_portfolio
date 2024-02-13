@extends('layouts.main')

@section('title')
  <title>{{ config('app.name') }} - Login</title>
  <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('container')
    <style>
        #toast-container {
        top: 120px;
        right: 50px;
        opacity: 1;
    }
    </style>

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
                <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}">
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        // @if (Session::has('success'))
        // toastr.options = {
        //     "positionClass": "toast-top-right",
        // };
        // toastr.success("{{ Session::get('success') }}");
        // @endif

        @if (Session::has('loginError'))
        toastr.options = {
            "positionClass": "toast-top-right",
        };
        toastr.error("{{ Session::get('loginError') }}");
        @endif
    </script>

@endsection
