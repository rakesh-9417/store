@extends('layouts.frontend.main')

@section('content')
<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item active"><a href="">Login</a></li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Login Start -->
<div class="login">
    <div class="container-fluid">
        <div class="row justify-content-center">

            <div class="col-lg-9">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="login-form">
                        <div class="row justify-content-center ">
                            <div class="col-md-9">
                                <label>E-mail / Username</label>
                                <!-- <input class="form-control" type="text" placeholder="E-mail / Username"> -->
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-mail / Username"  autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-9">
                                <label>Password</label>
                                <!-- <input class="form-control" type="text" placeholder="Password"> -->
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password"  autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-9">
                                <div class="custom-control custom-checkbox">
                                    <!-- <input type="checkbox" class="custom-control-input" id="newaccount"> -->
                                    <input class="custom-control-input" type="checkbox" name="remember" id="newaccount" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="newaccount">Keep me signed in</label>
                                </div>
                            </div>
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