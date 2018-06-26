@php    $public='';    if(config('app.env') == 'production')    $public ='public'; @endphp
@extends('layouts.admin.dashboard')
@section('title',$title)
@section('styles')
    <link href="{{asset($public.'/css/editor.css')}}" rel="stylesheet">
    <style>
        #question-modal .Editor-editor {
            height: 200px;
        }

        #options .Editor-editor {
            height: 120px;
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
            <div class="block">
                <div class="block-content">
                    <nav class="breadcrumb push">
                        <a class="breadcrumb-item" href="{{url('/backend')}}">Home</a>
                        <a class="breadcrumb-item" href="{{url('/backend/tests')}}">Online Tests</a>
                        <span class="breadcrumb-item active">{{$test->title}}</span>
                    </nav>
                </div>
                <div class="block-header">
                    <h3 class="block-title">Test Details
                        <small>({{$test->title}})</small>
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="fullscreen_toggle"><i class="si si-size-fullscreen"></i></button>
                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <table class="table">
                        <tr>
                            <td>Title</td>
                            <td>{{$test->title}}</td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>{!! $test->description !!}</td>
                        </tr>
                        <tr>
                            <td>Length</td>
                            <td>{{$test->length}}</td>
                        </tr>
                        <tr>
                            <td>Duration</td>
                            <td>{{$test->duration}} minutes</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Tests
                        <small>({{$test->title}})</small>
                    </h3>
                    <div class="block-options">
                        <a href="{{url("/backend/tests/questions/add/$test->test_id")}}"
                           class="btn btn-alt-primary"><i
                                    class="fa fa-plus"> Add Question</i></a>
                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="fullscreen_toggle"><i class="si si-size-fullscreen"></i></button>
                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="content_toggle"><i class="si si-arrow-up"></i></button>

                    </div>
                </div>
                <div class="block-content block-content-full" id="questions">
                    @include('partials.admin.test')
                </div>
            </div>
        </div>
    </main>
    <div class="modal" id="question-modal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Edit Question</h3>
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
                    <button type="submit" form="question-form" class="btn btn-alt-success">
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
        $('#question-modal').on('shown.bs.modal', function () {

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
            var elements = ['#question', '#option-a', '#option-b', '#option-c', '#option-d'];

            for (var i = 0; i < elements.length; i++) {
                var content = $(elements[i]).val();

                $(elements[i]).Editor(options);
                $(elements[i]).Editor("setText", content);
            }


            $('#question-form').on('submit', function (e) {
                e.preventDefault();
                $(".modal-content").LoadingOverlay("show");
                for (var i = 0; i < elements.length; i++) {
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
                        $('#question-modal').modal('hide');
                        $('#questions').fadeOut(500).html(result.html).fadeIn(800);
                        swal(result.status, {
                            icon: result.state,
                        });
                        $('.dataTable').DataTable();
                    },
                    error: function () {
                        swal("Oops!", 'Sorry, an error occurred', 'danger');
                        $(".modal-content").LoadingOverlay("hide");
                        $('#question-modal').modal('hide');
                    }
                });
                return false;
            });
        });

        function editQuestion(id, qid) {
            var data = {'id': id};
            $.get('/backend/tests/questions/edit/' + qid, data, function (result) {
                $('#question-modal .block-content').html(result.html);
                $('#question-modal').modal('show');
            }).fail(function () {
                swal("Oops!", "Sorry an error occurred..", 'danger');
            });
        }

        function deleteQuestion(id, qid) {
            swal({
                title: "Are you sure to delete this question?",
                text: "Once deleted, you will not be able to recover this question!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        var data = {'id': id};
                        $.post('/backend/tests/questions/delete/' + qid, data, function (result) {
                            $('#questions').fadeOut(500);
                            $('#questions').html(result.html);
                            swal(result.status, {
                                icon: result.state,
                            });
                            $('#questions').fadeIn(800);
                            $('.dataTable').DataTable();
                        });

                    } else {
                        swal("The question was not deleted!");
                    }
                });
        }
    </script>
@endsection