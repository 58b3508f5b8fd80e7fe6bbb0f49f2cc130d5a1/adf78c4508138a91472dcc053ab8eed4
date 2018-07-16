@php
    $public='';
    if(App::environment('production'))
    $public ='public';
@endphp
        <!doctype html>
<html lang="en" class="no-focus"> <!--<![endif]-->

<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>@yield('title') - {{config('app.name')}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
          content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest | This is the demo of Codebase! You need to purchase a license for legal use! | DEMO">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework | DEMO">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description"
          content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest | This is the demo of Codebase! You need to purchase a license for legal use! | DEMO">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" href="{{asset($public.'/dashboard/png/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset($public.'/dashboard/png/favicon-192x192.png')}}">
    <link rel="apple-touch-icon" sizes="180x180"
          href="{{asset($public.'/dashboard/png/apple-touch-icon-180x180.png')}}">
    <link rel="stylesheet" id="css-main" href="{{asset($public.'/dashboard/css/codebase.min-1.4.css')}}">
    <link rel="stylesheet" id="css-main" href="{{asset($public.'/dashboard/css/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset($public.'/css/sweetalert.min.css')}}">
    @yield('styles')
</head>
<body>
<div id="page-container" class="sidebar-inverse side-scroll page-header-fixed page-header-inverse main-content-boxed">
    <nav id="sidebar">
        <div id="sidebar-scroll">
            <div class="sidebar-content">
                <div class="content-header content-header-fullrow bg-black-op-10">
                    <div class="content-header-section text-center align-parent">
                        <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r"
                                data-toggle="layout" data-action="sidebar_close">
                            <i class="fa fa-times text-danger"></i>
                        </button>
                        <div class="content-header-item">
                            <a class="link-effect font-w700" href="index-2.html">
                                <i class="si si-fire text-primary"></i>
                                <span class="font-size-xl text-primary">{{config('app.name')}}</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="content-side content-side-full">
                    <ul class="nav-main">
                        <li>
                            <a class="active" href="{{url('/home')}}"><i class="si si-compass"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="{{url()->previous()}}"><i class="si si-action-undo"></i>Go Back</a>
                        </li>
                        {{--<li class="nav-main-heading">Layout</li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-puzzle"></i>Variations</a>
                            <ul>
                                <li>
                                    <a href="bd_variations_hero_simple_1.html">Hero Simple 1</a>
                                </li>
                                <li>
                                    <a href="bd_variations_hero_simple_2.html">Hero Simple 2</a>
                                </li>
                                <li>
                                    <a href="bd_variations_hero_simple_3.html">Hero Simple 3</a>
                                </li>
                                <li>
                                    <a href="bd_variations_hero_simple_4.html">Hero Simple 4</a>
                                </li>
                                <li>
                                    <a href="bd_variations_hero_image_1.html">Hero Image 1</a>
                                </li>
                                <li>
                                    <a href="bd_variations_hero_image_2.html">Hero Image 2</a>
                                </li>
                                <li>
                                    <a href="bd_variations_hero_image_3.html">Hero Image 3</a>
                                </li>
                                <li>
                                    <a href="bd_variations_hero_image_4.html">Hero Image 4</a>
                                </li>
                                <li>
                                    <a href="bd_variations_hero_video_1.html">Hero Video 1</a>
                                </li>
                                <li>
                                    <a href="bd_variations_hero_video_2.html">Hero Video 2</a>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">More Options</a>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)">Another Link</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Another Link</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Another Link</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-heading">Other Pages</li>
                        <li>
                            <a href="bd_search.html"><i class="si si-magnifier"></i>Search</a>
                        </li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <header id="page-header">
        <div class="content-header">
            <div class="content-header-section">
                <div class="content-header-item">
                    <a class="link-effect font-w700 mr-5" href="{{url('')}}">
                        <i class="si si-fire text-primary"></i>
                        <span class="font-size-xl text-dual-primary-dark">{{config('app.name')}}</span>
                    </a>
                </div>
            </div>
            <div class="content-header-section d-none d-lg-block">
                <ul class="nav-main-header">
                    <li>
                        <a href="{{url('/')}}"><i class="si si-compass"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="{{url()->previous()}}"><i class="si si-action-undo"></i>Go Back</a>
                    </li>
                    {{--<li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-puzzle"></i>Variations</a>
                        <ul>
                            <li>
                                <a href="bd_variations_hero_simple_1.html">Hero Simple 1</a>
                            </li>
                            <li>
                                <a href="bd_variations_hero_simple_2.html">Hero Simple 2</a>
                            </li>
                            <li>
                                <a href="bd_variations_hero_simple_3.html">Hero Simple 3</a>
                            </li>
                            <li>
                                <a href="bd_variations_hero_simple_4.html">Hero Simple 4</a>
                            </li>
                            <li>
                                <a href="bd_variations_hero_image_1.html">Hero Image 1</a>
                            </li>
                            <li>
                                <a href="bd_variations_hero_image_2.html">Hero Image 2</a>
                            </li>
                            <li>
                                <a href="bd_variations_hero_image_3.html">Hero Image 3</a>
                            </li>
                            <li>
                                <a href="bd_variations_hero_image_4.html">Hero Image 4</a>
                            </li>
                            <li>
                                <a href="bd_variations_hero_video_1.html">Hero Video 1</a>
                            </li>
                            <li>
                                <a href="bd_variations_hero_video_2.html">Hero Video 2</a>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">More Options</a>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">Another Link</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Another Link</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Another Link</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="bd_search.html"><i class="si si-magnifier"></i>Search</a>
                    </li>--}}
                </ul>
            </div>
            <div class="content-header-section">
                <a class="btn btn-dual-secondary" data-action="header_search_on" href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i> Logout
                </a>
            </div>
        </div>
        <div id="page-header-loader" class="overlay-header bg-primary">
            <div class="content-header content-header-fullrow text-center">
                <div class="content-header-item">
                    <i class="fa fa-sun-o fa-spin text-white"></i>
                </div>
            </div>
        </div>
    </header>
    <main id="main-container">
        @yield('content')
    </main>
    @include('partials.html.footer')
</div>
<script src="{{asset($public.'/dashboard/js/codebase.min-1.4.js')}}"></script>
<script src="{{asset($public.'/dashboard/js/chart.bundle.min.js')}}"></script>
<script src="{{asset($public.'/dashboard/js/be_pages_dashboard.js')}}"></script>
<script src="{{asset($public.'/dashboard/js/datatables.min.js')}}"></script>
<script src="{{asset($public.'/js/sweetalert.min.js')}}"></script>
<script>(function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o), m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'js/analytics.js', 'ga');
    ga('create', 'UA-16158021-6', 'auto');
    ga('send', 'pageview');
</script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(function () {
        @if(!null == session('status') && !null == session('status'))
        swal("Status", "{!!session('status')!!}", "{!!session('state')!!}");
        @endif
        $('.datatable').DataTable();
    });

</script>
@yield('scripts')
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{csrf_field()}}
</form>
</body>

</html>