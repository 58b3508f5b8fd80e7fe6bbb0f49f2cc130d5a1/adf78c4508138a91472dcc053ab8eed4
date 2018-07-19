@php
    $public='';
    if(App::environment('production'))
    $public ='public';
@endphp
        <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - {{config('app.name')}}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Css -->
    <link href="{{asset($public.'/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset($public.'/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset($public.'/css/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset($public.'/css/slick-slider.css')}}" rel="stylesheet">
    <link href="{{asset($public.'/css/fancybox.css')}}" rel="stylesheet">
    <link href="{{asset($public.'/css/plugin.css')}}" rel="stylesheet">
    <link href="{{asset($public.'/css/color.css')}}" rel="stylesheet">
    <link href="{{asset($public.'/css/style.css')}}" rel="stylesheet">
    <link href="{{asset($public.'/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset($public.'/css/cssf043.css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic-ext,vietnamese')}}"
          rel="stylesheet">
    <link href="{{asset($public.'/css/editor.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset($public.'/css/sweetalert.min.css')}}">
    <link rel="stylesheet" href="{{asset($public.'/css/resume.css')}}">
    @if(strcmp(strtolower($title),strtolower('resume'))===0)
        <script>(function (e, t, n) {
                var r = e.querySelectorAll("html")[0];
                r.className = r.className.replace(/(^|\s)no-js(\s|$)/, "$1js$2")
            })(document, window, 0);</script>
    @endif
    <style>
        .careerfy-applied-jobs-text span{
            font-size: 12.5px;
        }
        .careerfy-subheader{
            padding:0;
        }
        #site-nav a {
            display: block;
        }
    </style>
    @yield('styles')

</head>

<body>

<!-- Wrapper -->
<div class="careerfy-wrapper">

    <!-- Header -->
    <header id="careerfy-header" class="careerfy-header-one">
        <div class="container">
            <div class="row">
                <aside class="col-md-2"><a href="{{url('/')}}" class="careerfy-logo"><img
                                src="{{asset($public.'/png/sitelogo.png')}}" alt=""></a>
                </aside>
                <aside class="col-md-6">
                    <nav class="careerfy-navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#careerfy-navbar-collapse-1" aria-expanded="false">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="careerfy-navbar-collapse-1">
                            <ul class="navbar-nav">
                                <li class="active"><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('/about')}}">About us</a></li>
                                <li><a href="{{url('/contact')}}">Contact</a></li>
                                <li><a href="{{url('/faq')}}">Faq's</a></li>

                            </ul>
                        </div>
                    </nav>
                </aside>
                <aside class="col-md-4">
                    <div class="careerfy-right">
                        @guest
                            <ul class="careerfy-user-section">
                                <li><a class="careerfy-color careerfy-open-signin-tab" href="#">Register</a></li>
                                <li><a class="careerfy-color careerfy-open-signup-tab" href="#">Sign in</a></li>
                            </ul>
                        @endguest
                        @auth
                            <ul class="careerfy-user-section">
                                <li><a class="careerfy-color careerfy-open-signin-tab" href="{{route('home')}}">Dashboard</a>
                                </li>
                                <li><a class="careerfy-color careerfy-open-signin-tab" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                </li>
                            </ul>
                        @endauth
                        {{--<a href="#" class="careerfy-simple-btn careerfy-bgcolor"><span> <i
                                        class="careerfy-icon careerfy-arrows-2"></i> Post Job</span></a>--}}
                    </div>
                </aside>
            </div>
        </div>
    </header>
    <!-- Header -->
@yield('content')
<!-- Footer -->
    <footer id="careerfy-footer" class="careerfy-footer-one">
        <div class="container">
            <!-- Footer Widget -->
            <div class="careerfy-footer-widget">
                <div class="row">
                    <aside class="widget col-md-7 widget_contact_info">
                        <div class="widget_contact_wrap">
                            <a class="careerfy-footer-logo" href="{{url('/')}}"><img
                                        src="{{asset($public.'/png/sitelogo.png')}}" alt=""></a>
                            <p>Touching Lives Skills is a team of ebullient, passionate and hardworking group of persons
                                with the sole aim of empowering nations with skills necessary for the alleviation and
                                mitigation of poverty. We are building a prosperous world where people can come into
                                their dignity and pride, and we have skilled, articulate and inspired people with
                                distinct characters whose combined efforts will help the organization actualize its set
                                goal.</p>
                            <a href="{{url('/criteria')}}" class="careerfy-classic-btn careerfy-bgcolor">Learn more</a>
                        </div>
                    </aside>
                    <aside class="widget col-md-5 widget_nav_manu">
                        <h2 style="color:#999999">Site Nav</h2>
                        <ul class="list-group" id="site-nav">
                            <li class="list-group-item"><a href="{{url('criteria')}}">Hiring Criteria</a></li>
                            <li class="list-group-item"><a href="{{url('/openings')}}">Openings</a></li>
                            <li class="list-group-item"><a href="{{url('/application')}}">How to apply</a></li>
                            <li class="list-group-item"><a href="{{url('/contact')}}">Contact Us</a></li>

                            @guest
                                <li class="list-group-item" style="width: 50%;">
                                    <a class="careerfy-color careerfy-open-signin-tab"
                                       href="#">Register</a></li>
                                <li class="list-group-item" style="width: 50%;">
                                    <a class="careerfy-color careerfy-open-signup-tab"
                                       href="#">Sign in</a></li>
                            @endguest
                            @auth
                                <li class="list-group-item" style="width: 50%;">
                                    <a href="{{url('/home')}}">Dashboard</a>
                                </li>
                                <li class="list-group-item col-md-6" style="width: 50%;">
                                    <a class="careerfy-color"
                                       href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                </li>
                            @endauth

                        </ul>
                    </aside>

                </div>
            </div>
            <!-- Footer Widget -->
            <!-- CopyRight -->
            <div class="careerfy-copyright">
                <p>Copyrights © {{date('Y')}}, <a href="{{config('app.owner_url')}}"
                                                  class="careerfy-color">{{config('app.owner')}}</a>. Designed by <a
                            href="{{config('app.designer_url')}}" class="careerfy-color">{{config('app.designer')}}</a>
                </p>
                <ul class="careerfy-social-network">
                    <li><a href="https://facebook.com/projectproduceabakinitiative/"
                           class="careerfy-bgcolorhover fa fa-facebook"></a></li>
                    <li><a href="https://instagram.com/touchinglivesskills/"
                           class="careerfy-bgcolorhover fa fa-instagram"></a></li>
                    {{--<li><a href="#" class="careerfy-bgcolorhover fa fa-dribbble"></a></li>
                    <li><a href="#" class="careerfy-bgcolorhover fa fa-linkedin"></a></li>
                    <li><a href="#" class="careerfy-bgcolorhover fa fa-instagram"></a></li>--}}
                </ul>
            </div>
            <!-- CopyRight -->
        </div>
    </footer>
    <!-- Footer -->

