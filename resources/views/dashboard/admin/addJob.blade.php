@php    $public='';    if(config('app.env') == 'production')    $public ='public'; @endphp
@extends('layouts.dashboard')
@section('title',$title)
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset($public.'/dashboard/css/BsMultiSelect.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset($public.'/dashboard/css/jquery.auto-complete.min.css')}}"/>
    <link href="{{asset($public.'/css/editor.css')}}" rel="stylesheet">
    <style>
        .form-group .badge {
            display: flex;
            align-items: center;
            padding: 2px 3px;
            margin-right: 4px;
            height: 22px;
            line-height: 18px;
            color: #fff;
            font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 600;
            background-color: #3f9ce8;
            border: none;
        }

        .form-group button{
            font-size: 13px;
            color: rgba(255,255,255,.5);
            margin-left:4px;
        }
        .form-group span{
            margin-left: 4px;
        }
    </style>
@endsection
@section('content')
    <main id="main-container" style="padding-top:0px;min-height: 258px;">
        <div class="content content-full">
            <h2 class="content-heading">Add a Job</h2>
            @if(!isset($error))
                <div class="col-md-12">
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title"> Fill the form to add a Job..</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <form action="{{url('/backend/jobs/add')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material">
                                            <input class="form-control" id="title"
                                                   name="title" type="text">
                                            <label for="title">Title</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material ">
                                            <select class="form-control" id="country" name="country">
                                                @foreach(__('countries.index') as $country)
                                                    <option @if($country=="NIGERIA") selected @endif>{!! $country !!}</option>
                                                @endforeach
                                            </select>
                                            <label for="country">Country</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material ">
                                            <select class="form-control" id="state" name="state">
                                                <option selected disabled>Select a state..</option>
                                                @foreach(__('states.index') as $state)
                                                    <option>{{$state}}</option>
                                                @endforeach
                                            </select>
                                            <label for="state">State</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material ">
                                            <select class="form-control" id="lga" onchange="changeLGA()">
                                                <option selected disabled>Select LGA</option>
                                            </select>
                                            <label for="lga">LGA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material ">
                                            <input class="form-control js-tags-input" id="experience"
                                                   name="experience" type="number"
                                                   placeholder="Choose Required Experience">
                                            <label for="experience">Experience</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material ">
                                            <select name="qualification" id="qualification" class="form-control"
                                                    multiple="multiple" style="display: none;">
                                                <option value="B.Sc.">Bachelors of Science (B.Sc.)</option>
                                                <option value="B.Tech">Bachelors of Technology (B.Tech)</option>
                                                <option value="B.Eng.">Bachelors of Engineering (B.Eng)</option>
                                                <option value="OND">Ordinary National Diploma (OND)</option>
                                                <option value="HND">Higher National Diploma (HND)</option>
                                                <option value="SSCE">Senior Secondary Certificate Examinations (SSCE)
                                                </option>
                                                <option value="FSLC">First School Leaving Certificate</option>

                                            </select>
                                            <label for="qualification">Qualification</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material">
                                            <textarea id="description" name="description"></textarea>
                                            <label for="textEditor">Description</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material ">
                                            <select class="form-control" id="test" name="test">
                                                <option selected disabled>Choose a test for the Job..</option>
                                                @foreach($tests as $test)
                                                    <option data-toggle="tooltip" data-container="#tooltip_container"
                                                            title="{{$test->description}}"
                                                            value="{{$test->test_id}}">{{$test->title}}</option>
                                                @endforeach
                                            </select>
                                            <label for="state">Add Test</label>
                                            <div id="tooltip_container"></div>
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

            @else
                <div class="card col-xs-12 col-md-12">
                    <div class="alert alert-danger text-center">
                        <h2>{{$error}}</h2>
                    </div>
                </div>
            @endif
        </div>
    </main>
@endsection
@section('scripts')
    <script type="text/javascript" src="{{asset($public.'/dashboard/js/BsMultiSelect.js')}}"></script>
    <script type="text/javascript" src="{{asset($public.'/dashboard/js/jquery.auto-complete.min.js')}}"></script>
    <script src="{{asset($public.'/js/editor.js')}}"></script>
    <script>

        var lga = {!! json_encode(__('lgas.index')) !!};

        changeLGA();
        $("#state").change(changeLGA);

        function changeLGA() {
            var state = $('#state').val();
            var html = "";
            for (i = 0; i < lga.length; i++) {
                if (lga[i][0] == state) {
                    html += "<option>" + lga[i][1] + "</option>";
                }
            }
            $('#lga').html(html);
        }

        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
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
            $("#qualification").dashboardCodeBsMultiSelect();
        });

        $('#job-form').on('submit', function (e) {
            var description = $("#description").Editor("getText");
            $('#description').val(description);

        });
    </script>
@endsection