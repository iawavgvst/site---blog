@extends('layouts.main')

@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url( {{ asset('assets/img/contact-bg.jpg') }} )">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>Contact Me</h1>
                        <span class="subheading">Have questions? I have answers.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content-->
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
                    <div class="my-5">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form action="{{ route('contact-form') }}" method="post">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="name" style="margin-bottom: 3px">Name</label>
                                <input value="{{ old('name') }}" class="form-control" name="name" id="name" type="text" placeholder="Enter your name..."/>

                                @error('name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="email" style="margin-bottom: 3px">Email address</label>
                                <input value="{{ old('email') }}" class="form-control" name="email" id="email" type="email" placeholder="Enter your email..."/>

                                @error('email')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="message" style="margin-bottom: 3px">Message</label>
                                <textarea class="form-control" name="message" id="message" placeholder="Enter your message here..." style="height: 12rem">{{ old('message') }}</textarea>

                                @error('message')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <br />
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <br />
                            <!-- Submit Button-->
                            <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
