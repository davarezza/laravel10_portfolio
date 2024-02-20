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
          <h1>Create New Review</h1>
        </div>
      </div>

      <form method="post" action="{{ route('reviews.store') }}">
        @csrf
        <div class="col-lg-8">
        <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <input type="integer" class="form-control @error('rating') is-invalid @enderror" id="rating" name="rating" value="{{ old('rating') }}" placeholder="Example: (1-5)">
            @error('rating')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
          <label for="comment" class="form-label">Comment</label>
          <input type="text" class="form-control @error('comment') is-invalid @enderror" id="comment" name="comment" value="{{ old('comment') }}" maxlength="100">
          @error('comment')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
      </div>      
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
            @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
        </div>
    </div>
      <div class="mt-1">
        <button type="submit" class="btn btn-primary">Create</button>
        <a class="btn btn-warning mx-2" href="{{ route('reviews') }}">Back</a>
      </div>
    </form>
    </div>
    <!-- PROJECTS END -->
    <script src="{{ asset('assets/js/aos.js') }}"></script>
@endsection
