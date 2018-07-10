@php    $public='';    if(config('app.env') == 'production')    $public ='public'; @endphp
@extends('layouts.app')
@section('title','Resume')
@section('content')
    <div class="container">
        @include('partials.resume')
    </div>
    <div id="resume-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content" style="background-color: #fff;">
                <div class="modal-header" style="background-color:#2c3e50;">
                    <button type="button" class="close" data-dismiss="modal" style="color: #ffffff;">&times;</button>
                    <h4 class="modal-title" style="color: #ffffff;"></h4>
                </div>
                <div class="modal-body pull-left" id="invite" style="background-color: #f5f5f5; float:left;">

                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')

@endsection