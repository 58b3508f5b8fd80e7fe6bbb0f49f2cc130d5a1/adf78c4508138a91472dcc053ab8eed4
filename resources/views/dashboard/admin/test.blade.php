@php    $public='';    if(config('app.env') == 'production')    $public ='public'; @endphp
@extends('layouts.admin.dashboard')
@section('title',$title)
@section('styles')

@endsection
@section('content')
    <main id="main-container" style="min-height: 192px;">
        <div class="content">
            <h2 class="content-heading">Online Tests</h2>
            <div class="block">
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
                    <h3 class="block-title">Questions
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
                <div class="block-content block-content-full">
                    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered table-striped table-vcenter dataTable">
                                    <thead>
                                    <tr role="row">
                                        <th class="text-center">S/N</th>
                                        <th class="">Question</th>
                                        <th class="">Options</th>
                                        <th class="text-center">Answer</th>
                                        <th class="text-center">Score</th>
                                        <th class="text-center">Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $i=1;
                                    @endphp
                                    @foreach($questions as $question)
                                        <tr role="row" class="odd">
                                            <td class="text-center">{{$i}}</td>
                                            <td>{!! $question->question !!}</td>
                                            <td>
                                                <ul class="list-group">
                                                    <li class="list-group-item">a) {!!$question->option_a!!}</li>
                                                    <li class="list-group-item">b) {!!$question->option_b!!}</li>
                                                    <li class="list-group-item">c) {!!$question->option_c!!}</li>
                                                    <li class="list-group-item">d) {!!$question->option_d!!}</li>
                                                </ul>
                                            </td>
                                            <td>{{$question->answer}}</td>
                                            <td>{{$question->score}}</td>
                                            <td class="text-center">
                                                <a class="btn btn-sm btn-alt-success"
                                                   href="javascript:void(0)"
                                                   data-toggle="tooltip" title="{{$question->title}}"
                                                   data-original-title="{{$question->title}}">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn btn-sm btn-alt-danger"
                                                   href="javascript:void(0)"
                                                   data-toggle="tooltip" title="{{$question->title}}"
                                                   data-original-title="{{$question->title}}">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @php($i++)
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('scripts')
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

    </script>
@endsection