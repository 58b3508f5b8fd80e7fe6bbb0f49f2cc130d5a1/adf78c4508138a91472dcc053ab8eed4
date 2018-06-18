@php    $public='';    if(config('app.env') == 'production')    $public ='public'; @endphp
@extends('layouts.dashboard')
@section('title',$title)
@section('content')
    <main id="main-container" style="min-height: 258px;">
        <div class="content content-full">
            <div class="row gutters-tiny js-appear-enabled animated fadeIn" data-toggle="appear">
                <div class="block block-bordered block-mode-loading-refresh">
                    @if(!isset($error))
                        <div class="block-content nice-copy-story">

                            <h4 class="font-w300">Welcome {{Auth::user()->first_name}}</h4>
                            <p class="block-content">This is an online test on <strong>{{$test->title}}</strong></p>

                            <div class="card">
                                <h4 class="font-w300">Test Details</h4>
                                <table class="table">
                                    <tr>
                                        <td>Title</td>
                                        <td>{{$test->title}}</td>
                                    </tr>
                                    <tr>
                                        <td>Description</td>
                                        <td>{{$test->description}}</td>
                                    </tr>
                                    <tr>
                                        <td>Length</td>
                                        <td>{{$test->length}}</td>
                                    </tr>
                                    <tr>
                                        <td>Duration</td>
                                        <td>{{$test->duration}} minutes</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center text-success">Click the Start Button to begin
                                            this test.
                                        </td>
                                    </tr>
                                </table>
                                <form action="{{url('/jobs/test/start')}}" method="post" class="text-center mb-3">
                                    {{csrf_field()}}
                                    <input type="hidden" name="id" value="{{$test->test_id}}">
                                    <input type="submit" class="btn btn-outline-danger btn-lg" value="Start">
                                </form>

                            </div>
                        </div>
                    @else
                        <div class="card col-xs-12 col-md-12">
                            <div class="alert alert-danger text-center">
                                <h2>{{$error}}</h2>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </main>
@endsection