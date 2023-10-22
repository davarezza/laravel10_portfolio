@extends('layouts.main')

@section('title')
  <title>{{ config('app.name') }} - Contact</title>
  <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" />
@endsection

@section('container')
           <!-- CONTACT -->
            <div class="container full-height px-lg-5">
    
              <div class="row justify-content-center text-center" data-aos="fade-up">
                <div class="col-lg-8 pb-4" data-aos="fade-up">
                  <h6 class="text-brand">CONTACT</h6>
                  <h1>Interested in working together? Let's talk</h1>
                </div>
    
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="300">
                  <form action="#" class="row g-lg-3 gy-3">
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" placeholder="Enter Your Name">
                    </div>
                    <div class="form-group col-md-6">
                      <input type="email" class="form-control" placeholder="Enter Your Email">
                    </div>
                    <div class="form-group col-12">
                      <input type="text" class="form-control" placeholder="Enter Subject">
                    </div>
                    <div class="form-group col-12">
                      <textarea name="" rows="4" class="form-control" placeholder="Enter Your Message"></textarea>
                    </div>
                    <div class="form-group col-12 d-grid">
                      <button type="submit" class="btn btn-brand">Send</button>
                    </div>
                  </form>
                </div>
    
              </div>
    
            </div>
          <!-- CONTACT END -->
        <script src="{{ asset('assets/js/aos.js') }}"></script>
@endsection