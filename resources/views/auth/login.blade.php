@extends('layouts.app')
@section('title','Login')
@section('content')
    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 panel">
        <div class="careerfy-typo-wrap panel-body">


            <div class="careerfy-modal-title-box">
                <h2 class="text-center col-xs-12">Login to your account</h2>
            </div>
            <form method="post" action="{{route('login')}}">
                {{csrf_field()}}
                <div class="careerfy-user-options">
                    <ul>
                        <li class="active" style="width:100%;">
                            <a href="#">
                                <i class="careerfy-icon careerfy-user"></i>
                                <span>Candidate</span>
                                <small>I want to be a part of Touching Lives Skills.</small>
                            </a>
                        </li>
                        @if ($errors->has('email'))
                            <li style="width:100%;">
                                <h4 class="text-center text-danger">{{ $errors->first('email') }}</h4>
                            </li>
                        @endif
                    </ul>
                </div>

                <div class="careerfy-user-form">
                    <ul>
                        <li>
                            <label>Email Address:</label>
                            <input placeholder="Enter Your Email Address" type="email" name="email"
                                   value="{{old('email')}}" class="form-control">
                            <i class="careerfy-icon careerfy-mail"></i>
                        </li>
                        <li>
                            <label>Password:</label>
                            <input placeholder="Enter Password" name="password" type="password" class="form-control">
                            <i class="careerfy-icon careerfy-multimedia"></i>
                        </li>
                        <li>
                            <input type="submit" value="Sign In">
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                    <div class="careerfy-user-form-info">
                        <p><a href="{{route('password.request')}}">Forgot Password?</a> | <a
                                    href="{{route('register')}}">Sign Up</a></p>
                        <div class="careerfy-checkbox">
                            <input type="checkbox" id="r10" name="remember"/>
                            <label for="r10"><span></span> Remember Password</label>
                        </div>
                    </div>
                </div>
                <div class="careerfy-box-title careerfy-box-title-sub">
                    <span>Or Sign In With</span>
                </div>
                <div class="clearfix"></div>
                <ul class="careerfy-login-media">
                    <li><a href="#"><i class="fa fa-facebook"></i> Sign In with Facebook</a></li>
                    <li><a href="#" data-original-title="google"><i class="fa fa-google"></i> Sign In with
                            Google</a>
                    </li>
                    <li><a href="#" data-original-title="twitter"><i class="fa fa-twitter"></i> Sign In with Twitter</a>
                    </li>
                    <li><a href="#" data-original-title="linkedin"><i class="fa fa-linkedin"></i> Sign In with
                            LinkedIn</a>
                    </li>
                </ul>
            </form>

        </div>
    </div>
@endsection
