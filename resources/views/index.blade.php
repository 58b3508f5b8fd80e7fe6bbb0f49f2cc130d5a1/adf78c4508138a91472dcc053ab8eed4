@php    $public='';    if(config('app.env') == 'production')    $public ='public'; @endphp
@extends('layouts.app')
@section('title','Jobs')
@section('content')
    <div class="container">
        {!!  $html !!}
    </div>
@endsection