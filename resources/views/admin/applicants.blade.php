@php
    $public='';
    if(App::environment('production'))
    $public ='public';
@endphp
@extends('layouts.admin.app')
@section('title',$title)
@section('content')
    <div class="container-fluid">
        <div class="careerfy-subheader careerfy-subheader-without-bg">

            <div class="careerfy-breadcrumb">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li>Candidates</li>
                </ul>
            </div>
        </div>
        <div class="careerfy-main-content">

            <!-- Main Section -->
            <div class="careerfy-main-section careerfy-dashboard-fulltwo">
                <div class="container">
                    <div class="row">
                    @include('includes.admin.sidebar',['applicants_sidebar'=>true])

                    <!-- FilterAble -->
                        <div class="careerfy-column-9" id="applicants">
                            <!-- Main Section -->
                            @include('partials.admin.applicants')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        function shortlist(id, rid) {
            var data = {'id': id, 'resume_id': rid};
            $.post('/backend/jobs/shortlist', data, function (result) {
                alert(result.message);
                $('#applicants').fadeOut(300).fadeIn(1000).html(result.html);
            }).fail(function () {
                swal("Oops!", "Sorry an error occurred..", 'danger');
            });
        }

    </script>
@endsection