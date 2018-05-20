@php    $public='';    if(config('app.env') == 'production')    $public ='public'; @endphp
@extends('layouts.app')
@section('title','Profile')
@section('styles')
    <link rel="stylesheet" href="{{asset($public.'/css/sweetalert.min.css')}}">
@endsection
@section('content')
    <div class="container">
        @include('partials.profile')
    </div>
@endsection
@section('scripts')
    <script src="{{asset($public.'/js/sweetalert.min.js')}}"></script>
    <script>
        @if(!null == session('status'))
        @php $status=session('status') @endphp
        swal("Update Stat", "{{$status['message']}}", "{{$status['state']}}");
        @endif
        $("#state").change(function () {
            var data = {'state': $('#state').val()};
            $.post('/getlgas', data, function (result) {
                $('#lga').html(result.html);
            });
        });
    </script>
@endsection