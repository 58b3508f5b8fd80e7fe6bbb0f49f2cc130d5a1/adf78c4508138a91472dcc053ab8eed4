@php    $public='';    if(config('app.env') == 'production')    $public ='public'; @endphp
@extends('layouts.app')
@section('title','Profile')
@section('content')
    <div class="container">
        @include('partials.profile')
    </div>
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