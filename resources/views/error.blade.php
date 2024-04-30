@extends('layouts.main')

@section('title')
  <title>{{ config('app.name') }} - Error</title>
  <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" />
@endsection

@section('container')
          <!-- PROJECTS -->
            <div class="container full-height px-lg-5">
              <div class="row pb-3" data-aos="fade-up">
                <div class="col-lg-8">
                  <h6 class="text-brand">Error 401</h6>
                  <h1>Page Not Found</h1>
                  <h1>Try Another Route</h1>
                </div>
              </div>
            </div>
          <!-- PROJECTS END -->
      <script src="{{ asset('assets/js/aos.js') }}"></script>
@endsection