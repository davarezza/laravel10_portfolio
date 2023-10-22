@extends('layouts.main')

@section('title')
  <title>{{ config('app.name') }} - Home</title>
  <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" />
@endsection

@section('container')
      <!-- Home -->
        <div class="container full-height px-lg-5">
          <div class="row">
            <div class="col-lg-10">
              <h1 class="display-4 fw-bold" data-aos="fade-up">
                I'M A <span class="text-brand">BACKEND DEVELOPER</span> FROM
                PASURUAN
              </h1>
              <p class="lead mt-2 mb-4" data-aos="fade-up" data-aos-delay="300">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam
                non ex quod iure sunt? Inventore.
              </p>
              <div data-aos="fade-up" data-aos-delay="600">
                {{-- <a href="#work" class="btn btn-brand me-3 btn-home">Explore My Work</a> --}}
                <a href="https://github.com/davarezza" target="_blank" class="btn btn-warning me-3 btn-home"><i class="lab la-github"></i> Visit My Github</a>
                <a href="#" class="link-custom">Call: (62) 8383583922</a>
              </div>
            </div>
          </div>
        </div>
      <!-- Home End -->
      <script src="{{ asset('assets/js/aos.js') }}"></script>
@endsection