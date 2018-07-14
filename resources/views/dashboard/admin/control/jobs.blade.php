@php    $public='';    if(config('app.env') == 'production')    $public ='public'; @endphp
@extends('layouts.admin.dashboard')
@section('title',$title)
@section('styles')
@endsection
@section('content')
    <main id="main-container" style="min-height: 192px;">
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
                            <th class="d-none d-sm-table-cell">Created at</th>
                            <th class="d-none d-sm-table-cell">Updated at</th>
                        </tr>
                        </thead>

                    </table>
                </div>
            </div>
        </div>
    </main>

@endsection
@section('scripts')
    <script src="{{asset($public.'/dashboard/js/dataTables.min.js')}}"></script>
    <script src="{{asset($public.'/dashboard/js/buttons.min.js')}}"></script>
    <script src="{{asset($public.'/dashboard/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset($public.'/dashboard/js/jszip.min.js')}}"></script>
    <script src="{{asset($public.'/dashboard/js/pdfmake.min.js')}}"></script>
    <script src="{{asset($public.'/dashboard/js/vfs_fonts.js')}}"></script>
    <script src="{{asset($public.'/dashboard/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset($public.'/dashboard/js/buttons.print.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.data-table').DataTable({
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
                    {data: 'created_at', name: 'created_at'},
                    {data: 'updated_at', name: 'updated_at'}
                ],
                "columnDefs": [{
                    "orderable": false,
                    "targets": [1, 2, 3, 4, 5, 6, 7]
                }],
            });
        });
    </script>
@endsection