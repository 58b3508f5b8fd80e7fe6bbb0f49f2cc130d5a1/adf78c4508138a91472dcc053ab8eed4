@php    $public='';    if(config('app.env') == 'production')    $public ='public'; @endphp
@extends('layouts.admin.dashboard')
@section('title',$title)
@section('styles')

@endsection
@section('content')
    <main id="main-container" style="min-height: 192px;">
        <div class="content">
            <h2 class="content-heading">DataTables Plugin</h2>
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Dynamic Table
                        <small>Full</small>
                    </h3>
                </div>
                <div class="block-content block-content-full">
                    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered table-striped table-vcenter dataTable">
                                    <thead>
                                    <tr role="row">
                                        <th class="text-center">S/N</th>
                                        <th class="">Title</th>
                                        <th class="">Description</th>
                                        <th class="text-center">Duration</th>
                                        <th class="text-center">Length</th>
                                        <th class="text-center">Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $i=1;
                                    @endphp
                                    @foreach($tests as $test)
                                        <tr role="row" class="odd">
                                            <td class="text-center">{{$i}}</td>
                                            <td>{{$test->title}}</td>
                                            @php
                                                $description =strip_tags($test->description);
                                                $description =explode(' ',$description);
                                                $description = array_splice($description ,0,20);
                                                $description=implode(' ',$description).'...';
                                            @endphp
                                            <td>{{$description}}</td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-danger">{{$test->duration}} mins</span></td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-primary">{{$test->length}}</span>
                                            </td>
                                            <td class="text-center">
                                                <a class="btn btn-sm btn-secondary" href="{{url("/backend/tests/view/$test->test_id")}}"
                                                   data-toggle="tooltip" title="{{$test->title}}" data-original-title="{{$test->title}}">
                                                    <i class="fa fa-eye"></i>
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
    <script src="{{asset($public.'/dashboard/js/jquery.simple.timer.js')}}"></script>
    <script>
        $('#user-form').on('submit', function (e) {
            e.preventDefault();
            var form = $('#test-form');

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
        $('.timer').startTimer();

    </script>
@endsection