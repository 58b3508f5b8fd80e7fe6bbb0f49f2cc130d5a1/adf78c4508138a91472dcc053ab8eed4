@php    $public='';    if(config('app.env') == 'production')    $public ='public'; @endphp
@extends('layouts.app')
@section('title','Profile')
@section('content')
    @include('partials.profile')
@endsection
@section('scripts')
    <script>
        $("#state").change(function () {
            var data = {'state': $('#state').val()};
            $.post('/getlgas', data, function (result) {
                $('#lga').html(result.html);
            });
        });
    </script>
@endsection