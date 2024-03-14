@extends('layouts.main')

@section('title')
    <title>{{ config('app.name') }} - Contact</title>
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('container')
    <!-- CONTACT -->
    <div class="container full-height px-lg-5">

        <div class="row justify-content-center text-center" data-aos="fade-up">
            <div class="col-lg-8 pb-4" data-aos="fade-up">
                <h6 class="text-brand">CONTACT</h6>
                <h1>Interested in working together? Let's talk</h1>
            </div>

            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="300">
                <form action="{{ route('contact.send') }}" method="post" class="row g-lg-3 gy-3">
                    @csrf
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}"
                            placeholder="Enter Your Name">
                        @error('name')
                            <div class="invalid-feedback text-white">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                            placeholder="Enter Your Email">
                        @error('email')
                            <div class="invalid-feedback text-white">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- <div class="form-group col-12">
                      <input type="text" class="form-control" placeholder="Enter Subject">
                    </div> --}}
                    <div class="form-group col-12">
                        <textarea id="message" name="message" rows="4" class="form-control @error('message') is-invalid @enderror" placeholder="Enter Your Message">{{ old('message') }}</textarea>
                    @error('message')
                        <div class="invalid-feedback text-white">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="form-group col-12 d-grid">
                        <button type="submit" class="btn btn-brand mb-2">Send</button>
                        <button class="btn btn-primary" id="openChatBot">Chat With BOT</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
    <!-- CONTACT END -->
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
    <script src="https://mediafiles.botpress.cloud/3a190fed-6c08-41af-af5c-097d737b93d6/webchat/config.js" defer></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('openChatBot').addEventListener('click', function(e) {
                e.preventDefault();
                window.botpressWebChat.sendEvent({ type: 'show' });
            });
        });
        </script>        
    <script>
         @if (Session::has('success'))
         toastr.options = {
             "positionClass": "toast-top-right",
         };
         toastr.success("{{ Session::get('success') }}");
         @endif
    </script>
@endsection
