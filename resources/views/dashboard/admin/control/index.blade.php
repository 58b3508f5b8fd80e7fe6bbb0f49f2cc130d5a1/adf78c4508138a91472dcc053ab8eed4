@php    $public='';    if(config('app.env') == 'production')    $public ='public'; @endphp
@extends('layouts.admin.dashboard')
@section('title',$title)
@section('styles')
@endsection
@section('content')
    <div class="content">
        <div class="block">
            <div class="block-content">
                <nav class="breadcrumb push">
                    <a class="breadcrumb-item" href="http://careers.tlskills.dev:8000/backend"><i
                                class="fa fa-reply mr-5"></i> Back</a>
                    <span class="breadcrumb-item active">LMS</span>
                </nav>
            </div>
            <div class="block-header block-header-default">
                <h2 class="content-heading">Control Panel
                    <small>Dashboard</small>
                </h2>
                <div class="block-options pull-right">
                    <button type="button" class="btn-block-option" data-toggle="block-option"
                            data-action="fullscreen_toggle"><i class="si si-size-fullscreen"></i></button>
                    <button type="button" class="btn-block-option" data-toggle="block-option"
                            data-action="content_toggle"><i class="si si-arrow-up"></i></button>

                </div>
            </div>
            <div class="block-content block-content-full">

                <div class="row">
                    <div class="col-md-10">
                        <div class="panel panel-default">
                            <div class="panel-heading">Dashboard</div>

                            <div class="panel-body">
                                You are logged in!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset($public.'/dashboard/js/dataTables.min.js')}}"></script>
    <script src="{{asset($public.'/dashboard/js/buttons.min.js')}}"></script>
    <script src="{{asset($public.'/dashboard/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset($public.'/dashboard/js/jszip.min.js')}}"></script>
    <script src="{{asset($public.'/dashboard/js/pdfmake.min.js')}}"></script>
    <script src="{{asset($public.'/dashboard/js/vfs_fonts.js')}}"></script>
    <script src="{{asset($public.'/dashboard/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset($public.'/dashboard/js/buttons.print.min.js')}}"></script>
@endsection