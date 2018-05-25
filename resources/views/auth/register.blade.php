@extends('layouts.app')
@section('title',$title)
@section('content')
    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 panel">
        <div class="careerfy-typo-wrap panel-body">


            <div class="careerfy-modal-title-box">
                <h2 class="text-center col-xs-12">Signup to your account</h2>
            </div>
            <form method="POST" action="{{ route('register') }}">
                {{csrf_field()}}
                <div class="careerfy-box-title">
                    <span>Choose your Account Type</span>
                </div>
                <div class="careerfy-user-options">
                    <ul>
                        <li class="active" style="width:100%;">
                            <a href="#">
                                <i class="careerfy-icon careerfy-user"></i>
                                <span>Candidate</span>
                                <small>I want to discover awesome job opportunities.</small>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="careerfy-user-form careerfy-user-form-coltwo">
                    <ul>
                        <li>
                            <label>First Name:</label>
                            <input value="{{old('first_name')}}" name="first_name" type="text" placeholder="Enter first name">
                            <i class="fa fa-user"></i>
                            @if ($errors->has('first_name'))
                                <span class="text-danger">{{ $errors->first('first_name') }}</span>
                            @endif
                        </li>
                        <li>
                            <label>Last Name:</label>
                            <input value="{{old('last_name')}}" name="last_name" type="text" placeholder="Enter last name">
                            <i class="fa fa-user"></i>
                            @if ($errors->has('last_name'))
                                <span class="text-danger">{{ $errors->first('last_name') }}</span>
                            @endif
                        </li>
                        <li>
                            <label>Email Address:</label>
                            <input value="{{old('email')}}" name="email" type="email" placeholder="Enter email">
                            <i class="fa fa-envelope"></i>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </li>
                        <li>
                            <label>Phone Number:</label>
                            <input value="{{old('phone_no')}}" name="phone_no" type="text" placeholder="Enter Phone number">
                            <i class="fa fa-phone"></i>
                            @if ($errors->has('phone_no'))
                                <span class="text-danger">{{ $errors->first('phone_no') }}</span>
                            @endif
                        </li>
                        <li>
                            <label>Password:</label>
                            <input name="password" placeholder="Enter Password" type="password">
                            <i class="fa fa-lock"></i>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </li>
                        <li>
                            <label>Confirm Password:</label>
                            <input name="password_confirmation" placeholder="Confirm Password" type="password">
                            <i class="fa fa-lock"></i>
                        </li>
                        <li class="careerfy-user-form-coltwo-full">
                            <label>Job Title</label>
                            <input value="{{old('job_title')}}" name="job_title" type="text" placeholder="Enter job title">
                            <i class="fa fa-briefcase"></i>
                            @if ($errors->has('phone_no'))
                                <span class="text-danger">{{ $errors->first('phone_no') }}</span>
                            @endif
                        </li>
                        <li class="careerfy-user-form-coltwo-full">
                            <input value="Sign Up" type="submit">
                        </li>
                    </ul>
                </div>
            </form>

        </div>
    </div>
@endsection
