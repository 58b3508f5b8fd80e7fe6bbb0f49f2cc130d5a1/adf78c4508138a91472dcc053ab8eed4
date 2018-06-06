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
    <title>Codebase - Bootstrap 4 Admin Template &amp; UI Framework | DEMO</title>
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
    <link rel="shortcut icon" href="{{asset($public.'/png/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset($public.'/png/favicon-192x192.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset($public.'/png/apple-touch-icon-180x180.png')}}">
    <link rel="stylesheet" id="css-main" href="{{asset($public.'/css/codebase.min-1.4.css')}}">
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
                                <span class="font-size-xl text-dual-primary-dark">code</span><span
                                        class="font-size-xl text-primary">base</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="content-side content-side-full">
                    <ul class="nav-main">
                        <li>
                            <a class="active" href="bd_dashboard.html"><i class="si si-compass"></i>Dashboard</a>
                        </li>
                        <li class="nav-main-heading">Layout</li>
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
                        </li>
                        <li>
                            <a href="be_pages_dashboard.html"><i class="si si-action-undo"></i>Go Back</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <header id="page-header">
        <div class="content-header">
            <div class="content-header-section">
                <div class="content-header-item">
                    <a class="link-effect font-w700 mr-5" href="index-2.html">
                        <i class="si si-fire text-primary"></i>
                        <span class="font-size-xl text-dual-primary-dark">code</span><span
                                class="font-size-xl text-primary">base</span>
                    </a>
                </div>
            </div>
            <div class="content-header-section d-none d-lg-block">
                <ul class="nav-main-header">
                    <li>
                        <a class="active" href="bd_dashboard.html"><i class="si si-compass"></i>Dashboard</a>
                    </li>
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
                    <li>
                        <a href="bd_search.html"><i class="si si-magnifier"></i>Search</a>
                    </li>
                    <li>
                        <a href="be_pages_dashboard.html"><i class="si si-action-undo"></i>Go Back</a>
                    </li>
                </ul>
            </div>
            <div class="content-header-section">
                <div class="btn-group ml-5" role="group">
                    <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-themes-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-paint-brush"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right min-width-150"
                         aria-labelledby="page-header-themes-dropdown">
                        <h6 class="dropdown-header text-center">Color Themes</h6>
                        <div class="row no-gutters text-center">
                            <div class="col-4 mb-5">
                                <a class="text-default" data-toggle="theme" data-theme="default"
                                   href="javascript:void(0)">
                                    <i class="fa fa-2x fa-circle"></i>
                                </a>
                            </div>
                            <div class="col-4 mb-5">
                                <a class="text-elegance" data-toggle="theme"
                                   data-theme="assets/css/themes/elegance.min.css')}}" href="javascript:void(0)">
                                    <i class="fa fa-2x fa-circle"></i>
                                </a>
                            </div>
                            <div class="col-4 mb-5">
                                <a class="text-pulse" data-toggle="theme"
                                   data-theme="assets/css/themes/pulse.min.css')}}"
                                   href="javascript:void(0)">
                                    <i class="fa fa-2x fa-circle"></i>
                                </a>
                            </div>
                            <div class="col-4 mb-5">
                                <a class="text-flat" data-toggle="theme" data-theme="assets/css/themes/flat.min.css')}}"
                                   href="javascript:void(0)">
                                    <i class="fa fa-2x fa-circle"></i>
                                </a>
                            </div>
                            <div class="col-4 mb-5">
                                <a class="text-corporate" data-toggle="theme"
                                   data-theme="assets/css/themes/corporate.min.css')}}" href="javascript:void(0)">
                                    <i class="fa fa-2x fa-circle"></i>
                                </a>
                            </div>
                            <div class="col-4 mb-5">
                                <a class="text-earth" data-toggle="theme"
                                   data-theme="assets/css/themes/earth.min.css')}}"
                                   href="javascript:void(0)">
                                    <i class="fa fa-2x fa-circle"></i>
                                </a>
                            </div>
                        </div>
                        <h6 class="dropdown-header text-center">Header</h6>
                        <button type="button" class="btn btn-sm btn-block btn-alt-secondary" data-toggle="layout"
                                data-action="header_fixed_toggle">Fixed Mode
                        </button>
                        <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout"
                                data-action="header_style_inverse_toggle">Style
                        </button>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="be_layout_api.html">
                            <i class="si si-chemistry"></i> All Options (API)
                        </a>
                    </div>
                </div>
                <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout"
                        data-action="header_search_on">
                    <i class="fa fa-search"></i>
                </button>
                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none" data-toggle="layout"
                        data-action="sidebar_toggle">
                    <i class="fa fa-navicon"></i>
                </button>
            </div>
        </div>
        <div id="page-header-search" class="overlay-header">
            <div class="content-header content-header-fullrow">
                <form action="https://demo.pixelcave.com/codebase/bd_search.php" method="post">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-secondary px-15" data-toggle="layout"
                                    data-action="header_search_off">
                                <i class="fa fa-times"></i>
                            </button>
                        </span>
                        <input type="text" class="form-control" placeholder="Search or hit ESC.."
                               id="page-header-search-input" name="page-header-search-input">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-secondary px-15">
                            <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
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
    <footer id="page-footer" class="opacity-0">
        <div class="content py-20 font-size-xs clearfix">
            <div class="float-right">
                Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="http://goo.gl/vNS3I"
                                                                          target="_blank">pixelcave</a>
            </div>
            <div class="float-left">
                <a class="font-w600" href="https://goo.gl/po9Usv" target="_blank">Codebase 1.4</a> &copy; <span
                        class="js-year-copy">2017</span>
            </div>
        </div>
    </footer>
</div>
<script src="{{asset($public.'/js/codebase.min-1.4.js')}}"></script>
<script src="{{asset($public.'/js/chart.bundle.min.js')}}"></script>
<script src="{{asset($public.'/js/be_pages_dashboard.js')}}"></script>
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
    ga('send', 'pageview');</script>
</body>

</html>