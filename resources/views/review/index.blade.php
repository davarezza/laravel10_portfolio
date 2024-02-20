@extends('layouts.main')

@section('title')
  <title>{{ config('app.name') }} - Admin Reviews</title>
  <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('container')
    <!-- PROJECTS -->
    <div class="container full-height px-lg-5">
        <div class="row pb-3" data-aos="fade-up">
            <div class="col-lg-8">
                <h1>Reviews Dashboard</h1>
            </div>
        </div>

        <div class="justify-content-space-between">
            <a href="{{ route('projects.index') }}" class="btn btn-warning mb-2">Back To Admin Dashboard</a>
            <a href="{{ route('reviews') }}" class="btn btn-info mb-2 mx-2">Back To Reviews</a>
        </div>        
        <table class="table table-bg-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reviews as $key => $data)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->rating }}</td>
                        <td>{{ $data->comment }}</td>
                        <td>{{ $data->created_at }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <form action="{{ route('reviews.destroy', $data->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger mx-2">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- PROJECTS END -->
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
