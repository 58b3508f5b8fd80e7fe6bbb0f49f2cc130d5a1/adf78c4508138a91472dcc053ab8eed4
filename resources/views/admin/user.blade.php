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
                                <div class="careerfy-candidate-editor">
                                    <div class="careerfy-content-title"><h2>About Ariana Grande</h2></div>
                                    <div class="careerfy-jobdetail-services">
                                        <ul class="careerfy-row">
                                            <li class="careerfy-column-4">
                                                <i class="careerfy-icon careerfy-salary"></i>
                                                <div class="careerfy-services-text">Offerd Salary <small>£50,000+</small></div>
                                            </li>
                                            <li class="careerfy-column-4">
                                                <i class="careerfy-icon careerfy-social-media"></i>
                                                <div class="careerfy-services-text">Career Level <small>Manager</small></div>
                                            </li>
                                            <li class="careerfy-column-4">
                                                <i class="careerfy-icon careerfy-briefcase"></i>
                                                <div class="careerfy-services-text">Experience <small>7 Years</small></div>
                                            </li>
                                            <li class="careerfy-column-4">
                                                <i class="careerfy-icon careerfy-user"></i>
                                                <div class="careerfy-services-text">Gender <small>Male</small></div>
                                            </li>
                                            <li class="careerfy-column-4">
                                                <i class="careerfy-icon careerfy-network"></i>
                                                <div class="careerfy-services-text">Industry <small>Banking</small></div>
                                            </li>
                                            <li class="careerfy-column-4">
                                                <i class="careerfy-icon careerfy-mortarboard"></i>
                                                <div class="careerfy-services-text">Qualification <small>Master’s Degree</small></div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="careerfy-content-title"><h2>Candidte Description</h2></div>
                                    <div class="careerfy-description">
                                        <p>Hello my name is Ariana Gande Connor and I’m a Financial Supervisor from Netherlands, Rotterdam. In pharetra orci dignissim, blandit mi semper, ultricies diam. Suspendisse malesuada suscipit nunc non volutpat. Sed porta nulla id orci laoreet tempor non consequat enim. Sed vitae aliquam velit. Aliquam ante accumsan ac est.</p>
                                    </div>
                                    <div class="careerfy-description">
                                        <p>Integer vehicula rhoncus molestie. Morbi ornare ipsum sed sem condimentum, et pulvinar tortor luctus. Suspendisse condimentum lorem ut elementum aliquam. Mauris nec erat ut libero vulputate pulvinar. Aliquam ante erat, blandit at pretium et, accumsan ac est. Integer vehicula rhoncus molestie. Morbi ornare ipsum sed sem condimentum, et pulvinar tortor luctus. Suspendisse condimentum lorem ut elementum aliquam. Mauris nec.</p>
                                    </div>
                                </div>
                                <div class="careerfy-candidate-title"> <h2><i class="careerfy-icon careerfy-mortarboard"></i> Education</h2> </div>
                                <div class="careerfy-candidate-timeline">
                                    <ul class="careerfy-row">
                                        <li class="careerfy-column-12">
                                            <small>2002 - 2004</small>
                                            <div class="careerfy-candidate-timeline-text">
                                                <span>Walters University</span>
                                                <h2><a href="#">Masters in Fine Arts</a></h2>
                                                <p>Fussy penguin insect additionally wow absolutely crud meretriciously hastily dalmatian a glowered. outside oh arrogantly vehement.</p>
                                            </div>
                                        </li>
                                        <li class="careerfy-column-12">
                                            <small>2012 - 2015</small>
                                            <div class="careerfy-candidate-timeline-text">
                                                <span>Bachlors in Fine Arts</span>
                                                <h2><a href="#">Tommers College</a></h2>
                                                <p>That one rank beheld bluebird after outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy penguin insect additionally.</p>
                                            </div>
                                        </li>
                                        <li class="careerfy-column-12">
                                            <small>2014 - 2015</small>
                                            <div class="careerfy-candidate-timeline-text">
                                                <span>Imperieal Institute of Art Direction</span>
                                                <h2><a href="#">Diploma in Fine Arts</a></h2>
                                                <p>Outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy penguin insect additionally wow absolutely crud meretriciously  a glowered.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="careerfy-candidate-title"> <h2><i class="careerfy-icon careerfy-social-media"></i> Experince</h2> </div>
                                <div class="careerfy-candidate-timeline">
                                    <ul class="careerfy-row">
                                        <li class="careerfy-column-12">
                                            <small>2010 - 2012</small>
                                            <div class="careerfy-candidate-timeline-text">
                                                <span>Atract Solutions</span>
                                                <h2><a href="#">Development Manager</a></h2>
                                                <p>Arrogantly vehement irresistibly fussy penguin insect additionally wow absolutely crud meretriciously hastily dalmatian a glowered.</p>
                                            </div>
                                        </li>
                                        <li class="careerfy-column-12">
                                            <small>2006 - 2008</small>
                                            <div class="careerfy-candidate-timeline-text">
                                                <span>Bachlors in Fine Arts</span>
                                                <h2><a href="#">Minor Solutions</a></h2>
                                                <p>Far much that one rank beheld bluebird after outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy penguin insect additionally.</p>
                                            </div>
                                        </li>
                                        <li class="careerfy-column-12">
                                            <small>2002 - 2004</small>
                                            <div class="careerfy-candidate-timeline-text">
                                                <span>Abstraxct Max</span>
                                                <h2><a href="#">Self Employed Professional</a></h2>
                                                <p>Outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy penguin insect additionally wow absolutely crud meretriciously</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="jobsearch_progressbar_wrap">
                                    <div class="careerfy-row">
                                        <div class="careerfy-column-12">
                                            <div class="careerfy-candidate-title"> <h2><i class="careerfy-icon careerfy-design-skills"></i> Skills</h2> </div>
                                            <div class="jobsearch_progressbar" data-width="90"><span class="title">Sale Product</span><div class="bar-container " style="background-color:#dbdbdb;height:6px;"><span class="backgroundBar"></span><span class="bar" style="background-color: rgb(19, 181, 234); opacity: 1; width: 90%;"></span></div></div>
                                            <div class="jobsearch_progressbar" data-width="72"><span class="title">Google Seo</span><div class="bar-container " style="background-color:#dbdbdb;height:6px;"><span class="backgroundBar"></span><span class="bar" style="background-color: rgb(19, 181, 234); opacity: 1; width: 72%;"></span></div></div>
                                            <div class="jobsearch_progressbar" data-width="50"><span class="title">Listening</span><div class="bar-container " style="background-color:#dbdbdb;height:6px;"><span class="backgroundBar"></span><span class="bar" style="background-color: rgb(19, 181, 234); opacity: 1; width: 50%;"></span></div></div>
                                            <div class="jobsearch_progressbar" data-width="95"><span class="title">Graphic Design</span><div class="bar-container " style="background-color:#dbdbdb;height:6px;"><span class="backgroundBar"></span><span class="bar" style="background-color: rgb(19, 181, 234); opacity: 1; width: 95%;"></span></div></div>
                                            <div class="jobsearch_progressbar" data-width="75"><span class="title">Business Sense</span><div class="bar-container " style="background-color:#dbdbdb;height:6px;"><span class="backgroundBar"></span><span class="bar" style="background-color: rgb(19, 181, 234); opacity: 1; width: 75%;"></span></div></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="careerfy-candidate-title"> <h2><i class="careerfy-icon careerfy-trophy"></i> Honors &amp; awards</h2> </div>
                                <div class="careerfy-candidate-timeline">
                                    <ul class="careerfy-row">
                                        <li class="careerfy-column-12">
                                            <small>2007</small>
                                            <div class="careerfy-candidate-timeline-text">
                                                <span>Yeartam</span>
                                                <h2><a href="#">Distinguished Service Award</a></h2>
                                                <p>Fussy penguin insect additionally wow absolutely crud meretriciously hastily dalmatian a glowered. outside ignobly allegedly more when vehement.</p>
                                            </div>
                                        </li>
                                        <li class="careerfy-column-12">
                                            <small>2012</small>
                                            <div class="careerfy-candidate-timeline-text">
                                                <span>Goldtech</span>
                                                <h2><a href="#">Robin Milner Young Researcher Award</a></h2>
                                                <p>That one rank beheld bluebird after outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy penguin insect additionally.</p>
                                            </div>
                                        </li>
                                        <li class="careerfy-column-12">
                                            <small>2014</small>
                                            <div class="careerfy-candidate-timeline-text">
                                                <span>Unodoncity</span>
                                                <h2><a href="#">Doctoral Dissertation Award</a></h2>
                                                <p>Outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy penguin insect additionally wow absolutely crud meretriciously a glowered.</p>
                                            </div>
                                        </li>
                                        <li class="careerfy-column-12">
                                            <small>Dec 2016</small>
                                            <div class="careerfy-candidate-timeline-text">
                                                <span>Techzenbam</span>
                                                <h2><a href="#">Programming Languages Achievement</a></h2>
                                                <p>Outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy penguin insect additionally wow absolutely hastily dalmatian a glowered.</p>
                                            </div>
                                        </li>
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