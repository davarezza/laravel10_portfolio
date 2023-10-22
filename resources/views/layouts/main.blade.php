<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   @yield('title')
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" /> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="icon" type="image/x-icon" class="rounded-circle" href="{{ asset('favicon.ico') }}" />
  </head>
  <body>

    @include('layouts.navbar')

    <div id="content-wrapper">
      @yield('container')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  {{-- <script src="{{ asset('assets/js/aos.js') }}"></script> --}}
  <script src="{{ asset('assets/js/main.js') }}"></script>
  </body>
</html>