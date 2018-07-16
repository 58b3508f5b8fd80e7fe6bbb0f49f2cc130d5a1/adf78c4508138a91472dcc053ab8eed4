@php    $public='';    if(config('app.env') == 'production')    $public ='public'; @endphp
@extends('layouts.admin.dashboard')
@section('title',$title)
@section('styles')
    <link rel="stylesheet" href="{{asset($public.'/dashboard/css/dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset($public.'/dashboard/css/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset($public.'/dashboard/css/responsive.dataTables.min.css')}}">
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
                <form action="{{url('/backend/jobs/add')}}" method="post" id="job-form">
                    {{csrf_field()}}
                    <ul class="careerfy-row careerfy-employer-profile-form">
                        <li class="careerfy-column-12">
                            <label for="title">Title</label>
                            <input id="title" name="title" type="text"
                                   placeholder="Enter the Job Title">
                        </li>
                        <li class="careerfy-column-6">
                            <label for="country">Country</label>
                            <div class="careerfy-profile-select">
                                <select id="country" name="country">
                                    @foreach(__('countries.index') as $country)
                                        <option @if($country=="NIGERIA") selected @endif>{!! $country !!}</option>
                                    @endforeach
                                </select></div>
                        </li>
                        <li class="careerfy-column-6">
                            <label for="state">State</label>
                            <div class="careerfy-profile-select">
                                <select id="state" name="state"
                                        onchange="changeLGA()">
                                    <option selected disabled>Select a state..</option>
                                    @foreach(__('states.index') as $state)
                                        <option>{{$state}}</option>
                                    @endforeach
                                </select></div>
                        </li>
                        <li class="careerfy-column-6">
                            <label for="lga">LGA</label>
                            <div class="careerfy-profile-select">
                                <select id="lga" name="lga">
                                    <option selected disabled>Select LGA</option>
                                </select></div>
                        </li>
                        <li class="careerfy-column-6">
                            <label for="experience">Experience</label>
                            <input id="experience"
                                   name="experience" type="number"
                                   placeholder="Choose Required Experience">
                        </li>
                        <li class="careerfy-column-6">
                            <label for="min-salary">Min. Salary</label>
                            <input id="min-salary"
                                   name="salary_from" type="number"
                                   placeholder="Set Min. salary">
                        </li>
                        <li class="careerfy-column-6">
                            <label for="max-salary">Max. Salary</label>
                            <input id="max-salary"
                                   name="salary_to" type="number"
                                   placeholder="Set Max. Salary">
                        </li>

                        <li class="careerfy-column-6">
                            <label for="post-date">Post date</label>
                            <input id="post-date"
                                   name="post_at" type="date"
                                   placeholder="Select Post Date">
                        </li>
                        <li class="careerfy-column-6">
                            <label for="deadline-date">Deadline date</label>
                            <input id="deadline-date"
                                   name="close_at" type="date"
                                   placeholder="Select Deadline Date">
                        </li>

                        <li class="careerfy-column-6">
                            <label for="qualification">Qualification</label>
                            <select name="qualification[]" id="qualification" multiple="multiple"
                                    class="form-control">
                                <option value="B.Sc.">Bachelors of Science (B.Sc.)</option>
                                <option value="B.Tech">Bachelors of Technology (B.Tech)</option>
                                <option value="B.Eng.">Bachelors of Engineering (B.Eng)</option>
                                <option value="OND">Ordinary National Diploma (OND)</option>
                                <option value="HND">Higher National Diploma (HND)</option>
                                <option value="SSCE">Senior Secondary Certificate Examinations
                                    (SSCE)
                                </option>
                                <option value="FSLC">First School Leaving Certificate</option>
                            </select>


                        </li>
                        <li class="careerfy-column-6">

                            <div class="careerfy-profile-select">
                                <label for="test">Add Test</label>
                                <select id="test" name="test">
                                    <option selected disabled>Choose a test for the Job..</option>
                                    @foreach($tests as $test)
                                        <option value="{{$test->test_id}}">{{$test->title}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </li>
                        <li class="careerfy-column-12">
                            <label for="description">Description</label>
                            <textarea id="description" name="description"></textarea>
                        </li>
                        <li class="careerfy-column-6">
                            <button type="submit" class="btn btn-alt-primary">Submit</button>
                        </li>
                    </ul>
                </form>
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
    <script src="{{asset($public.'/dashboard/js/dataTables.responsive.min.js')}}"></script>

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