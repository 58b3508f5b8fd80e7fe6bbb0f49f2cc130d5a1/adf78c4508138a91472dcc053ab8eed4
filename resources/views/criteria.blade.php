@php
    $public='';
    if(App::environment('production'))
    $public ='public';
@endphp
@extends('layouts.app')
@section('title',$title)
@section('content')
    <!-- Main Content -->
    <div class="careerfy-main-content">

        <!-- Main Section -->
        <div class="careerfy-main-section careerfy-about-text-full">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 careerfy-typo-wrap">
                        <div class="careerfy-about-text">
                            <h2>Our Hiring Criteria</h2>
                            <p>In view of the above, we are looking to hire persons who are skilled, motivated and
                                passionate about humanity into our team. We have some core values which we hold in high
                                esteem expected of our potential employees and they are listed below.</p>
                            <ul class="list-group">
                                <li class="list-group-item"><strong>Ethical Values:</strong> Applicants must possess good, strong and reliable
                                    ethical values and conduct necessary for peaceful relationship with other staff and
                                    trainees in the work environment. Integrity, honesty and loyalty are important
                                    values expected of staff in this organization.
                                </li>
                                <li class="list-group-item"><strong>Capabilities:</strong> Interested persons must be capable of carrying out
                                    their duties exceptionally well with the vision of the organization in mind.
                                </li>
                                <li class="list-group-item"><strong>Cultural Fit:</strong> Applicants should be able to fit into the culture and
                                    lifestyle of the team and be ready to adapt to changes where necessary.
                                </li>
                                <li class="list-group-item"><strong>Teamwork and Collaboration:</strong> Applicants must be ready to work
                                    amicably with already existing staff for the common good of the organization.
                                </li>
                                <li class="list-group-item"><strong>Leadership:</strong> Applicants must possess good leadership skills
                                    necessary for interactions with both staff and students alike.
                                </li>
                                <li class="list-group-item"><strong>Commitment and Dedication:</strong> Applicants must be ready to commit and
                                    be dedicated to the vision and mission of the organization.
                                </li>
                                <li class="list-group-item"><strong>Understanding and belief in our vision:</strong> Interested persons must
                                    understand and believe in our vision which is empowering nations through skills, and
                                    be ready to help in the actualization of this vision.
                                </li>
                                <li class="list-group-item"><strong>Creativity:</strong> The ability to be imaginative and original will be an
                                    added advantage for interested applicants.
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 careerfy-typo-wrap">
                        <div class="careerfy-about-thumb"><img src="{{asset($public.'/png/about-us-thumb.png')}}"
                                                               alt=""></div>
                        <a href="{{url('/openings')}}" class="careerfy-static-btn careerfy-bgcolor"><span>Search Jobs</span></a>
                    </div>
                    <div class="col-md-12 careerfy-typo-wrap">
                        <div class="careerfy-modren-counter">
                            <ul class="row">
                                <li class="col-md-4">
                                    <i class="careerfy-icon careerfy-paper careerfy-color"></i>
                                    <span class="word-counter">123,012</span>
                                    <small>Jobs Addes</small>
                                </li>
                                <li class="col-md-4">
                                    <i class="careerfy-icon careerfy-resume-document careerfy-color"></i>
                                    <span class="word-counter">187,432</span>
                                    <small>Active Resumes</small>
                                </li>
                                <li class="col-md-4">
                                    <i class="careerfy-icon careerfy-briefcase careerfy-color"></i>
                                    <span class="word-counter">140,312</span>
                                    <small>Positions Matched</small>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Main Section -->

        {{--<!-- Main Section -->
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

        <!-- Main Section -->
        <div class="careerfy-main-section careerfy-classic-services-full">
            <div class="container">
                <div class="row">

                    <div class="careerfy-typo-wrap">
                        <section class="careerfy-fancy-title">
                            <h2>Our Featured Services</h2>
                            <p>A better career is out there. We'll help you find it to use.</p>
                        </section>
                        <div class="careerfy-classic-services">
                            <ul class="row">
                                <li class="col-md-4">
                                    <span>1</span>
                                    <i class="careerfy-icon careerfy-coding"></i>
                                    <h2>Cross Browsers</h2>
                                    <p>Etiam lobortis egestas orci vitaa laort ed at nunc nec mas pretiuem lao.</p>
                                </li>
                                <li class="col-md-4">
                                    <span>2</span>
                                    <i class="careerfy-icon careerfy-support"></i>
                                    <h2>Easy Customization</h2>
                                    <p>Etiam lobortis egestas orci vitaa laort ed at nunc nec mas pretiuem lao.</p>
                                </li>
                                <li class="col-md-4">
                                    <span>3</span>
                                    <i class="careerfy-icon careerfy-pen"></i>
                                    <h2>Modern Design</h2>
                                    <p>Etiam lobortis egestas orci vitaa laort ed at nunc nec mas pretiuem lao.</p>
                                </li>
                                <li class="col-md-4">
                                    <span>4</span>
                                    <i class="careerfy-icon careerfy-24-hours"></i>
                                    <h2>Quick Support</h2>
                                    <p>Etiam lobortis egestas orci vitaa laort ed at nunc nec mas pretiuem lao.</p>
                                </li>
                                <li class="col-md-4">
                                    <span>5</span>
                                    <i class="careerfy-icon careerfy-company-workers"></i>
                                    <h2>Permanent Staffing</h2>
                                    <p>Etiam lobortis egestas orci vitaa laort ed at nunc nec mas pretiuem lao.</p>
                                </li>
                                <li class="col-md-4">
                                    <span>6</span>
                                    <i class="careerfy-icon careerfy-graphic"></i>
                                    <h2>Payroll Management</h2>
                                    <p>Etiam lobortis egestas orci vitaa laort ed at nunc nec mas pretiuem lao.</p>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Main Section -->

        <!-- Main Section -->
        <div class="careerfy-main-section">
            <div class="container-fluid">
                <div class="row">

                    <div class="careerfy-typo-wrap">
                        <section class="careerfy-fancy-title">
                            <h2>Our Featured Services</h2>
                            <p>A better career is out there. We'll help you find it to use.</p>
                        </section>
                        <div class="careerfy-service-slider">
                            <div class="careerfy-service-slider-layer">
                                <a href="#"><img src="{{asset($public.'/png/our-featured-slider-1.png')}}" alt=""></a>
                                <span>Joel Dudley, <small>Web Designer</small></span>
                            </div>
                            <div class="careerfy-service-slider-layer">
                                <a href="#"><img src="{{asset($public.'/png/our-featured-slider-2.png')}}" alt=""></a>
                                <span>David Stevens, <small>Supervisor</small></span>
                            </div>
                            <div class="careerfy-service-slider-layer">
                                <a href="#"><img src="{{asset($public.'/png/our-featured-slider-3.png')}}" alt=""></a>
                                <span>James Ray, <small>Web Designer</small></span>
                            </div>
                            <div class="careerfy-service-slider-layer">
                                <a href="#"><img src="{{asset($public.'/png/our-featured-slider-4.png')}}" alt=""></a>
                                <span>Noah Zimmerman, <small>Director</small></span>
                            </div>
                            <div class="careerfy-service-slider-layer">
                                <a href="#"><img src="{{asset($public.'/png/our-featured-slider-5.png')}}" alt=""></a>
                                <span>Matt John, <small>Web Designer</small></span>
                            </div>
                            <div class="careerfy-service-slider-layer">
                                <a href="#"><img src="{{asset($public.'/png/our-featured-slider-1.png')}}" alt=""></a>
                                <span>Joel Dudley, <small>Web Designer</small></span>
                            </div>
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
        <!-- Main Section -->--}}

    </div>
    <!-- Main Content -->
@endsection
