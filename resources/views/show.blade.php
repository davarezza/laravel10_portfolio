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
                <h1>{{ $product->name }}</h1>
            </div>
        </div>

        <div class="row gy-4">
            <div class="col-md-12" data-aos="fade-up">
                <div class="project-container bg-base shadow-effect rounded-4">
                    <img
                        class="rounded-4 w-100"
                        src="{{ asset('ImageProjects/'.$product->image) }}"
                        alt="{{ $product->name }}"
                    />
                    <div class="project-description p-4">
                        <h4 class="mb-3">Description</h4>
                        <p class="mb-4" style="font-size: 18px;">{{ $product->description }}</p>
                        <div class="align-items-center">
                            <a href="{{ $product->link }}" target="_blank" class="btn btn-dark text-white rounded-4">
                                <i class="lab la-github"></i> Github
                            </a>
                            <a href="{{ route('projects') }}" class="btn btn-primary text-white rounded-4 mx-2">
                                Back
                            </a>
                            <a href="#" class="link-custom"><i class="las la-eye"></i> {{ views($product)->count() }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PROJECTS END -->
    <script src="{{ asset('assets/js/aos.js') }}"></script>
@endsection
