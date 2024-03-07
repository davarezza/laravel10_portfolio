@extends('layouts.main')

@section('title')
  <title>{{ config('app.name') }} - Projects</title>
  <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" />
@endsection

@section('container')
          <!-- PROJECTS -->
            <div class="container full-height px-lg-5">
              <div class="row pb-3" data-aos="fade-up">
                <div class="col-lg-8">
                  <h6 class="text-brand">Projects</h6>
                  <h1>My Recent Projects</h1>
                </div>
              </div>

              @if (Auth::check() && Auth::user()->role == 'admin')
              <div class="mb-2" data-aos="fade-up">
                <a href="{{ route('projects.index') }}" class="btn btn-info mb-2">Dashboard Admin</a>
                <hr>
              </div>
              @endif
    
              <div class="row gy-4">

                @foreach ($products as $key => $data)
                <div class="col-md-6">
                  <div class="card-custom rounded-4 bg-base shadow-effect">
                    <div class="card-custom-image rounded-4">
                      <img
                        class="rounded-4"
                        src="{{ asset('imageProjects/'.$data->image) }}"
                        alt="{{ $data->name }}"
                        style="height: 180px;"
                      />
                    </div>
                    <div class="card-custom-content p-4">
                      <h4>{{ $data->name }}</h4>
                      <p>
                        {{ Illuminate\Support\Str::limit($data->description, $limit = 200, $end = '...') }}
                      </p>
                      <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('product.show', $data->id) }}" class="link-custom">Read More</a>
                        <a href="#" class="link-custom"><i class="las la-eye"></i> {{ views($data)->count() }}</a>
                        <a href="{{ $data->link }}" target="_blank" class="btn btn-dark text-white rounded-4"><i class="lab la-github"></i> Github</a>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          <!-- PROJECTS END -->
      <script src="{{ asset('assets/js/aos.js') }}"></script>
@endsection