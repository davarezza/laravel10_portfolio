@extends('layouts.main')

@section('title')
  <title>{{ config('app.name') }} - Reviews</title>
  <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('container')
           <!-- REVIEWS -->
            <div class="container full-height px-lg-5">
    
              <div class="row pb-4" data-aos="fade-up">
                <div class="col-lg-8">
                  <h6 class="text-brand">REVIEWS</h6>
                  <h1>What Our Customers Say...</h1>
                  @if (auth()->check() && auth()->user()->role == 'visitor')
                  <a href="{{ route('reviews.create') }}" class="btn btn-primary">Add New Review</a>
                  @endif
                </div>
              </div>
    
              <div class="row gy-4">
                @foreach ($reviews as $key => $data)
                <div class="col-md-4" data-aos="fade-up">
    
                  <div class="review bg-base p-4 rounded-4">
                    <div class="text-brand h5">
                      <i class="las la-star"> {{ $data->rating }}</i>
                    </div>
                    <p class="my-3"> {{ $data->comment }}</p> <hr>
                    <div class="person">
                      <h5 class="mb-2"> {{ $data->name }}</h5>
                      <p class="mb-0">{{ \Carbon\Carbon::parse($data->created_at)->formatLocalized('%d %B %Y') }}</p>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          <!-- REVIEWS END -->
        <script src="{{ asset('assets/js/aos.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            @if (Session::has('success'))
            toastr.options = {
                "positionClass": "toast-top-right",
            };
            toastr.success("{{ Session::get('success') }}");
            @endif
        </script>
@endsection
