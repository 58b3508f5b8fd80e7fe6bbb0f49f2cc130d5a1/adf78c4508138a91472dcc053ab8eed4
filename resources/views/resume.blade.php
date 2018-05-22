@php    $public='';    if(config('app.env') == 'production')    $public ='public'; @endphp
@extends('layouts.app')
@section('title','Resume')
@section('content')
    <div class="container">
        @include('partials.resume')
    </div>
@endsection
@section('scripts')

@endsection