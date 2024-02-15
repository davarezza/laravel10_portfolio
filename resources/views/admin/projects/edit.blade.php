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

      <form method="post" action="{{ route('projects.update', ['project' => $product]) }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="col-lg-8">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $product->name }}">
            @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5">{{ $product->description }}</textarea>
          @error('description')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
      </div>      
        <div class="mb-3">
            <label for="link" class="form-label">Github Link</label>
            <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" name="link" value="{{ $product->link }}">
            @error('link')
            <div class="invalid-feedback">
                {{ $product->link }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Project Image</label>
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" aria-describedby="fotoHelp" value="{{ $product->image }}">
            <div class="mb-3">
                <label for="gambar" class="form-label"></label>
                <img src="{{ asset('imageProjects/' . $product->image) }}" alt="Foto Sekarang" width="100">
            </div>
            <div id="fotoHelp" class="form-text text-white">4:3 Image is recommended</div>
            @error('image')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
        </div>
    </div>
      <div class="mt-1">
        <button type="submit" class="btn btn-primary">Update</button>
        <a class="btn btn-warning mx-2" href="{{ route('projects.index') }}">Back</a>
      </div>
    </form>
    </div>
    <!-- PROJECTS END -->
    <script src="{{ asset('assets/js/aos.js') }}"></script>
@endsection
