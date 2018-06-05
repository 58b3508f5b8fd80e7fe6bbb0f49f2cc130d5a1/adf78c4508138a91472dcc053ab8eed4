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
                                                    src="{{Storage::url(Auth::user()->avatar_location)}}" alt=""></a>
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
                                <div class="careerfy-content-title">
                                    <h2>About {{"$user->first_name $user->last_name"}}</h2>
                                </div>
                                <div class="careerfy-candidate careerfy-candidate-grid">
                                    <ul class="careerfy-row">
                                        <li class="careerfy-column-12">
                                            <figure>
                                                <a href="#" class="careerfy-candidate-grid-thumb"><img src="{{asset($public.'/jpg/candidates-grid-thumb-2.jpg')}}" alt=""> <span class="careerfy-candidate-grid-status careerfy-yellow"></span></a>
                                                <figcaption>
                                                    <h2><a href="#">{{"$user->first_name $user->last_name"}}</a></h2>
                                                    <p>{{$user->job_title}}</p>
                                                    <span>{{"$user->state, $user->lga"}}</span>
                                                </figcaption>
                                            </figure>
                                        </li>
                                    </ul>
                                </div>
                                <div class="careerfy-candidate-editor">
                                    <div class="careerfy-jobdetail-services">
                                        <ul class="careerfy-row">
                                            <li class="careerfy-column-4">
                                                <i class="careerfy-icon careerfy-salary"></i>
                                                <div class="careerfy-services-text">Current Salary
                                                    <small>&#8358;{{number_format($user->current_salary)}}</small>
                                                </div>
                                            </li>
                                            <li class="careerfy-column-4">
                                                <i class="careerfy-icon careerfy-salary"></i>
                                                <div class="careerfy-services-text">Expected Salary
                                                    <small>&#8358;{{number_format($user->expected_salary)}}</small>
                                                </div>
                                            </li>
                                            <li class="careerfy-column-4">
                                                <i class="careerfy-icon careerfy-briefcase"></i>
                                                <div class="careerfy-services-text">Experience
                                                    <small>{{$user->experience}} years</small>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="careerfy-content-title"><h2>Candidte Description</h2></div>
                                    <div class="careerfy-description">
                                        <p>{!! nl2br($user->description) !!}}</p>
                                    </div>
                                </div>
                                <div class="careerfy-candidate-title"><h2><i
                                                class="careerfy-icon careerfy-mortarboard"></i> Education</h2></div>
                                <div class="careerfy-candidate-timeline">
                                    <ul class="careerfy-row">
                                        @foreach($educations as $education)
                                            <li class="careerfy-column-12">
                                                <small>{{date('Y', strtotime($education->started_at)) .' - ' .date('Y', strtotime($education->finished_at))}}</small>
                                                <div class="careerfy-candidate-timeline-text">
                                                    <span>{{$education->institution}}</span>
                                                    <h2>
                                                        <a href="#">{{"$education->qualification in $education->title"}}</a>
                                                    </h2>
                                                    <p>{{$education->description}}</p>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="careerfy-candidate-title"><h2><i
                                                class="careerfy-icon careerfy-social-media"></i> Experince</h2></div>
                                <div class="careerfy-candidate-timeline">
                                    <ul class="careerfy-row">
                                        @foreach($experiences as $experience)
                                            <li class="careerfy-column-12">
                                                <small>{{date('Y', strtotime($experience->started_at)).' - '.date('Y', strtotime($experience->finished_at))}}</small>
                                                <div class="careerfy-candidate-timeline-text">
                                                    <span>{{$experience->company}}</span>
                                                    <h2><a href="#">{{$experience->title}}</a></h2>
                                                    <p>{{$experience->description}}</p>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="jobsearch_progressbar_wrap">
                                    <div class="careerfy-row">
                                        <div class="careerfy-column-12">
                                            <div class="careerfy-candidate-title"><h2><i
                                                            class="careerfy-icon careerfy-design-skills"></i> Skills
                                                </h2></div>

                                            @foreach($skills as $skill)
                                                <div class="jobsearch_progressbar" data-width="{{$skill->percentage}}">
                                                    <span class="title">{{$skill->title}} ({{$skill->percentage}}
                                                        %)</span>
                                                    <div class="bar-container "
                                                         style="background-color:#dbdbdb;height:6px;">
                                                        <span class="backgroundBar"></span>
                                                        <span class="bar"
                                                              style="background-color: rgb(19, 181, 234); opacity: 1; width: {{$skill->percentage}}%;"></span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="careerfy-candidate-title"><h2><i class="careerfy-icon careerfy-trophy"></i>
                                        Honors &amp; awards</h2></div>
                                <div class="careerfy-candidate-timeline">
                                    <ul class="careerfy-row">
                                        @foreach($honors as $honor)
                                            <li class="careerfy-column-12">
                                                <small>{{$honor->received_at}}</small>
                                                <div class="careerfy-candidate-timeline-text">
                                                    <span>{{$honor->company}}</span>
                                                    <h2><a href="#">{{$honor->title}}</a></h2>
                                                    <p>{{$honor->description}}</p>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
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