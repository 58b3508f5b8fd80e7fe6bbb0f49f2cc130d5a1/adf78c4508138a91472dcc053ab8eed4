@php    $public='';    if(config('app.env') == 'production')    $public ='public'; @endphp
@extends('layouts.app')
@section('title',$title)
@section('styles')
    <style>

    </style>
    @endsection
@section('content')
    <div class="container" id="jobs">
        @include('partials.jobs')
    </div>
@endsection
@section('scripts')
    <script src="{{asset($public.'/js/jobs.js')}}"></script>
@endsection