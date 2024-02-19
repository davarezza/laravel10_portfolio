@extends('layouts.main')

@section('title')
  <title>{{ config('app.name') }} - Activity Log</title>
  <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('container')
           <!-- ACTIVITY -->
            <div class="container full-height px-lg-5">

                <div class="row pb-3" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h1>Activity Log</h1> <hr>
                    </div>
                </div>
    
                <form action="{{ route('activity.delete') }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger mb-3">Delete All Activity</button>
                </form>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">User</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($activities as $activity)
                        <tr>
                            <td>{{ $activity->causer->name }}</td>
                            <td>{{ $activity->description }}</td>
                            <td>{{ $activity->log_name }}</td>
                            <td>{{ $activity->created_at }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
    
            </div>
          <!-- ACTIVITY END -->
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

            @if (Session::has('loginError'))
            toastr.options = {
                "positionClass": "toast-top-right",
            };
            toastr.error("{{ Session::get('loginError') }}");
            @endif
        </script>
@endsection