</div>
<!-- Wrapper -->
@guest
    <!-- ModalLogin Box -->
    <div class="careerfy-modal fade careerfy-typo-wrap" id="JobSearchModalSignup">
        <div class="modal-inner-area">&nbsp;</div>
        <div class="modal-content-area">
            <div class="modal-box-area">

                <div class="careerfy-modal-title-box">
                    <h2>Login to your account</h2>
                    <span class="modal-close"><i class="fa fa-times"></i></span>
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
                                <input placeholder="Enter Password" name="password" type="password"
                                       class="form-control">
                                <i class="careerfy-icon careerfy-multimedia"></i>
                            </li>
                            <li>
                                <input type="submit" value="Sign In">
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <div class="careerfy-user-form-info">
                            <p>Forgot Password? | <a href="#">Sign Up</a></p>
                            <div class="careerfy-checkbox">
                                <input type="checkbox" id="r10" name="rr"/>
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
    </div>

    <!-- Modal Signup Box -->
    <div class="careerfy-modal fade careerfy-typo-wrap" id="JobSearchModalLogin">
        <div class="modal-inner-area">&nbsp;</div>
        <div class="modal-content-area">
            <div class="modal-box-area">

                <div class="careerfy-modal-title-box">
                    <h2>Signup to your account</h2>
                    <span class="modal-close"><i class="fa fa-times"></i></span>
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
                                <input value="{{old('first_name')}}" name="first_name" type="text"
                                       placeholder="Enter first name">
                                <i class="fa fa-user"></i>
                                @if ($errors->has('first_name'))
                                    <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                @endif
                            </li>
                            <li>
                                <label>Last Name:</label>
                                <input value="{{old('last_name')}}" name="last_name" type="text"
                                       placeholder="Enter last name">
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
                                <input value="{{old('phone_no')}}" name="phone_no" type="text"
                                       placeholder="Enter Phone number">
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
                                <input value="{{old('job_title')}}" name="job_title" type="text"
                                       placeholder="Enter job title">
                                <i class="fa fa-briefcase"></i>
                                @if ($errors->has('job_title'))
                                    <span class="text-danger">{{ $errors->first('job_title') }}</span>
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
    </div>
@endguest

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset($public.'/js/jquery.js')}}"></script>
<script src="{{asset($public.'/js/bootstrap.js')}}"></script>
<script src="{{asset($public.'/js/slick-slider.js')}}"></script>
<script src="{{asset($public.'/js/counter.js')}}"></script>
<script src="{{asset($public.'/js/fancybox.pack.js')}}"></script>
<script src="{{asset($public.'/js/isotope.min.js')}}"></script>
<script src="{{asset($public.'/js/functions.js')}}"></script>
<script src="{{asset($public.'/js/functions-2.js')}}"></script>
<script src="{{asset($public.'/js/sweetalert.min.js')}}"></script>
<script src="{{asset($public.'/js/editor.js')}}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function () {
        $("#textEditor").Editor({
            'print': false,
            'togglescreen': false,
            'rm_format': false,
            'source': false,
            'splchars': false,
            'screeneffects': false,
            'fonts': false,
            'styles': false,
            'advancedoptions': false,
            'extraeffects': false,
            'insertoptions': false
        });
    });
    @if(!null == session('status') && !null == session('status'))
    @php $status=session('status') @endphp
    swal("Status", "{{session('status')}}", "{{session('state')}}");
    @endif
</script>
<script src="{{asset($public.'/js/bootstrap-notify.min.js')}}"></script>
<script src="{{asset($public.'/js/resume.js')}}"></script>
<script src="{{asset($public.'/js/upload.js')}}"></script>
@if(strcmp(strtolower($title),strtolower('resume'))===0)
    <script>
        $(document).ready(function () {
            $("#textEditor").Editor("setText", {!! json_encode($resume->cover_letter) !!});
        });

    </script>
@endif
@yield('scripts')
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{csrf_field()}}
</form>
</body>

</html>

