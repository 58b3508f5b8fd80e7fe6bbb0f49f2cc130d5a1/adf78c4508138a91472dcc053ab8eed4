@php    $public='';    if(config('app.env') == 'production')    $public ='public'; @endphp
@extends('layouts.admin.app')
@section('title',$title)
@section('styles')
    {{--<link rel="stylesheet" type="text/css" href="{{asset($public.'/dashboard/css/BsMultiSelect.css')}}"/>--}}
    <link href="{{asset($public.'/css/editor.css')}}" rel="stylesheet">
    <style>
    </style>
@endsection
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

                        <div class="careerfy-column-9" id="results">
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
                                            <label for="test">Add Test</label>
                                            <div class="careerfy-profile-select">
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
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript" src="{{asset($public.'/dashboard/js/popper.js')}}"></script>
    <script type="text/javascript" src="{{asset($public.'/dashboard/js/BsMultiSelect.js')}}"></script>
    <script src="{{asset($public.'/js/editor.js')}}"></script>
    <script>

        let lga = {!! json_encode(__('lgas.index')) !!};

        changeLGA();
        $("#state").change(changeLGA);

        function changeLGA() {
            let state = $('#state').val();
            let html = "";
            for (i = 0; i < lga.length; i++) {
                if (lga[i][0] == state) {
                    html += "<option>" + lga[i][1] + "</option>";
                }
            }
            $('#lga').html(html);
        }

        $(function () {
            $("#description").Editor({
                'print': false,
                'togglescreen': false,
                'rm_format': false,
                'source': false,
                'splchars': false,
                'screeneffects': false,
                'fonts': false,
                'styles': false,
                'advancedoptions': false,
                'extraeffects': false,
                'insertoptions': false
            });
            /* $("#qualification").dashboardCodeBsMultiSelect();*/
        });

        $('#job-form').on('submit', function (e) {
            let description = $("#description").Editor("getText");
            $('#description').val(description);
            return true;
        });
    </script>
@endsection