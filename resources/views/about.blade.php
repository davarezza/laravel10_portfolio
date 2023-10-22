@extends('layouts.main')

@section('title')
  <title>{{ config('app.name') }} - About</title>
  <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" />
@endsection

@section('container')
        <!-- ABOUT -->
          <div class="container full-height px-lg-5">
  
            <div class="row pb-4" data-aos="fade-up">
              <div class="col-lg-8">
                <h6 class="text-brand">ABOUT</h6>
                <h1>All Things of Me</h1>
              </div>
            </div>
  
            <div class="row gy-5">
              <div class="col-lg-6">
                <h3 class="mb-4" data-aos="fade-up" data-aos-delay="300">Education</h3 class="mb-4">
                <div class="row gy-4">
  
                  <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                    <div class="bg-base p-4 rounded-4 shadow-effect">
                      <h4>Master of Software Engineering</h4>
                      <p class="text-brand mb-2">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                      <p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque tempora ab fugiat rerum praesentium.</p>
                    </div>
                  </div>
  
                  <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                    <div class="bg-base p-4 rounded-4 shadow-effect">
                      <h4>Master of Software Engineering</h4>
                      <p class="text-brand mb-2">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                      <p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque tempora ab fugiat rerum praesentium.</p>
                    </div>
                  </div>
  
                  <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                    <div class="bg-base p-4 rounded-4 shadow-effect">
                      <h4>Master of Software Engineering</h4>
                      <p class="text-brand mb-2">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                      <p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque tempora ab fugiat rerum praesentium.</p>
                    </div>
                  </div>
  
                </div>
  
              </div>
  
              <div class="col-lg-6">
  
                <h3 class="mb-4" data-aos="fade-up" data-aos-delay="300">Experience</h3 class="mb-4">
                  <div class="row gy-4">
    
                    <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                      <div class="bg-base p-4 rounded-4 shadow-effect">
                        <h4>Master of Software Engineering</h4>
                        <p class="text-brand mb-2">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        <p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque tempora ab fugiat rerum praesentium.</p>
                      </div>
                    </div>
    
                    <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                      <div class="bg-base p-4 rounded-4 shadow-effect">
                        <h4>Master of Software Engineering</h4>
                        <p class="text-brand mb-2">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        <p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque tempora ab fugiat rerum praesentium.</p>
                      </div>
                    </div>
                    
                    <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                      <div class="bg-base p-4 rounded-4 shadow-effect">
                        <h4>Master of Software Engineering</h4>
                        <p class="text-brand mb-2">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        <p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque tempora ab fugiat rerum praesentium.</p>
                      </div>
                    </div>
    
                  </div>
  
              </div>
  
            </div>
  
          </div>
        <!-- ABOUT END -->
        <script src="{{ asset('assets/js/aos.js') }}"></script>
@endsection