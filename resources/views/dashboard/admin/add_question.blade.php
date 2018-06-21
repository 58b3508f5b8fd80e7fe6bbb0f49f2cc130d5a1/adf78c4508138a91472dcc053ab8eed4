@php    $public='';    if(config('app.env') == 'production')    $public ='public'; @endphp
@extends('layouts.admin.dashboard')
@section('title',$title)
@section('styles')
    <link href="{{asset($public.'/css/editor.css')}}" rel="stylesheet">
    <style>
        #options .Editor-editor {
            height: 150px;
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
            <h2 class="content-heading"> Add Questions</h2>
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title"> Add a question to
                        <small>{{$test->title}}</small>
                    </h3>
                </div>
                <div class="block-content">
                    <form action="{{url("/backend/tests/questions/add/$test->test_id")}}" method="post"
                          id="question-form">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$test->test_id}}">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="form-material ">
                                    <label for="question">Question</label>
                                    <textarea class="form-control" id="question"
                                              name="question" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row" id="options">
                            <div class="col-md-6">
                                <div class="form-material ">
                                    <label for="option-a">Option A</label>
                                    <textarea class="form-control" id="option-a"
                                              name="option_a" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-material ">
                                    <label for="option-b">Option B</label>
                                    <textarea class="form-control" id="option-b"
                                              name="option_b" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-material ">
                                    <label for="option-c">Option C</label>
                                    <textarea class="form-control" id="option-c"
                                              name="option_c" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-material ">
                                    <label for="option-d">Option D</label>
                                    <textarea class="form-control" id="option-d"
                                              name="option_d" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6">
                                <div class="form-material ">
                                    <input class="form-control" id="answer" name="answer" type="text">
                                    <label for="answer">Answer</label>
                                </div>
                            </div>
                            <div class="col-6 row">
                                <div class="form-material ">
                                    <input class="form-control" id="score" name="score" type="number">
                                    <label for="score">Score</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-alt-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('scripts')
    <script src="{{asset($public.'/js/editor.js')}}"></script>
    <script>
        $('#user-form').on('submit', function (e) {
            e.preventDefault();
            var form = $('#question-form');

            var data = new FormData(form);

            $.ajax({
                url: form.action,
                method: form.method,
                contentType: false,
                data: data,
                processData: false,
                success: function (result) {
                    alert(result.message);
                },
                error: function () {
                    alert('Sorry, an error occurred');
                }
            });
            return false;
        })
        $(function () {
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
            $("#question").Editor(options);
            $("#option-a").Editor(options);
            $("#option-b").Editor(options);
            $("#option-c").Editor(options);
            $("#option-d").Editor(options);
            /* $("#qualification").dashboardCodeBsMultiSelect();*/
            $('#question-form').on('submit', function (e) {
                $('#question').val($("#question").Editor("getText"));
                $('#option-a').val($("#option-a").Editor("getText"));
                $('#option-b').val($("#option-b").Editor("getText"));
                $('#option-c').val($("#option-c").Editor("getText"));
                $('#option-d').val($("#option-d").Editor("getText"));
                return true;
            });
        });

    </script>
@endsection