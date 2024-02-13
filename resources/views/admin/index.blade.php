@extends('layouts.main')

@section('title')
  <title>{{ config('app.name') }} - Login</title>
  <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('container')
    <style>
        #toast-container {
        top: 120px;
        right: 50px;
        opacity: 1;
    }
    </style>

    <!-- PROJECTS -->
    <div class="container full-height px-lg-5">
        <div class="row pb-3" data-aos="fade-up">
            <div class="col-lg-8">
              {{-- <h6 class="text-brand">Projects</h6> --}}
              <h1>Dashboard Admin</h1>
            </div>
          </div>

          <a href="{{ route('projects.create') }}" class="btn btn-info mb-3">Tambahkan Data</a>
          <table class="table">
              <thead>
                  <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Image</th>
                      <th scope="col">Description</th>
                      <th scope="col">Github</th>
                      <th scope="col">Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($products as $key => $data)
                      <tr>
                          <th scope="row">{{ $loop->iteration }}</th>
                          <td>{{ $data->name }}</td>
                          <td>
                            <img src="{{ asset('imageProjects/'.$data->image) }}" alt="" style="width: 70px;">
                          </td>
                          <td>{{ $data->description }}</td>
                          <td>{{ $data->link }}</td>
                          <td>
                              <a href="#" class="btn btn-info">Edit</a>
                              <form action="#" method="post" class="d-inline">
                                  @csrf
                                  @method('delete')
                                  <button type="submit" class="btn btn-danger">Hapus</button>
                              </form>
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
        // @if (Session::has('success'))
        // toastr.options = {
        //     "positionClass": "toast-top-right",
        // };
        // toastr.success("{{ Session::get('success') }}");
        // @endif
    </script>

@endsection
