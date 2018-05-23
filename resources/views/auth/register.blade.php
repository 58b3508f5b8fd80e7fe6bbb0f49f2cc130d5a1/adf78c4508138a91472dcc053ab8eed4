@extends('layouts.app')
@section('title','register')
@section('content')
    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 panel">
        <div class="careerfy-typo-wrap panel-body">




            <div class="careerfy-modal-title-box">
                <h2>Signup to your account</h2>
                <span class="modal-close"><i class="fa fa-times"></i></span>
            </div>
            <form>
                <div class="careerfy-box-title">
                    <span>Choose your Account Type</span>
                </div>
                <div class="careerfy-user-options">
                    <ul>
                        <li class="active">
                            <a href="#">
                                <i class="careerfy-icon careerfy-user"></i>
                                <span>Candidate</span>
                                <small>I want to discover awesome companies.</small>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="careerfy-icon careerfy-building"></i>
                                <span>Employer</span>
                                <small>I want to attract the best talent.</small>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="careerfy-user-form careerfy-user-form-coltwo">
                    <ul>
                        <li>
                            <label>First Name:</label>
                            <input value="Enter Your Name" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="text">
                            <i class="careerfy-icon careerfy-user"></i>
                        </li>
                        <li>
                            <label>Last Name:</label>
                            <input value="Enter Your Name" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="text">
                            <i class="careerfy-icon careerfy-user"></i>
                        </li>
                        <li>
                            <label>Email Address:</label>
                            <input value="Enter Your Email Address" onblur="if(this.value == '') { this.value ='Enter Your Email Address'; }" onfocus="if(this.value =='Enter Your Email Address') { this.value = ''; }" type="text">
                            <i class="careerfy-icon careerfy-mail"></i>
                        </li>
                        <li>
                            <label>Phone Number:</label>
                            <input value="Enter Your Phone Number" onblur="if(this.value == '') { this.value ='Enter Your Phone Number'; }" onfocus="if(this.value =='Enter Your Phone Number') { this.value = ''; }" type="text">
                            <i class="careerfy-icon careerfy-technology"></i>
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
