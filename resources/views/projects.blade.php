@extends('layouts.main')

@section('title')
  <title>{{ config('app.name') }} - Projects</title>
  <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" />
@endsection

@section('container')
          <!-- PROJECTS -->
            <div class="container full-height px-lg-5">
              <div class="row pb-4" data-aos="fade-up">
                <div class="col-lg-8">
                  <h6 class="text-brand">Projects</h6>
                  <h1>My Recent Projects</h1>
                </div>
              </div>
    
              <div class="row gy-4">
                <div class="col-md-6" data-aos="fade-up">
                  <div class="card-custom rounded-4 bg-base shadow-effect">
                    <div class="card-custom-image rounded-4">
                      <img
                        class="rounded-4"
                        src="{{ asset('assets/images/project2.png') }}"
                        alt="Academic website"
                      />
                    </div>
                    <div class="card-custom-content p-4">
                      <h4>Academic website</h4>
                      <p>
                        Created using Laravel, this application features Authentication and CRUD operations. It utilizes Laravel Sanctum for secure authentication and incorporates CRUD functionality through an API.
                      </p>
                      <a href="#" class="link-custom">Read More</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                  <div class="card-custom rounded-4 bg-base shadow-effect">
                    <div class="card-custom-image rounded-4">
                      <img
                        class="rounded-4"
                        src="{{ asset('assets/images/project1.png') }}"
                        alt="Laravel Website"
                      />
                    </div>
                    <div class="card-custom-content p-4">
                      <h4>Top-Up Website</h4>
                      <p>
                        Developed using a combination of HTML, CSS, and JavaScript, this application features a diamond purchasing system that allows users to check the prices of diamonds.
                      </p>
                      <a href="#" class="link-custom">Read More</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6" data-aos="fade-up">
                  <div class="card-custom rounded-4 bg-base shadow-effect">
                    <div class="card-custom-image rounded-4">
                      <img
                        class="rounded-4"
                        src="{{ asset('assets/images/project3.png') }}"
                        alt="Laravel Website"
                      />
                    </div>
                    <div class="card-custom-content p-4">
                      <h4>Shape Calculator</h4>
                      <p>                 
                        Shape Calculator website, a versatile online tool designed to calculate various geometric shapes. This user-friendly platform allows users to effortlessly compute the parameters of different three-dimensional figures.
                      </p>
                      <a href="#" class="link-custom">Read More</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                  <div class="card-custom rounded-4 bg-base shadow-effect">
                    <div class="card-custom-image rounded-4">
                      <img
                        class="rounded-4"
                        src="{{ asset('assets/images/project4.png') }}"
                        alt="Laravel Website"
                      />
                    </div>
                    <div class="card-custom-content p-4">
                      <h4>Laravel E-commerce</h4>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Reiciendis, harum. Dolores corporis vitae ipsum
                        perspiciatis.
                      </p>
                      <a href="#" class="link-custom">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- PROJECTS END -->
      <script src="{{ asset('assets/js/aos.js') }}"></script>
@endsection