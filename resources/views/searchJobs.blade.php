@php
    $public='';
    if(App::environment('production'))
    $public ='public';
@endphp
@extends('layouts.app')
@section('styles')
    <style>
        li .disabled, li:hover .disabled, li:focus .disabled {
            pointer-events: none !important;
            cursor: default !important;
            z-index: 2 !important;
            color: #23527c !important;
            background-color: #eee !important;
            border-color: #ddd !important;
        }

    </style>
@endsection
@section('title',$title)
@section('content')
    <div class="container-fluid">
        <div class="careerfy-subheader careerfy-subheader-without-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="careerfy-page-title">
                            <h1>Companies</h1>
                            <p>Thousands of prestigious employers for you, search for a recruiter right now.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
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
                        <div class="careerfy-column-12">
                            <div class="careerfy-typo-wrap">
                                <div class="careerfy-employer-dashboard" id="jobs">
                                    <div class="careerfy-employer-box-section">
                                        <!-- Profile Title -->
                                        <div class="careerfy-profile-title">
                                            <h2>Available Jobs</h2>
                                            <form action="{{url('/site/jobs/search')}}" method="get"
                                                  class="careerfy-employer-search">
                                                <input placeholder="Search jobs"
                                                       name="search" value="{{$search or null}}"
                                                       type="text">
                                                <input value="" type="submit">
                                                <i class="careerfy-icon careerfy-search"></i>
                                            </form>
                                        </div>
                                        <div class="careerfy-filterable">
                                            <h2>Showing {{$page*$per - $per}}
                                                to {{$page*$per < $pages ? $page*$per : $pages}}
                                                of {{$pages }} results</h2>
                                        </div>
                                        <!-- Manage Jobs -->
                                        <div class="careerfy-managejobs-list-wrap">
                                            <div class="careerfy-managejobs-list">
                                                <!-- Manage Jobs Header -->
                                                <div class="careerfy-table-layer careerfy-managejobs-thead">
                                                    <div class="careerfy-table-row">
                                                        <div class="careerfy-table-cell">Job Title</div>
                                                        <div class="careerfy-table-cell">Applications</div>
                                                        <div class="careerfy-table-cell">Shortlisted</div>
                                                        <div class="careerfy-table-cell">Status</div>
                                                        <div class="careerfy-table-cell"></div>
                                                    </div>
                                                </div>
                                                <!-- Manage Jobs Body -->
                                                @foreach($jobs as $job)
                                                    <li class="careerfy-column-12">
                                                        <div class="careerfy-applied-jobs-wrap">
                                                            <div class="careerfy-applied-jobs-text">
                                                                <div class="careerfy-applied-jobs-left col-xs-12">
                                                                    <h2><a href="#">{{$job->title}}</a>
                                                                        <div class="pull-right">
                                                                            <a class="text-success btn"
                                                                               href="{{route('login')}}"><i
                                                                                        class="fa fa-plane"></i> Apply
                                                                                Now
                                                                            </a>
                                                                        </div>
                                                                    </h2>
                                                                    <?php
                                                                    $description = strip_tags($job->description);
                                                                    $description = explode(' ', $description);
                                                                    $description = array_splice($description, 0, 100);
                                                                    $description = implode(' ', $description) . '...';
                                                                    ?>
                                                                    <span>{{$description}}</span>
                                                                    <ul>
                                                                        <li><i class="fa fa-map-marker"></i>
                                                                            {{$job->state.', '.$job->lga}}
                                                                        </li>
                                                                        <li>
                                                                            <i class="careerfy-icon careerfy-filter-tool-black-shape"></i>
                                                                            <a href="#">Experience: {{$job->experience}}</a>
                                                                        </li>
                                                                        <li>
                                                                            <i class="careerfy-icon careerfy-calendar"></i>
                                                                            Posted: {{date('jS M, Y', strtotime($job->post_at))}}
                                                                        </li>
                                                                        <li>
                                                                            <i class="careerfy-icon careerfy-calendar"></i>
                                                                            Deadline: {{date('jS M, Y', strtotime($job->close_at))}}
                                                                        </li>
                                                                    </ul>

                                                                </div>
                                                                {{--<a href="#" class="careerfy-savedjobs-links"><i
                                                                            class="careerfy-icon careerfy-view"></i></a>--}}
                                                            </div>
                                                        </div>
                                                    </li>
                                            @endforeach
                                            <!-- Manage Jobs Body -->
                                            </div>
                                        </div>
                                        <!-- Pagination -->
                                        <div class="col-xs-6 col-sm-4 careerfy-employer-search">
                                            <label>Results per page: </label>
                                            <select id="per-page">
                                                <option value="10" @if($per==10) selected @endif>10 results</option>
                                                <option value="20" @if($per==20) selected @endif>20 results</option>
                                                <option value="30" @if($per==30) selected @endif>30 results</option>
                                                <option value="40" @if($per==40) selected @endif>40 results</option>
                                                <option value="50" @if($per==50) selected @endif>50 results</option>
                                                <option value="100" @if($per==100) selected @endif>100 results</option>
                                            </select>
                                        </div>
                                        <div class="careerfy-pagination-blog">
                                            <ul class="page-numbers pagination">
                                                <li>
                                                    <a class="prev page-numbers @if($page<=1) disabled @endif"
                                                       href="javascript:void(0)"
                                                       onclick="@if($page>1) @php $prev=$page-1; @endphp
                                                               var per=document.getElementById('per-page').value;
                                                               window.location='{{url("/backend/jobs/$prev")}}/'+per;
                                                       @else return false; @endif"><span><i
                                                                    class="careerfy-icon careerfy-arrows4"></i></span></a>
                                                </li>
                                                <li>
                                                    <strong class="text-muted fa fa-ellipsis-h"></strong>
                                                </li>
                                                @for($pg=1; $pg<=$pages;$pg++)
                                                    @if(($pg>$page-3 && $pg<$page+3) || ($page<=4 && $pg<=4))
                                                        @php
                                                            if(isset($search)){
                                                                $issearch="/search";
                                                                $query='?'.urlencode($search);
                                                            }
                                                            else {
                                                                $issearch="";
                                                                $query="";
                                                            }
                                                        @endphp
                                                        <li>
                                                            <a href="javascript:void(0)"
                                                               onclick="var per=document.getElementById('per-page').value;window.location='{{url("/backend/jobs$issearch/$pg")}}/'+per+'{{$query}}';"
                                                               class="page-numbers @if($pg==$page) current @endif">{{str_pad($pg,2,"0",STR_PAD_LEFT)}}</a>
                                                        </li>
                                                    @endif
                                                @endfor
                                                <li>
                                                    <strong class="text-muted fa fa-ellipsis-h"></strong>
                                                </li>
                                                <li>
                                                    <a class="next page-numbers @if($page==$pages) disabled @endif"
                                                       href="javascript:void(0)"
                                                       onclick="@if($page!=$pages) @php $next=$page+1; @endphp
                                                               var per=document.getElementById('per-page').value;
                                                               window.location='{{url("/backend/jobs/$next")}}/'+per;
                                                       @else return false; @endif"><span><i
                                                                    class="careerfy-icon careerfy-arrows4"></i></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="job-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="background-color: #fff;">
                <div class="modal-header" style="background-color:#2c3e50;">
                    <button type="button" class="close" data-dismiss="modal" style="color: #ffffff;">&times;</button>
                    <h4 class="modal-title" style="color: #ffffff;">Schedule Job</h4>
                </div>
                <div class="modal-body pull-left" style="background-color: #f5f5f5; float:left;">

                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset($public.'/js/loadingoverlay.min.js')}}"></script>
    <script src="{{asset($public.'/js/editor.js')}}"></script>
    <script>
        $('#job-modal').on('shown.bs.modal', function () {

            let options = {
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
            let elements = ['#job', '#option-a', '#option-b', '#option-c', '#option-d'];

            for (let i = 0; i < elements.length; i++) {
                let content = $(elements[i]).val();

                $(elements[i]).Editor(options);
                $(elements[i]).Editor("setText", content);
            }


            $('#job-form').on('submit', function (e) {
                e.preventDefault();
                $(".modal-content").LoadingOverlay("show");
                for (let i = 0; i < elements.length; i++) {
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
                        $('#job-modal').modal('hide');
                        $('#jobs').fadeOut(500).html(result.html).fadeIn(800);
                        swal(result.status, {
                            icon: result.state,
                        });
                        $('.dataTable').DataTable();
                    },
                    error: function () {
                        swal("Oops!", 'Sorry, an error occurred', 'danger');
                        $(".modal-content").LoadingOverlay("hide");
                        $('#job-modal').modal('hide');
                    }
                });
                return false;
            });
        });

        function editJob(id, jid) {
            let data = {'id': id};
            $.get('/backend/jobs/view/edit/' + jid, data, function (result) {
                $('#job-modal .modal-body').html(result.html);
                $('#job-modal').modal('show');
            }).fail(function () {
                swal("Oops!", "Sorry an error occurred..", 'danger');
            });
        }

        function deleteJob(id, qid) {
            swal({
                title: "Are you sure to delete this job?",
                text: "Once deleted, you will not be able to recover this job!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        let data = {'id': id};
                        $.post('/backend/jobs/delete/' + qid, data, function (result) {
                            $('#jobs').fadeOut(500);
                            $('#jobs').html(result.html);
                            swal(result.status, {
                                icon: result.state,
                            });
                            $('#jobs').fadeIn(800);
                            $('.dataTable').DataTable();
                        });

                    } else {
                        swal("Oops! The job was not deleted..");
                    }
                });
        }
    </script>
@endsection