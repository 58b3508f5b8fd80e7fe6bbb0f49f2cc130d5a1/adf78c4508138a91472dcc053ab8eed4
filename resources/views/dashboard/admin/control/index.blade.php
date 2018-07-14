@php    $public='';    if(config('app.env') == 'production')    $public ='public'; @endphp
@extends('layouts.admin.dashboard')
@section('title',$title)
@section('styles')
@endsection
@section('content')
    <main id="main-container" style="min-height: 192px;">

    </main>

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