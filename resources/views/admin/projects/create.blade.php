@extends('layouts.main')

@section('title')
  <title>{{ config('app.name') }} - Create</title>
  <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" />
@endsection

@section('container')
    <!-- PROJECTS -->
    <div class="container full-height px-lg-5">
      <div class="row pb-3" data-aos="fade-up">
        <div class="col-lg-8">
          <h1>Create Data</h1>
        </div>
      </div>

      <form method="post" action="{{ route('projects.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="col-lg-8">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
            @error('name')
            <div class="invalid-feedback">
                Name is Required.
            </div>
            @enderror
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5">{{ old('description') }}</textarea>
          @error('description')
          <div class="invalid-feedback">
              Description is required.
          </div>
          @enderror
      </div>      
        <div class="mb-3">
            <label for="link" class="form-label">Github Link</label>
            <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" name="link" value="{{ old('link') }}">
            @error('link')
            <div class="invalid-feedback">
                Github Link is Required.
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Foto Siswa</label>
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" aria-describedby="fotoHelp">
            <div id="fotoHelp" class="form-text text-white">4:3 Image is recommended</div>
            @error('image')
            <div class="invalid-feedback">
                Image is Required.
            </div>
            @enderror
        </div>
    </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
    </div>
    <!-- PROJECTS END -->
    <script src="{{ asset('assets/js/aos.js') }}"></script>
@endsection
