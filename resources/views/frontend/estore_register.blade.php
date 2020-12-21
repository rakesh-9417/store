@extends('layouts.frontend.main')

@section('content')
<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"><a href="">Register</a> </li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Login Start -->
<div class="login">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8"> 
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="register-form">
                        <div class="row justify-content-center">                        
                            <div class="col-md-9">
                                <label>First Name</label>
                                <!-- <input class="form-control" type="text" placeholder="First Name"> -->
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus placeholder="First Name">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <!-- <div class="col-md-6">
                                <label>Last Name</label>
                                <input class="form-control disabled" type="text" placeholder="Last Name">
                            </div> -->
                            <div class="col-md-9">
                                <label>E-mail</label>
                                <!-- <input class="form-control" type="text" placeholder="E-mail"> -->
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" placeholder="E-mail">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <!-- <div class="col-md-6">
                                <label>Mobile No</label>
                                <input class="form-control " type="text" placeholder="Mobile No">
                            </div> -->
                            <div class="col-md-9">
                                <label>Password</label>
                                <!-- <input class="form-control" type="text" placeholder="Password"> -->
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password" placeholder="Password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-9">
                                <label>Retype Password</label>
                                <!-- <input class="form-control" type="text" placeholder="Password"> -->
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password" placeholder="Retype Password">
                            </div>
                            <!-- <div class="col-md-9">
                                <button class="btn">Submit</button> Or Register with
                                <a href="{{ url('/login/facebook') }}" class="btn btn-facebook"> Facebook</a>
                                <a href="{{ url('/login/google') }}" class="btn btn-google-plus"> Google</a>
                                <a href="{{ url('/login/linkedin') }}" class="btn btn-google-plus"> linkedin</a>
                            </div> -->
                            <div class="col-md-9 footer footer-widget social ">
                                <button class="btn">Submit</button> 
                                <div class=" footer footer-widget">                                
                                    <div class="contact-info">
                                        <div class="social">
                                            Or Login with
                                            <a href="{{ url('/login/google') }}"><i class="fab fa-google"></i></a>
                                            <a href="{{ url('/login/facebook') }}"><i class="fab fa-facebook-f"></i></a>
                                            <a href="{{ url('/login/linkedin') }}"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>                    
                </form>
            </div>

        </div>
    </div>
</div>
<!-- Login End -->

@endsection