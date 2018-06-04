@php
    $public='';
    if(App::environment('production'))
    $public ='public';
@endphp
@extends('layouts.admin')
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
                        <aside class="careerfy-column-3">
                            <div class="careerfy-typo-wrap">
                                <div class="careerfy-employer-dashboard-nav">
                                    <figure>
                                        <a href="#" class="employer-dashboard-thumb"><img
                                                    src="png/employer-dashboard-1.png" alt=""></a>
                                        <figcaption>
                                            <div class="careerfy-fileUpload">
                                                <span><i class="careerfy-icon careerfy-add"></i> Upload Photo</span>
                                                <input class="careerfy-upload" type="file">
                                            </div>
                                            <h2>Graveholdings</h2>
                                        </figcaption>
                                    </figure>
                                    <ul>
                                        <li><a href="employer-dashboard-profile-seting.html"><i
                                                        class="careerfy-icon careerfy-user"></i> Company Profile</a>
                                        </li>
                                        <li class="active"><a href="#employer-dashboard-manage-jobs.html"><i
                                                        class="careerfy-icon careerfy-briefcase-1"></i> Manage Jobs</a>
                                        </li>
                                        <li><a href="employer-dashboard-transactions.html"><i
                                                        class="careerfy-icon careerfy-salary"></i> Transactions</a></li>
                                        <li><a href="employer-dashboard-resumes.html"><i
                                                        class="careerfy-icon careerfy-heart"></i> Shortlisted
                                                Resumes</a></li>
                                        <li><a href="employer-dashboard-packages.html"><i
                                                        class="careerfy-icon careerfy-credit-card-1"></i> Packages</a>
                                        </li>
                                        <li><a href="employer-dashboard-newjob.html"><i
                                                        class="careerfy-icon careerfy-plus"></i> Post a New Job</a></li>
                                        <li><a href="employer-dashboard-manage-jobs.html"><i
                                                        class="careerfy-icon careerfy-alarm"></i> Job Alerts</a></li>
                                        <li><a href="candidate-dashboard-changed-password.html"><i
                                                        class="careerfy-icon careerfy-multimedia"></i> Change
                                                Password</a></li>
                                        <li><a href="index-2.html"><i class="careerfy-icon careerfy-logout"></i> Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                        <div class="careerfy-column-9">
                            <div class="careerfy-typo-wrap">
                                <div class="careerfy-employer-dasboard">
                                    <div class="careerfy-employer-box-section">
                                        <!-- Profile Title -->
                                        <div class="careerfy-profile-title">
                                            <h2>Manage Jobs</h2>
                                            <form class="careerfy-employer-search">
                                                <input value="Search orders"
                                                       onblur="if(this.value == '') { this.value ='Search orders'; }"
                                                       onfocus="if(this.value =='Search orders') { this.value = ''; }"
                                                       type="text">
                                                <input value="" type="submit">
                                                <i class="careerfy-icon careerfy-search"></i>
                                            </form>
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
                                                    <div class="careerfy-table-layer careerfy-managejobs-tbody">
                                                        <div class="careerfy-table-row">
                                                            <div class="careerfy-table-cell">
                                                                <h6><a href="#">{{$job->title}}</a></h6>
                                                                <ul>
                                                                    <li><i class="careerfy-icon careerfy-calendar"></i>
                                                                        Created:
                                                                        <span>{{date('jS M, Y', strtotime($job->post_at))}}</span>
                                                                    </li>
                                                                    <li><i class="careerfy-icon careerfy-calendar"></i>
                                                                        Expiry:
                                                                        <span>{{date('jS M, Y', strtotime($job->close_at))}}</span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="careerfy-icon careerfy-maps-and-flags"></i>
                                                                        {{$job->state.', '.$job->lga}}
                                                                    </li>
                                                                    {{--<li>
                                                                        <i class="careerfy-icon careerfy-filter-tool-black-shape"></i>
                                                                        <a href="#">Web Developer</a></li>--}}
                                                                </ul>
                                                            </div>
                                                            <div class="careerfy-table-cell"><a
                                                                        href="{{url("/backend/applicants/$job->job_id")}}"
                                                                        class="careerfy-managejobs-appli">{{$job->count}}
                                                                    Application(s)</a></div>
                                                            <div class="careerfy-table-cell"><a
                                                                        href="{{url("/backend/applicants/$job->job_id")}}"
                                                                        class="careerfy-managejobs-appli">{{$job->count}}
                                                                    Shortlisted</a></div>

                                                            <div class="careerfy-table-cell"><span
                                                                        class="careerfy-managejobs-option">Pending</span>
                                                            </div>
                                                            <div class="careerfy-table-cell">
                                                                <div class="careerfy-managejobs-links">
                                                                    <a href="#" class="careerfy-icon careerfy-view"></a>
                                                                    <a href="#" class="careerfy-icon careerfy-edit"></a>
                                                                    <a href="#"
                                                                       class="careerfy-icon careerfy-rubbish"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            @endforeach
                                            <!-- Manage Jobs Body -->
                                            </div>
                                        </div>
                                        <!-- Pagination -->
                                        <div class="col-xs-6 col-sm-4 careerfy-employer-search">
                                            <label>Results per page: </label>
                                            <select id="per-page">
                                                <option value="10">10 results</option>
                                                <option value="20">20 results</option>
                                                <option value="30">30 results</option>
                                                <option value="40">40 results</option>
                                                <option value="50">50 results</option>
                                                <option value="100">100 results</option>
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
                                                        <li>
                                                            <a href="javascript:void(0)"
                                                               onclick="var per=document.getElementById('per-page').value;window.location='{{url("/backend/jobs/$pg")}}/'+per;"
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
            <!-- Main Section -->

        </div>
    </div>
@endsection