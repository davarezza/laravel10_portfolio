@extends('layouts.main')

@section('title')
  <title>{{ config('app.name') }} - Services</title>
  <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" />
@endsection

@section('container')
          <!-- Services -->
            <div class="container full-height px-lg-5">
              <div class="row pb-4" data-aos="fade-up">
                <div class="col-lg-8">
                  <h6 class="text-brand">Services</h6>
                  <h1>Sevices That I Provide</h1>
                </div>
              </div>
    
              <div class="row gy-4">

                <div class="col-md-4" data-aos="fade-up">
                  <div class="service p-4 bg-base rounded-4 shadow-effect">
                    <div class="iconbox rounded-4">
                      <i class="las la-code"></i>
                    </div>
                    <h5 class="mt-4 mb-2">Coding</h5>
                    <p>
                      Software development using various programming languages. I have experience in delivering high-quality code to meet your needs.
                    </p>
                    <a href="#" class="link-custom">Read More</a>
                  </div>
                </div>
    
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                  <div class="service p-4 bg-base rounded-4 shadow-effect">
                    <div class="iconbox rounded-4">
                      <i class="lab la-laravel"></i>
                    </div>
                    <h5 class="mt-4 mb-2">Laravel 10</h5>
                    <p>
                      I'm an expert in Laravel, a leading PHP framework. With Laravel 10, I can create sophisticated, efficient, and reliable web applications.
                    </p>
                    <a href="#" class="link-custom">Read More</a>
                  </div>
                </div>
    
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                  <div class="service p-4 bg-base rounded-4 shadow-effect">
                    <div class="iconbox rounded-4">
                      <i class="las la-database"></i>
                    </div>
                    <h5 class="mt-4 mb-2">DBMS</h5>
                    <p>
                      Covers database design, implementation, and management. I can help you manage data, whether on a small or large scale.
                    </p>
                    <a href="#" class="link-custom">Read More</a>
                  </div>
                </div>

                <div class="col-md-4" data-aos="fade-up">
                    <div class="service p-4 bg-base rounded-4 shadow-effect">
                      <div class="iconbox rounded-4">
                        <i class="las la-chart-area"></i>
                      </div>
                      <h5 class="mt-4 mb-2">Data Analyst</h5>
                      <p>
                        I analyze your data to generate valuable insights. Using advanced analytics tools, I assist you in making data-driven decisions.
                      </p>
                      <a href="#" class="link-custom">Read More</a>
                    </div>
                  </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="service p-4 bg-base rounded-4 shadow-effect">
                      <div class="iconbox rounded-4">
                        <i class="las la-server"></i>
                      </div>
                      <h5 class="mt-4 mb-2">Server Monitor</h5>
                      <p>
                        Monitoring your servers and IT infrastructure in real-time. This enables early issue detection for optimal server performance.
                      </p>
                      <a href="#" class="link-custom">Read More</a>
                    </div>
                  </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="service p-4 bg-base rounded-4 shadow-effect">
                      <div class="iconbox rounded-4">
                        <i class="lab la-gripfire"></i>
                      </div>
                      <h5 class="mt-4 mb-2">API Management</h5>
                      <p>
                        I have experience in managing and integrating APIs (Application Programming Interfaces) to connect different applications and services.
                      </p>
                      <a href="#" class="link-custom">Read More</a>
                    </div>
                  </div>

              </div>
            </div>
          <!-- Services END -->
          <script src="{{ asset('assets/js/aos.js') }}"></script>
@endsection