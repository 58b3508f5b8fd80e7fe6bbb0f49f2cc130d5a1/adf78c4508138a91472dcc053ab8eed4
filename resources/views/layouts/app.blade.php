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
    <script src="{{ asset('js/app.js') }}" defer></script>
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
    @if(strcmp(strtolower($title),strtolower('resume'))===0)
        <style>
            .js {
                width: 100%;
                max-width: 680px; /* 800 */
                text-align: center;
                margin: 0 auto;
                float: left;
            }

            .js h1 {
                font-size: 42px;
                font-weight: 300;
                color: #0f3c4b;
                margin-bottom: 40px;
            }

            .js h1 a:hover,
            .js h1 a:focus {
                color: #39bfd3 !important;
            }

            .js nav {
                margin-bottom: 40px !important;
            }

            .js nav a {
                border-bottom: 2px solid #c8dadf !important;
                display: inline-block !important;
                padding: 4px 8px !important;
                margin: 0 5px !important;
            }

            .js nav a.is-selected {
                font-weight: 700 !important;
                color: #39bfd3 !important;
                border-bottom-color: currentColor !important;
            }

            .js nav a:not( .is-selected ):hover,
            .js nav a:not( .is-selected ):focus {
                border-bottom-color: #0f3c4b !important;
            }

            .js footer {
                color: #92b0b3 !important;
                margin-top: 40px !important;
            }

            .js .notice {
                text-align: center;
                color: #333333;
            }

            .js footer a:hover,
            .js footer a:focus {
                color: #39bfd3 !important;
            }

            .box {
                font-size: 1.253em !important; /* 20 */
                background-color: #c8dadf !important;
                position: relative !important;
                padding: 30px 20px !important;
            }

            .box.has-advanced-upload {
                outline: 2px dashed #92b0b3 !important;
                outline-offset: -10px !important;

                -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear !important;
                transition: outline-offset .15s ease-in-out, background-color .15s linear !important;
            }

            .box.is-dragover {
                outline-offset: -20px !important;
                outline-color: #c8dadf !important;
                background-color: #fff !important;
            }

            .box__dragndrop,
            .box__icon {
                display: none !important;
            }

            .box.has-advanced-upload .box__dragndrop {
                display: inline !important;
            }

            .box.has-advanced-upload .box__icon {
                width: 100% !important;
                height: 80px !important;
                fill: #92b0b3 !important;
                display: block !important;
                margin-bottom: 40px !important;
            }

            .box.is-uploading .box__input,
            .box.is-success .box__input,
            .box.is-error .box__input {
                visibility: hidden !important;
            }

            .box__uploading,
            .box__success,
            .box__error {
                display: none !important;
            }

            .box.is-uploading .box__uploading,
            .box.is-success .box__success,
            .box.is-error .box__error {
                display: block !important;
                position: absolute !important;
                top: 50% !important;
                right: 0 !important;
                left: 0 !important;

                -webkit-transform: translateY(-50%) !important;
                transform: translateY(-50%) !important;
            }

            .box__uploading {
                font-style: italic !important;
            }

            .box__success {
                -webkit-animation: appear-from-inside .25s ease-in-out !important;
                animation: appear-from-inside .25s ease-in-out !important;
            }

            @-webkit-keyframes appear-from-inside {
                from {
                    -webkit-transform: translateY(-50%) scale(0) !important;
                }
                75% {
                    -webkit-transform: translateY(-50%) scale(1.1) !important;
                }
                to {
                    -webkit-transform: translateY(-50%) scale(1) !important;
                }
            }

            @keyframes appear-from-inside {
                from {
                    transform: translateY(-50%) scale(0) !important;
                }
                75% {
                    transform: translateY(-50%) scale(1.1) !important;
                }
                to {
                    transform: translateY(-50%) scale(1) !important;
                }
            }

            .box__restart {
                font-weight: 700 !important;
            }

            .box__restart:focus,
            .box__restart:hover {
                color: #39bfd3 !important;
            }

            .js .box__file {
                width: 0.1px !important;
                height: 0.1px !important;
                opacity: 0 !important;
                overflow: hidden !important;
                position: absolute !important;
                z-index: -1 !important;
            }

            .js .box__file + label {
                max-width: 80% !important;
                text-overflow: ellipsis !important;
                white-space: nowrap !important;
                cursor: pointer !important;
                display: inline-block !important;
                overflow: hidden !important;
            }

            .js .box__file + label:hover strong,
            .box__file:focus + label strong,
            .box__file.has-focus + label strong {
                color: #39bfd3 !important;
            }

            .js .box__file:focus + label,
            .js .box__file.has-focus + label {
                outline: 1px dotted #000 !important;
                outline: -webkit-focus-ring-color auto 5px !important;
            }

            .js .box__file + label * {
                /* pointer-events: none !important; */ /* in case of FastClick lib use */
            }

            .no-js .box__file + label {
                display: none !important;
            }

            .no-js .box__button {
                display: block !important;
            }

            .box__button {
                font-weight: 700 !important;
                color: #e5edf1 !important;
                background-color: #39bfd3 !important;
                display: block !important;
                padding: 8px 16px !important;
                margin: 40px auto 0 !important;
            }

            .box__button:hover,
            .box__button:focus {
                background-color: #0f3c4b !important;
            }

        </style>
        <script>(function (e, t, n) {
                var r = e.querySelectorAll("html")[0];
                r.className = r.className.replace(/(^|\s)no-js(\s|$)/, "$1js$2")
            })(document, window, 0);</script>
    @endif
    @yield('styles')
