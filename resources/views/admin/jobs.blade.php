@php
    $public='';
    if(App::environment('production'))
    $public ='public';
@endphp
@extends('layouts.admin.app')
@section('styles')
    <style>
        li .disabled, li:hover .disabled, li:focus .disabled {
            pointer-events: none !important;
            cursor: default !important;
            z-index: 2 !important;
            color: #23527c !important;
            background-color: #eee !important;
            border-color: #ddd !important;
        }

    </style>
@endsection
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
                        <div class="careerfy-column-9">
                            <div class="careerfy-typo-wrap">
                                <div class="careerfy-employer-dashboard" id="jobs">
                                    @include('partials.admin.jobs')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="job-modal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content" style="background-color: #fff;">
                <div class="modal-header" style="background-color:#2c3e50;">
                    <button type="button" class="close" data-dismiss="modal" style="color: #ffffff;">&times;</button>
                    <h4 class="modal-title" style="color: #ffffff;">Schedule Job</h4>
                </div>
                <div class="modal-body pull-left" style="background-color: #f5f5f5; float:left;">

                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset($public.'/js/loadingoverlay.min.js')}}"></script>
    <script src="{{asset($public.'/js/editor.js')}}"></script>
    <script>
        $('#job-modal').on('shown.bs.modal', function () {

            let options = {
                'texteffects': true,
                'aligneffects': false,
                'textformats': false,
                'fonteffects': false,
                'actions': false,
                'insertoptions': false,
                'extraeffects': false,
                'advancedoptions': false,
                'screeneffects': false,
                'bold': true,
                'italics': true,
                'underline': true,
                'ol': true,
                'ul': true,
                'undo': false,
                'redo': false,
                'l_align': true,
                'r_align': true,
                'c_align': true,
                'justify': true,
                'insert_link': false,
                'unlink': false,
                'insert_img': true,
                'hr_line': false,
                'block_quote': true,
                'source': false,
                'strikeout': false,
                'indent': false,
                'outdent': false,
                'fonts': false,
                'styles': false,
                'print': false,
                'rm_format': false,
                'status_bar': false,
                'font_size': false,
                'color': false,
                'splchars': false,
                'insert_table': true,
                'select_all': false,
                'togglescreen': false
            };
            let elements = ['#job-description'];

            for (let i = 0; i < elements.length; i++) {
                let content = $(elements[i]).val();

                $(elements[i]).Editor(options);
                $(elements[i]).Editor("setText", content);
            }


            $('#job-form').on('submit', function (e) {
                e.preventDefault();
                $(".modal-content").LoadingOverlay("show");
                for (let i = 0; i < elements.length; i++) {
                    $(elements[i]).val($(elements[i]).Editor("getText"));
                }
                let form = e.target;
                let data = new FormData(form);

                $.ajax({
                    url: form.action,
                    method: form.method,
                    contentType: false,
                    data: data,
                    processData: false,
                    success: function (result) {
                        $(".modal-content").LoadingOverlay("hide");
                        $('#job-modal').modal('hide');
                        $('#jobs').fadeOut(500).html(result.html).fadeIn(800);
                        swal(result.status, {
                            icon: result.state,
                        });
                        $('.dataTable').DataTable();
                    },
                    error: function () {
                        swal("Oops!", 'Sorry, an error occurred', 'danger');
                        $(".modal-content").LoadingOverlay("hide");
                        $('#job-modal').modal('hide');
                    }
                });
                return false;
            });
        });

        function editJob(id, jid) {
            let data = {'id': id};
            $.get('/backend/jobs/view/edit/' + jid, data, function (result) {
                $('#job-modal .modal-body').html(result.html);
                $('#job-modal').modal('show');
            }).fail(function () {
                swal("Oops!", "Sorry an error occurred..", 'danger');
            });
        }

        function deleteJob(id, qid) {
            swal({
                title: "Are you sure to delete this job?",
                text: "Once deleted, you will not be able to recover this job!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        let data = {'id': id};
                        $.post('/backend/jobs/delete/' + qid, data, function (result) {
                            $('#jobs').fadeOut(500);
                            $('#jobs').html(result.html);
                            swal(result.status, {
                                icon: result.state,
                            });
                            $('#jobs').fadeIn(800);
                            $('.dataTable').DataTable();
                        });

                    } else {
                        swal("Oops! The job was not deleted..");
                    }
                });
        }
    </script>
@endsection