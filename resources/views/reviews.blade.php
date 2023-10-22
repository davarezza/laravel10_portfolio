@extends('layouts.main')

@section('title')
  <title>{{ config('app.name') }} - Reviews</title>
  <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" />
@endsection

@section('container')
           <!-- REVIEWS -->
            <div class="container full-height px-lg-5">
    
              <div class="row pb-4" data-aos="fade-up">
                <div class="col-lg-8">
                  <h6 class="text-brand">REVIEWS</h6>
                  <h1>What Our Customers Say...</h1>
                </div>
              </div>
    
              <div class="row gy-4">
    
                <div class="col-md-4" data-aos="fade-up">
    
                  <div class="review bg-base p-4 rounded-4">
                    <div class="text-brand h5">
                      <i class="las la-star"> 5</i>
                    </div>
                    <p class="my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, provident. Fuga quam quidem assumenda accusantium fugiat eos.</p>
                    <div class="person">
                      <h5 class="mb-0">Bayu Erlangga</h5>
                      <p class="mb-0">WhatsApp</p>
                    </div>
                  </div>
    
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
    
                  <div class="review bg-base p-4 rounded-4">
                    <div class="text-brand h5">
                      <i class="las la-star"> 5</i>
                    </div>
                    <p class="my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, provident. Fuga quam quidem assumenda accusantium fugiat eos.</p>
                    <div class="person">
                      <h5 class="mb-0">Yeremia Galang</h5>
                      <p class="mb-0">Facebook</p>
                    </div>
                  </div>
    
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
    
                  <div class="review bg-base p-4 rounded-4">
                    <div class="text-brand h5">
                      <i class="las la-star"> 5</i>
                    </div>
                    <p class="my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, provident. Fuga quam quidem assumenda accusantium fugiat eos.</p>
                    <div class="person">
                      <h5 class="mb-0">Rizki Habsi</h5>
                      <p class="mb-0">Instagram</p>
                    </div>
                  </div>
    
                </div>
    
              </div>
    
            </div>
          <!-- REVIEWS END -->
        <script src="{{ asset('assets/js/aos.js') }}"></script>
@endsection