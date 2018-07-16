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
    <title>{{ trans('global.global_title') }} - {{config('app.name')}}</title>
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
    <link href="{{ url($public.'/adminlte/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet"
          href="{{ url($public.'/adminlte/css') }}/select2.min.css"/>
    <link href="{{ url($public.'/adminlte/css/AdminLTE.min.css') }}" rel="stylesheet">
    <link href="{{ url($public.'/adminlte/css/skins/skin-blue.min.css') }}" rel="stylesheet">
    <link rel="stylesheet"
          href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet"
          href="//cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet"
          href="https://cdn.datatables.net/select/1.2.0/css/select.dataTables.min.css"/>
    <link rel="stylesheet"
          href="//cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.css"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.standalone.min.css"/>
    <style>
        body, html {
            font-size: 14px;
        }
        .content-heading{
            padding: 0;
            margin:0;
        }
        .btn {
            height: auto;
        }
    </style>
    @yield('styles')
</head>
<body>
<div id="page-container" class="sidebar-o sidebar-inverse side-scroll page-header-fixed page-header-modern main-content-boxed">
    @include('partials.html.sidebar')
    @include('partials.html.topbar')

    <main id="main-container">
        <div class="content">
            <div class="block">
                <div class="block-content">
                    <nav class="breadcrumb push">
                        <a class="breadcrumb-item" href="{{url()->previous()}}"><i class="fa fa-reply mr-5"></i> Back</a>
                        <span class="breadcrumb-item active">LMS</span>
                    </nav>
                </div>
                <div class="block-header block-header-default">
                    <h2 class="content-heading">TLCareers
                        <small>Learning Management System</small>
                    </h2>
                    <div class="block-options pull-right">
                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="fullscreen_toggle"><i class="si si-size-fullscreen"></i></button>
                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="content_toggle"><i class="si si-arrow-up"></i></button>

                    </div>
                </div>
                <div class="block-content block-content-full">

                    @if (Session::has('message'))
                        <div class="alert alert-info">
                            <p>{{ Session::get('message') }}</p>
                        </div>
                    @endif
                    @if ($errors->count() > 0)
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @yield('content')
                </div>
            </div>
        </div>
    </main>
    @include('partials.html.footer')
</div>
</div>
<script src="{{asset($public.'/dashboard/js/codebase.min-1.4.js')}}"></script>
<script src="{{asset($public.'/dashboard/js/chart.bundle.min.js')}}"></script>
<script src="{{asset($public.'/dashboard/js/be_pages_dashboard.js')}}"></script>
<script src="{{asset($public.'/dashboard/js/datatables.min.js')}}"></script>
<script src="{{asset($public.'/js/sweetalert.min.js')}}"></script>
<script src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
<script src="{{ url($public.'/adminlte/js') }}/select2.full.min.js"></script>
<script src="{{ url($public.'/adminlte/js') }}/main.js"></script>
<script src="{{ url($public.'/adminlte/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ url($public.'/adminlte/plugins/fastclick/fastclick.js') }}"></script>
<script src="{{ url($public.'/adminlte/js/app.min.js') }}"></script>
<script>
    window._token = '{{ csrf_token() }}';
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
    });
</script>
@yield('scripts')
</body>

</html>