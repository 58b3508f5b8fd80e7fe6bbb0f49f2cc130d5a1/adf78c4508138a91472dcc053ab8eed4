@php    $public='';    if(config('app.env') == 'production')    $public ='public'; @endphp
@extends('layouts.admin')
@section('title',$title)
@section('content')
    <div class="container-fluid">
        <div class="careerfy-subheader careerfy-subheader-without-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="careerfy-page-title">
                            <h1>Companies</h1>
                            <p>Thousands of prestigious employers for you, search for a recruiter right now.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
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

                        <div class="careerfy-column-9" id="results">
                            @include('partials.admin.results')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Signup Box -->
    <div id="interview-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content" style="background-color: #fff;">
                <div class="modal-header" style="background-color:#2c3e50;">
                    <button type="button" class="close" data-dismiss="modal" style="color: #ffffff;">&times;</button>
                    <h4 class="modal-title" style="color: #ffffff;">Schedule Interview</h4>
                </div>
                <div class="modal-body pull-left" id="invite" style="background-color: #f5f5f5; float:left;">

                </div>

            </div>


        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset($public.'/js/loadingoverlay.min.js')}}"></script>

    <script>
        function showInviteModal(id) {
            $.get('/backend/tests/invite/' + id, function (result) {
                $('#interview-modal .modal-body').html(result.html);
                $('#interview-modal').modal('show');
            });
        }

        function sendInvite() {

            $.notify({
                // options
                message: 'Hello World'
            }, {
                // settings
                type: 'danger'
            });
        }

        $('#interview-modal').on('shown.bs.modal', function () {

            $('#invite-form').on('submit', function (e) {
                e.preventDefault();
                $(".modal-body").LoadingOverlay("show");
                var form = this;

                var data = new FormData(form);

                $.ajax({
                    url: form.action,
                    method: form.method,
                    contentType: false,
                    data: data,
                    processData: false,
                    success: function (result) {
                        $(".modal-body").LoadingOverlay("hide");
                        $('#interview-modal').modal('hide');
                        swal("Oops!", result.message, result.state);
                    },
                    error: function () {
                        $(".modal-body").LoadingOverlay("hide");
                        $('#interview-modal').modal('hide');
                        swal("Oops!", "Sorry, an error occured..","error");
                    }
                });
                return false;
            });
        });
    </script>
@endsection