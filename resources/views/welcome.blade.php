@php
    $public='';
    if(App::environment('production'))
    $public ='public';
@endphp
@extends('layouts.app')
@section('title','Welcome')
@section('content')
    <!-- Banner -->
    <div class="careerfy-banner careerfy-typo-wrap">
        <span class="careerfy-banner-transparent"></span>
        <div class="careerfy-banner-caption">
            <div class="container">
                <h1>Our people are our Best Assets.</h1>
                <form method="get" action="{{url('/openings/search')}}" class="careerfy-banner-search" id="search">
                    <ul>
                        <li>
                            <input name="search" placeholder="Job Title, Keywords, or Company" type="text">
                        </li>
                        <li>
                            <input name="location" placeholder="City, State or ZIP" type="text">
                            <i class="careerfy-icon careerfy-location"></i>
                        </li>
                        <li>
                            <div class="careerfy-select-style">
                                <select name="qualification">
                                    <option selected disabled>Qualification</option>
                                    <option value="B.Sc.">Bachelors of Science (B.Sc.)</option>
                                    <option value="B.Tech">Bachelors of Technology (B.Tech)</option>
                                    <option value="B.Eng.">Bachelors of Engineering (B.Eng)</option>
                                    <option value="OND">Ordinary National Diploma (OND)</option>
                                    <option value="HND">Higher National Diploma (HND)</option>
                                    <option value="SSCE">Senior Secondary Certificate Examinations (SSCE)</option>
                                    <option value="FSLC">First School Leaving Certificate</option>
                                </select>
                            </div>
                        </li>
                        <li class="careerfy-banner-submit"><input type="submit" value=""> <i
                                    class="careerfy-icon careerfy-search"></i></li>
                    </ul>
                </form>
                <div class="careerfy-banner-btn">
                    <a href="{{route('resume')}}" class="careerfy-bgcolorhover"><i
                                class="careerfy-icon careerfy-up-arrow"></i> Upload
                        Your Resume</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner -->

    <!-- Main Content -->
{{--
    <div class="careerfy-main-content">

        <!-- Main Section -->
        <div class="careerfy-main-section careerfy-counter-full">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <!-- Counter -->
                        <div class="careerfy-counter">
                            <ul class="row">
                                <li class="col-md-4">
                                    <span class="word-counter">123,012</span>
                                    <small>Jobs Added</small>
                                </li>
                                <li class="col-md-4">
                                    <span class="word-counter">187,432</span>
                                    <small>Active Resumes</small>
                                </li>
                                <li class="col-md-4">
                                    <span class="word-counter">140,312</span>
                                    <small>Positions Matched</small>
                                </li>
                            </ul>
                        </div>
                        <!-- Counter -->
                    </div>

                </div>
            </div>
        </div>
--}}
        <!-- Main Section -->

    {{--<!-- Main Section -->
    <div class="careerfy-main-section">
        <div class="container">
            <div class="row">

                <div class="col-md-12 careerfy-typo-wrap">
                    <!-- Fancy Title -->
                    <section class="careerfy-fancy-title">
                        <h2>Popular Job Categories</h2>
                        <p>A better career is out there. We'll help you find it to use.</p>
                    </section>
                    <!-- Categories -->
                    <div class="categories-list">
                        <ul class="careerfy-row">
                            <li class="careerfy-column-3">
                                <i class="careerfy-icon careerfy-engineer"></i>
                                <a href="#">construction / facilities</a>
                                <span>(15 Open Vacancies)</span>
                            </li>
                            <li class="careerfy-column-3">
                                <i class="careerfy-icon careerfy-car"></i>
                                <a href="#">automotive jobs</a>
                                <span>(12 Open Vacancies)</span>
                            </li>
                            <li class="careerfy-column-3">
                                <i class="careerfy-icon careerfy-accounting"></i>
                                <a href="#">Accounting / Finance</a>
                                <span>(8 Open Vacancies)</span>
                            </li>
                            <li class="careerfy-column-3">
                                <i class="careerfy-icon careerfy-hospital"></i>
                                <a href="#">Health Care</a>
                                <span>(5 Open Vacancies)</span>
                            </li>
                            <li class="careerfy-column-3">
                                <i class="careerfy-icon careerfy-antenna"></i>
                                <a href="#">Telecommunications</a>
                                <span>(7 Open Vacancies)</span>
                            </li>
                            <li class="careerfy-column-3">
                                <i class="careerfy-icon careerfy-books"></i>
                                <a href="#">education training</a>
                                <span>(22 Open Vacancies)</span>
                            </li>
                            <li class="careerfy-column-3">
                                <i class="careerfy-icon careerfy-fast-food"></i>
                                <a href="#">Restaurant / food services</a>
                                <span>(30 Open Vacancies)</span>
                            </li>
                            <li class="careerfy-column-3">
                                <i class="careerfy-icon careerfy-business"></i>
                                <a href="#">Sales & Marketing</a>
                                <span>(40 Open Vacancies)</span>
                            </li>
                        </ul>
                    </div>
                    <div class="careerfy-plain-btn"><a href="#">Browse All Categories</a></div>
                    <!-- Categories -->
                </div>

            </div>
        </div>
    </div>--}}
    <!-- Main Section -->

        <!-- Main Section -->
        <div class="careerfy-main-section careerfy-parallex-full">
            <div class="container">
                <div class="row">
                    <aside class="col-md-12 careerfy-typo-wrap">
                        <div class="careerfy-parallex-text text-center">
                            <h2>About Touching Lives</h2>
                            <p>Touching Lives Skills is a team of ebullient, passionate and hardworking group of persons
                                with the sole aim of empowering nations with skills necessary for the alleviation and
                                mitigation of poverty. We are building a prosperous world where people can come into
                                their dignity and pride, and we have skilled, articulate and inspired people with
                                distinct characters whose combined efforts will help the organization actualize its set
                                goal.</p>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <!-- Main Section -->

        <!-- Main Section -->
        <div class="careerfy-main-section careerfy-parallex-full">
            <div class="container">
                <div class="row">
                    <aside class="col-md-6 careerfy-typo-wrap">
                        <div class="careerfy-parallex-text">
                            <h2>Our Hiring Criteria</h2>
                            <p>In view of the above, we are looking to hire persons who are skilled, motivated and
                                passionate about humanity into our team. We have some core values which we hold in high
                                esteem expected of our potential employees and they are ...</p>
                            <a href="{{url('criteria')}}"
                               class="careerfy-static-btn careerfy-bgcolor"><span>Read more</span></a>
                        </div>
                    </aside>
                    <aside class="col-md-6 careerfy-typo-wrap">
                        <div class="careerfy-right"><img src="{{asset($public.'/png/parallex-thumb-1.png')}}" alt="">
                        </div>
                    </aside>

                </div>
            </div>
        </div>
        <!-- Main Section -->

        <!-- Main Section -->
        <div class="careerfy-main-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 careerfy-typo-wrap">
                        <!-- Fancy Title -->
                        <section class="careerfy-fancy-title">
                            <h2>Featured Jobs Listings</h2>
                            <p>A better career is out there. We'll help you find it to use.</p>
                        </section>
                        <!-- Featured Jobs Listings -->
                        <div class="careerfy-job-listing careerfy-featured-listing">
                            <ul class="careerfy-row">
                                @foreach($jobs as $job)
                                    <li class="careerfy-column-6">
                                        <div class="careerfy-table-layer">
                                            <div class="careerfy-table-row">
                                                <figure><a href="#"><img
                                                                src="{{asset($public.'/jpg/featured-listing-1.jpg')}}"
                                                                alt=""></a></figure>
                                                <div class="careerfy-featured-listing-text">
                                                    <h2><a href="#">{{$job->title}}</a></h2>
                                                    <a href="#" class="careerfy-like-list"><i
                                                                class="careerfy-icon careerfy-heart"></i></a>
                                                    <time>
                                                        Deadline: {{date('jS M, Y', strtotime($job->close_at))}}</time>
                                                    <div class="careerfy-featured-listing-options">
                                                        <ul>
                                                            <li><i class="careerfy-icon careerfy-maps-and-flags"></i> <a
                                                                        href="#">{{$job->state}},</a> <a
                                                                        href="#">{{$job->country}}</a></li>
                                                            <li>
                                                                <i class="careerfy-icon careerfy-filter-tool-black-shape"></i>
                                                                <a href="#">{{$job->qualification}}</a></li>
                                                        </ul>
                                                        <a href="#" class="careerfy-option-btn">Apply</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Featured Jobs Listings -->
                        <div class="careerfy-plain-btn"><a href="{{url('/openings')}}">View All Jobs</a></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Main Section -->

        <!-- Main Section -->
        <div class="careerfy-main-section careerfy-testimonial-full">
            <div class="container-fluid">
                <div class="row">

                    <div class="careerfy-typo-wrap">
                        <div class="careerfy-testimonial-section">
                            <div class="row">
                                <aside class="col-md-5"><img src="{{asset($public.'/jpg/testimonial-thumb-1.jpg')}}"
                                                             alt=""></aside>
                                <aside class="col-md-7">
                                    <div class="careerfy-testimonial-slider">
                                        <div class="careerfy-testimonial-slide-layer">
                                            <div class="careerfy-testimonial-wrap">
                                                <p>I just got a job that I applied for via JobSearch! I used the site
                                                    all the time during my job hunt.</p>
                                                <div class="careerfy-testimonial-text">
                                                    <h2>Richard Anderson</h2>
                                                    <span>Nevada, USA</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="careerfy-testimonial-slide-layer">
                                            <div class="careerfy-testimonial-wrap">
                                                <p>I just got a job that I applied for via JobSearch! I used the site
                                                    all the time during my job hunt.</p>
                                                <div class="careerfy-testimonial-text">
                                                    <h2>Richard Anderson</h2>
                                                    <span>Nevada, USA</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Main Section -->

        {{--<!-- Main Section -->
        <div class="careerfy-main-section">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <!-- Fancy Title -->
                        <section class="careerfy-fancy-title">
                            <h2>From Our Blogs</h2>
                            <p>A better career is out there. We'll help you find it to use.</p>
                        </section>
                        <!-- Blog -->
                        <div class="careerfy-blog careerfy-blog-grid">
                            <ul class="row">
                                <li class="col-md-4">
                                    <figure><a href="#"><img src="{{asset($public.'/jpg/blog-grid-1.jpg')}}" alt=""></a>
                                    </figure>
                                    <div class="careerfy-blog-grid-text">
                                        <div class="careerfy-blog-tag"><a href="#">Culture</a></div>
                                        <h2><a href="#">Are You Paid Fairly? See Your Market Worth in Seconds</a></h2>
                                        <ul class="careerfy-blog-grid-option">
                                            <li>BY <a href="#" class="careerfy-color">Click mag staff</a></li>
                                            <li>
                                                <time datetime="2008-02-14 20:00">OCT 6, 2016</time>
                                            </li>
                                        </ul>
                                        <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
                                            cum soluta nobis est.</p>
                                        <a href="#" class="careerfy-read-more careerfy-bgcolor">Read Articles</a>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <figure><a href="#"><img src="{{asset($public.'/jpg/blog-grid-2.jpg')}}" alt=""></a>
                                    </figure>
                                    <div class="careerfy-blog-grid-text">
                                        <div class="careerfy-blog-tag"><a href="#">ENTERTAINMENT</a></div>
                                        <h2><a href="#">Are You Paid Fairly? See Your Market Worth in Seconds</a></h2>
                                        <ul class="careerfy-blog-grid-option">
                                            <li>BY <a href="#" class="careerfy-color">Click mag staff</a></li>
                                            <li>
                                                <time datetime="2008-02-14 20:00">OCT 6, 2016</time>
                                            </li>
                                        </ul>
                                        <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
                                            cum soluta nobis est.</p>
                                        <a href="#" class="careerfy-read-more careerfy-bgcolor">Read Articles</a>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <figure><a href="#"><img src="{{asset($public.'/jpg/blog-grid-3.jpg')}}" alt=""></a>
                                    </figure>
                                    <div class="careerfy-blog-grid-text">
                                        <div class="careerfy-blog-tag"><a href="#">Living</a></div>
                                        <h2><a href="#">Are You Paid Fairly? See Your Market Worth in Seconds</a></h2>
                                        <ul class="careerfy-blog-grid-option">
                                            <li>BY <a href="#" class="careerfy-color">Click mag staff</a></li>
                                            <li>
                                                <time datetime="2008-02-14 20:00">OCT 6, 2016</time>
                                            </li>
                                        </ul>
                                        <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
                                            cum soluta nobis est.</p>
                                        <a href="#" class="careerfy-read-more careerfy-bgcolor">Read Articles</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Main Section -->--}}

        {{--<!-- Main Section -->
        <div class="careerfy-main-section careerfy-parallex-text-full">
            <div class="container">
                <div class="row">

                    <aside class="col-md-6 careerfy-typo-wrap">
                        <div class="careerfy-parallex-text careerfy-logo-text">
                            <h2>Millions of jobs. <br> Find the one that’s right for you.</h2>
                            <p>Search all the open positions on the web. Get your own personalized salary estimate. Read
                                reviews on over 600,000 companies worldwide. The right job is out there. Use JobSearch
                                to find it.</p>
                            <a href="#" class="careerfy-static-btn careerfy-bgcolor"><span>Search Jobs</span></a>
                        </div>
                    </aside>
                    <aside class="col-md-6 careerfy-typo-wrap">
                        <div class="careerfy-logo-thumb"><img src="{{asset($public.'/jpg/multiple-logos.jpg')}}" alt="">
                        </div>
                    </aside>

                </div>
            </div>
        </div>
        <!-- Main Section -->
--}}
    </div>
    <!-- Main Content -->

@endsection