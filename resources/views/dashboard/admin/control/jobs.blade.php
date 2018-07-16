@php    $public='';    if(config('app.env') == 'production')    $public ='public'; @endphp
@extends('layouts.admin.dashboard')
@section('title',$title)
@section('styles')
    <link rel="stylesheet" href="{{asset($public.'/dashboard/css/dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset($public.'/dashboard/css/buttons.dataTables.min.css')}}">
@endsection
@section('content')

    <div class="content">
        <h2 class="content-heading">Jobs</h2>
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Jobs Table</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option"
                            data-action="fullscreen_toggle"><i class="si si-size-fullscreen"></i></button>
                    <button type="button" class="btn-block-option" data-toggle="block-option"
                            data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                </div>
            </div>
            <div class="block-content">
                <table class="table table-responsive data-table table-hover table-vcenter">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th class="d-none d-sm-table-cell">Country</th>
                        <th class="d-none d-sm-table-cell">State</th>
                        <th class="d-none d-sm-table-cell">LGA</th>
                        <th class="d-none d-sm-table-cell">Experience</th>
                        <th class="d-none d-sm-table-cell">Qualification</th>
                        <th class="d-none d-sm-table-cell">Post at</th>
                        <th class="d-none d-sm-table-cell">Close at</th>
                    </tr>
                    </thead>

                </table>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script src="{{asset($public.'/dashboard/js/dataTables.min.js')}}"></script>
    <script src="{{asset($public.'/dashboard/js/buttons.min.js')}}"></script>
    <script src="{{asset($public.'/dashboard/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset($public.'/dashboard/js/dataTables.select.min.js')}}"></script>
    <script src="{{asset($public.'/dashboard/js/dataTables.editor.min.js')}}"></script>
    <script src="{{asset($public.'/dashboard/js/jszip.min.js')}}"></script>
    <script src="{{asset($public.'/dashboard/js/pdfmake.min.js')}}"></script>
    <script src="{{asset($public.'/dashboard/js/vfs_fonts.js')}}"></script>
    <script src="{{asset($public.'/dashboard/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset($public.'/dashboard/js/buttons.print.min.js')}}"></script>

    <script>
        var editor;
        $(document).ready(function () {
            $('.data-table').DataTable({
                dom: 'lBfrtip',
                "processing": true,
                "serverSide": true,
                "ajax": {
                    url: "{{url('/admin/getjobs')}}",
                    type: "POST"
                },
                columns: [
                    {data: 'title', name: 'title'},
                    {data: 'country', name: 'country'},
                    {data: 'state', name: 'state'},
                    {data: 'lga', name: 'lga'},
                    {data: 'experience', name: 'experience'},
                    {data: 'qualification', name: 'qualification'},
                    {data: 'post_at', name: 'post_at'},
                    {data: 'close_at', name: 'close_at'}
                ],
                buttons: [
                    'excel',
                    'pdf',
                    'print'
                ],
                "columnDefs": [{
                    "orderable": false,
                    "targets": [1, 2, 3, 4, 5, 6, 7]
                }],
                "aLengthMenu": [[25, 50, 100, 200, -1], [25, 50, 100, 200, "All"]],
                "iDisplayLength": 25,
                responsive:true
            });
        });
    </script>
@endsection