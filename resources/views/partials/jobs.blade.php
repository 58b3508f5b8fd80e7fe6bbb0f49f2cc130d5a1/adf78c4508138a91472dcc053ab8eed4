<div class="row">
    <div class="col-md-12">

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


        <!-- Main Section -->
        <div class="careerfy-main-section careerfy-dashboard-full">
            <div class="container">
                <div class="row">
                    @include('includes.sidebar',['jobs_sidebar'=>true])
                    <div class="careerfy-column-9">
                        <div class="careerfy-typo-wrap">
                            <div class="careerfy-employer-box-section">
                                <div class="careerfy-profile-title">
                                    <h2>Applied Jobs</h2>
                                    <form class="careerfy-employer-search">
                                        <input value="Search orders" type="text">
                                        <input value="" type="submit">
                                        <i class="careerfy-icon careerfy-search"></i>
                                    </form>
                                </div>
                                <div class="careerfy-applied-jobs">
                                    <ul class="careerfy-row">
                                        @foreach($jobs as $job)
                                            <li class="careerfy-column-12">
                                                <div class="careerfy-applied-jobs-wrap">
                                                    <a href="#" class="careerfy-applied-jobs-thumb"><img
                                                                src="jpg/candidate-01.jpg" alt=""></a>
                                                    <div class="careerfy-applied-jobs-text">
                                                        <div class="careerfy-applied-jobs-left">
                                                            <h2><a href="#">{{$job->title}}</a></h2>
                                                            <span>{{$job->description}}</span>
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
                                                        <a href="#"
                                                           class="careerfy-savedjobs-links">{{strtoupper($job->status)}}</a>
                                                        {{--<a href="#" class="careerfy-savedjobs-links"><i
                                                                    class="careerfy-icon careerfy-view"></i></a>--}}
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- Pagination -->
                                <div class="careerfy-pagination-blog">
                                    <ul class="page-numbers">
                                        <li><a class="prev page-numbers" href="#"><span><i
                                                            class="careerfy-icon careerfy-arrows4"></i></span></a>
                                        </li>
                                        <li><span class="page-numbers current">01</span></li>
                                        <li><a class="page-numbers" href="#">02</a></li>
                                        <li><a class="page-numbers" href="#">03</a></li>
                                        <li><a class="page-numbers" href="#">04</a></li>
                                        <li><a class="next page-numbers" href="#"><span><i
                                                            class="careerfy-icon careerfy-arrows4"></i></span></a>
                                        </li>
                                    </ul>
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