</head>

<body>

<!-- Wrapper -->
<div class="careerfy-wrapper">

    <!-- Header -->
    <header id="careerfy-header" class="careerfy-header-one">
        <div class="container">
            <div class="row">
                <aside class="col-md-2"><a href="index-2.html" class="careerfy-logo"><img src="png/logo.png" alt=""></a>
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
                                <li class="active submenu-addicon"><a href="index-2.html">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Demo Careerfy</a></li>
                                        <li><a href="https://eyecix.com/html/careerfy-demos/hireright-demo/">Demo
                                                Hireright</a></li>
                                        <li><a href="https://eyecix.com/html/careerfy-demos/jobshub-demo/">Demo
                                                Jobshub</a></li>
                                    </ul>
                                </li>
                                <li class="submenu-addicon"><a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="cv-packages.html">CV Packages</a></li>
                                        <li><a href="faq.html">Faq's</a></li>
                                        <li><a href="job-grid-full.html">Job Grid</a></li>
                                        <li><a href="job-grid-with-filters.html">Job Grid W/filter</a></li>
                                        <li><a href="job-listings.html">Job Listings</a></li>
                                        <li><a href="job-detail.html">Job Detail</a></li>
                                        <li><a href="job-packages.html">Job Packages</a></li>
                                    </ul>
                                </li>
                                <li class="submenu-addicon"><a href="#">For Candidates</a>
                                    <ul class="sub-menu">
                                        <li><a href="candidate-dashboard-applied-jobs.html">Applied Jobs</a></li>
                                        <li><a href="candidate-dashboard-changed-password.html">Changed Password</a>
                                        </li>
                                        <li><a href="candidate-dashboard-cv-manager.html">CV Manager</a></li>
                                        <li><a href="candidate-dashboard-job-alert.html">Job Alert</a></li>
                                        <li><a href="candidate-dashboard-profile-seting.html">Profile Setting</a></li>
                                        <li><a href="candidate-dashboard-resume.html">Candidate Resume</a></li>
                                        <li><a href="candidate-dashboard-saved-jobs.html">Saved Jobs</a></li>
                                        <li><a href="candidate-listings.html">Candidate Listings</a></li>
                                        <li><a href="candidate-grid.html">Candidate Grid</a></li>
                                        <li><a href="candidate-detail.html">Candidate Detail</a></li>
                                    </ul>
                                </li>
{{--                                <li class="submenu-addicon"><a href="#">For Employers</a>
                                    <ul class="sub-menu">
                                        <li><a href="employer-list.html">Employer List</a></li>
                                        <li><a href="employer-grid.html">Employer Grid</a></li>
                                        <li><a href="employer-detail.html">Employer Detail</a></li>
                                        <li><a href="employer-dashboard-transactions.html">Transactions</a></li>
                                        <li><a href="employer-dashboard-resumes.html">Employer Resumes</a></li>
                                        <li><a href="employer-dashboard-profile-seting.html">Profile Setting</a></li>
                                        <li><a href="employer-dashboard-pkgpayment.html">Package Payment</a></li>
                                        <li><a href="employer-dashboard-packages.html">Packages</a></li>
                                        <li><a href="employer-dashboard-newjob.html">Employer New Job</a></li>
                                        <li><a href="employer-dashboard-manage-jobs.html">Menage Jobs</a></li>
                                        <li><a href="employer-dashboard-confitmation.html">Employer Confitmation</a>
                                        </li>
                                    </ul>
                                </li>--}}
                                <li><a href="contact-us.html">Contact</a></li>
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
                    <aside class="widget col-md-4 widget_contact_info">
                        <div class="widget_contact_wrap">
                            <a class="careerfy-footer-logo" href="index-2.html"><img
                                        src="{{asset($public.'/png/footer-logo.png')}}" alt=""></a>
                            <p>Sed consequat sapien faus quam bibendum convallis quis in nulla. Pellentesque volutpat
                                odio eget diam cursus semper. Sed coquat sapien faucibus quam.</p>
                            <a href="#" class="careerfy-classic-btn careerfy-bgcolor">Learn more</a>
                        </div>
                    </aside>
                    <aside class="widget col-md-3 widget_nav_manu">
                        <div class="footer-widget-title"><h2>Quick Links</h2></div>
                        <ul>
                            <li><a href="#">Shortcodes</a></li>
                            <li><a href="#">Job Page</a></li>
                            <li><a href="#">Job Page Alternative</a></li>
                            <li><a href="#">Resume Page</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </aside>
                    <aside class="widget col-md-3 widget_nav_manu">
                        <div class="footer-widget-title"><h2>For Candidates</h2></div>
                        <ul>
                            <li><a href="#">Browse Jobs</a></li>
                            <li><a href="#">Browse Categories</a></li>
                            <li><a href="#">Submit Resume</a></li>
                            <li><a href="#">Candidate Dashboard</a></li>
                            <li><a href="#">Job Alerts</a></li>
                            <li><a href="#">My Bookmarks</a></li>
                        </ul>
                    </aside>
                    <aside class="widget col-md-2 widget_nav_manu">
                        <div class="footer-widget-title"><h2>For Employers</h2></div>
                        <ul>
                            <li><a href="#">Browse Candidates</a></li>
                            <li><a href="#">Employer Dashboard</a></li>
                            <li><a href="#">Add Job</a></li>
                            <li><a href="#">Job Packages</a></li>
                        </ul>
                    </aside>
                </div>
            </div>
            <!-- Footer Widget -->
            <!-- CopyRight -->
            <div class="careerfy-copyright">
                <p>Copyrights © 2018, <a href="{{config('app.owner_url')}}"
                                         class="careerfy-color">{{config('app.owner')}}</a>. Designed by <a
                            href="{{config('app.designer_url')}}" class="careerfy-color">{{config('app.designer')}}</a>
                </p>
                <ul class="careerfy-social-network">
                    <li><a href="#" class="careerfy-bgcolorhover fa fa-facebook"></a></li>
                    <li><a href="#" class="careerfy-bgcolorhover fa fa-twitter"></a></li>
                    <li><a href="#" class="careerfy-bgcolorhover fa fa-dribbble"></a></li>
                    <li><a href="#" class="careerfy-bgcolorhover fa fa-linkedin"></a></li>
                    <li><a href="#" class="careerfy-bgcolorhover fa fa-instagram"></a></li>
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
                                <input value="Enter Your Name"
                                       onblur="if(this.value == '') { this.value ='Enter Your Name'; }"
                                       onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="text">
                                <i class="careerfy-icon careerfy-user"></i>
                            </li>
                            <li>
                                <label>Last Name:</label>
                                <input value="Enter Your Name"
                                       onblur="if(this.value == '') { this.value ='Enter Your Name'; }"
                                       onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="text">
                                <i class="careerfy-icon careerfy-user"></i>
                            </li>
                            <li>
                                <label>Email Address:</label>
                                <input value="Enter Your Email Address"
                                       onblur="if(this.value == '') { this.value ='Enter Your Email Address'; }"
                                       onfocus="if(this.value =='Enter Your Email Address') { this.value = ''; }"
                                       type="text">
                                <i class="careerfy-icon careerfy-mail"></i>
                            </li>
                            <li>
                                <label>Phone Number:</label>
                                <input value="Enter Your Phone Number"
                                       onblur="if(this.value == '') { this.value ='Enter Your Phone Number'; }"
                                       onfocus="if(this.value =='Enter Your Phone Number') { this.value = ''; }"
                                       type="text">
                                <i class="careerfy-icon careerfy-technology"></i>
                            </li>
                            <li class="careerfy-user-form-coltwo-full">
                                <label>Categories:</label>
                                <div class="careerfy-profile-select">
                                    <select>
                                        <option>Sales & Marketing</option>
                                        <option>Sales & Marketing</option>
                                    </select>
                                </div>
                            </li>
                            <li class="careerfy-user-form-coltwo-full">
                                <img src="{{asset($public.'/png/login-robot.png')}}" alt="">
                            </li>
                            <li class="careerfy-user-form-coltwo-full">
                                <input type="submit" value="Sign Up">
                            </li>
                        </ul>
                    </div>
                    <div class="careerfy-box-title careerfy-box-title-sub">
                        <span>Or Sign Up With</span>
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
    @if(!null == session('status'))
    @php $status=session('status') @endphp
    swal("Status", "{{$status['message']}}", "{{$status['state']}}");
    @endif
</script>
@if(strcmp(strtolower($title),strtolower('resume'))===0)
    <script>
        $(document).ready(function () {
            $("#textEditor").Editor("setText", {!! json_encode($resume->cover_letter) !!});
        });

    </script>
    <script src="{{asset($public.'/js/resume.js')}}"></script>
@endif
@yield('scripts')
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{csrf_field()}}
</form>
</body>

</html>

