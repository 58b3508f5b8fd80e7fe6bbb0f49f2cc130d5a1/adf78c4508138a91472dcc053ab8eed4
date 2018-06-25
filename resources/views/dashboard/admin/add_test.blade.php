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
            <h2 class="content-heading"> Add Tests</h2>
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Add a new test</h3>
                </div>
                <div class="block-content">
                    <form action="{{url("/backend/tests/add")}}" method="post"
                          id="test-form">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material ">
                                    <input class="form-control" id="title" name="title" type="text"
                                           placeholder="Enter your test title here">
                                    <label for="title">Title</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material ">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description"
                                              name="description" rows="3"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-6">
                                <div class="form-material ">
                                    <input class="form-control" id="duration" name="duration" type="number">
                                    <label for="duration">Duration</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-material ">
                                    <input class="form-control" id="length" name="length" type="number">
                                    <label for="length">Length</label>
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
            $("#description").Editor(options);

            $('#test-form').on('submit', function (e) {
                $('#description').val(this.Editor("getText"));
                return true;
            });
        });

    </script>
@endsection