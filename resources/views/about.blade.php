@extends('layouts.main')

@section('title')
  <title>{{ config('app.name') }} - About</title>
  <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}" />
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

            <div class="jumbotron">
              <hr> <h1 class="text-center" data-aos="fade-up">My Profile</h1> <hr>
            </div>
            <div class="row gy-4" data-aos="fade-up" data-aos-delay="300">
              <div class="col-lg-4">
                <img src="./assets/images/davaprof.jpeg" alt="" class="img-thumbnail">
              </div>
              <div class="col-lg-8 text-profile">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis tempora ipsam odio. Provident dolor esse ex nam voluptates amet libero consequuntur, alias repudiandae dolores fugit. Sapiente maxime labore ullam quibusdam.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium tempora porro necessitatibus omnis possimus a.</p>
                <a href="{{ route('projects') }}" class="btn btn-warning me-3">Check My Projects</a>
                <a href="#skill" class="link-custom">Scroll Down!</a>
              </div>
            </div>

            <section id="skill">
              <h2 class="mt-3">Tech Stack</h2>
            <div class="skill mb-3" data-aos="fade-up" data-aos-delay="300">
              <li><h3>HTML</h3>
                <span class="bar"><span class="html"></span></span>
              </li>
              <li><h3>MySQL</h3>
                <span class="bar"><span class="mysql"></span></span>
              </li>
              <li><h3>JavaScript</h3>
                <span class="bar"><span class="js"></span></span>
              </li>
              <li><h3>Laravel</h3>
                <span class="bar"><span class="laravel"></span></span>
              </li>
            </div>
          </section>
  
            <div class="row gy-5">
              <div class="col-lg-6">
                <h3 class="mb-4" data-aos="fade-up" data-aos-delay="300">Education</h3 class="mb-4">
                <div class="row gy-4">
  
                  <div class="col-12" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-base p-4 rounded-4 shadow-effect">
                      <h4>Master of Software Engineering</h4>
                      <p class="text-brand mb-2">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                      <p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque tempora ab fugiat rerum praesentium.</p>
                    </div>
                  </div>
  
                  <div class="col-12" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-base p-4 rounded-4 shadow-effect">
                      <h4>Master of Software Engineering</h4>
                      <p class="text-brand mb-2">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                      <p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque tempora ab fugiat rerum praesentium.</p>
                    </div>
                  </div>
  
                  <div class="col-12" data-aos="fade-up" data-aos-delay="300">
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
    
                    <div class="col-12" data-aos="fade-up" data-aos-delay="300">
                      <div class="bg-base p-4 rounded-4 shadow-effect">
                        <h4>Master of Software Engineering</h4>
                        <p class="text-brand mb-2">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        <p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque tempora ab fugiat rerum praesentium.</p>
                      </div>
                    </div>
    
                    <div class="col-12" data-aos="fade-up" data-aos-delay="300">
                      <div class="bg-base p-4 rounded-4 shadow-effect">
                        <h4>Master of Software Engineering</h4>
                        <p class="text-brand mb-2">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        <p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque tempora ab fugiat rerum praesentium.</p>
                      </div>
                    </div>
                    
                    <div class="col-12" data-aos="fade-up" data-aos-delay="300">
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