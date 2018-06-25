@php    $public='';    if(config('app.env') == 'production')    $public ='public'; @endphp
@extends('layouts.admin.dashboard')
@section('title',$title)
@section('styles')
    <link href="{{asset($public.'/css/editor.css')}}" rel="stylesheet">
    <style>
        #test-modal .Editor-editor {
            height: 200px;
        }

        #InsertImage_question .modal-dialog {
            max-width: 800px;
        }

        #imageList_question img {
            max-width: 100%;
        }
    </style>
@endsection
@section('content')
    <main id="main-container" style="min-height: 192px;">
        <div class="content">
            <h2 class="content-heading">View Tests</h2>
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Showing Tests
                        <small>Full</small>
                    </h3>
                    <div class="block-options">
                        <a href="{{url("/backend/tests/add/")}}"
                           class="btn btn-alt-primary"><i
                                    class="fa fa-plus"> Add Tests</i></a>
                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="fullscreen_toggle"><i class="si si-size-fullscreen"></i></button>
                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="content_toggle"><i class="si si-arrow-up"></i></button>

                    </div>
                </div>
                <div class="block-content block-content-full" id="tests">
                    @include('partials.admin.tests')
                </div>
            </div>
        </div>
    </main>
    <div class="modal" id="test-modal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Edit Test</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" form="test-form" class="btn btn-alt-success">
                        <i class="fa fa-check"></i> Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset($public.'/js/loadingoverlay.min.js')}}"></script>
    <script src="{{asset($public.'/js/editor.js')}}"></script>
    <script>
        $('#test-modal').on('shown.bs.modal', function () {

            var options = {
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
            var description = $('#description').val();
            $("#description").Editor(options);
            $("#description").Editor("setText", description);

            $('#test-form').on('submit', function (e) {
                e.preventDefault();
                $(".modal-content").LoadingOverlay("show");
                $('#description').val($('#description').Editor("getText"));
                /*
                                var form = $('#test-form');
                */

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
                        $('#test-modal').modal('hide');
                        $('#tests').fadeOut(500).html(result.html).fadeIn(800);
                        swal(result.status, {
                            icon: result.state,
                        });
                        $('.dataTable').DataTable();
                    },
                    error: function () {
                        swal("Oops!", 'Sorry, an error occurred', 'danger');
                        $(".modal-content").LoadingOverlay("hide");
                        $('#test-modal').modal('hide');
                    }
                });
                return false;
            });
        });

        function editTest(id, title) {
            var data = {'id': id};
            $.get('/backend/tests/edit', data, function (result) {
                $('#test-modal .block-content').html(result.html);
                $('#test-modal').modal('show');
            }).fail(function () {
                swal("Oops!", "Sorry an error occurred..", 'danger');
            });
        }

        function deleteTest(id, title) {
            swal({
                title: "Are you sure to delete " + title + "?",
                text: "Once deleted, you will not be able to recover this test!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        var data = {'id': id};
                        $.post('/backend/tests/delete', data, function (result) {
                            $('#tests').fadeOut(500);
                            $('#tests').html(result.html);
                            swal(result.status, {
                                icon: result.state,
                            });
                            $('#tests').fadeIn(800);
                            $('.dataTable').DataTable();
                        });

                    } else {
                        swal("The test was not deleted!");
                    }
                });
        }
    </script>
@endsection