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
    <style>
        body, html{
            font-size: 14px;
        }
        .content-heading{
            padding: 0;
            margin:0;
        }
    </style>
    @yield('styles')
</head>
<body>
<div id="page-container" class="sidebar-inverse side-scroll page-header-fixed main-content-narrow side-trans-enabled">
    @include('partials.html.sidebar')
    @include('partials.html.topbar')
    <main id="main-container" style="min-height: 192px;">
        @yield('content')
    </main>
    @include('partials.html.footer')
</div>
</div>
<script src="{{asset($public.'/dashboard/js/codebase.min-1.4.js')}}"></script>
<script src="{{asset($public.'/dashboard/js/chart.bundle.min.js')}}"></script>
<script src="{{asset($public.'/dashboard/js/be_pages_dashboard.js')}}"></script>
<script src="{{asset($public.'/dashboard/js/datatables.min.js')}}"></script>
<script src="{{asset($public.'/js/sweetalert.min.js')}}"></script>
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
    });
</script>
@yield('scripts')
</body>

</html>