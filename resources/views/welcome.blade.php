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
                <h1>Aim Higher. Reach Farther. Dream Bigger.</h1>
                <p>A better career is out there. We'll help you find it to use.</p>
                <form class="careerfy-banner-search">
                    <ul>
                        <li>
                            <input value="Job Title, Keywords, or Company"
                                   onblur="if(this.value == '') { this.value ='Job Title, Keywords, or Company'; }"
                                   onfocus="if(this.value =='Job Title, Keywords, or Company') { this.value = ''; }"
                                   type="text">
                        </li>
                        <li>
                            <input value="City, State or ZIP"
                                   onblur="if(this.value == '') { this.value ='City, State or ZIP'; }"
                                   onfocus="if(this.value =='City, State or ZIP') { this.value = ''; }" type="text">
                            <i class="careerfy-icon careerfy-location"></i>
                        </li>
                        <li>
                            <div class="careerfy-select-style">
                                <select>
                                    <option>Categories</option>
                                    <option>Categories</option>
                                    <option>Categories</option>
                                </select>
                            </div>
                        </li>
                        <li class="careerfy-banner-submit"><input type="submit" value=""> <i
                                    class="careerfy-icon careerfy-search"></i></li>
                    </ul>
                </form>
                <div class="careerfy-banner-btn">
                    <a href="#" class="careerfy-bgcolorhover"><i class="careerfy-icon careerfy-up-arrow"></i> Upload
                        Your Resume</a>
                    <a href="#" class="careerfy-bgcolorhover"><i class="careerfy-icon careerfy-portfolio"></i> Hiring?
                        Post a job for free</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner -->

    <!-- Main Content -->
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
        <!-- Main Section -->

        <!-- Main Section -->
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
        </div>
        <!-- Main Section -->

        <!-- Main Section -->
        <div class="careerfy-main-section careerfy-parallex-full">
            <div class="container">
                <div class="row">

                    <aside class="col-md-6 careerfy-typo-wrap">
                        <div class="careerfy-parallex-text">
                            <h2>Millions of jobs. <br> Find the one that’s right for you.</h2>
                            <p>Search all the open positions on the web. Get your own personalized salary estimate. Read
                                reviews on over 600,000 companies worldwide. The right job is out there.</p>
                            <a href="#" class="careerfy-static-btn careerfy-bgcolor"><span>Search Jobs</span></a>
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
                                <li class="careerfy-column-6">
                                    <div class="careerfy-table-layer">
                                        <div class="careerfy-table-row">
                                            <figure><a href="#"><img
                                                            src="{{asset($public.'/jpg/featured-listing-1.jpg')}}"
                                                            alt=""></a></figure>
                                            <div class="careerfy-featured-listing-text">
                                                <h2><a href="#">Dropbox -- UX designer</a></h2>
                                                <a href="#" class="careerfy-like-list"><i
                                                            class="careerfy-icon careerfy-heart"></i></a>
                                                <time datetime="2008-02-14 20:00">September 15, 2017</time>
                                                <div class="careerfy-featured-listing-options">
                                                    <ul>
                                                        <li><i class="careerfy-icon careerfy-maps-and-flags"></i> <a
                                                                    href="#">Rennes,</a> <a href="#">France</a></li>
                                                        <li>
                                                            <i class="careerfy-icon careerfy-filter-tool-black-shape"></i>
                                                            <a href="#">Accountancy</a></li>
                                                    </ul>
                                                    <a href="#" class="careerfy-option-btn">Freelance</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="careerfy-column-6">
                                    <div class="careerfy-table-layer">
                                        <div class="careerfy-table-row">
                                            <figure><a href="#"><img
                                                            src="{{asset($public.'/jpg/featured-listing-2.jpg')}}"
                                                            alt=""></a></figure>
                                            <div class="careerfy-featured-listing-text">
                                                <h2><a href="#">Dropbox -- UX designer</a></h2>
                                                <a href="#" class="careerfy-like-list"><i
                                                            class="careerfy-icon careerfy-heart"></i></a>
                                                <time datetime="2008-02-14 20:00">September 15, 2017</time>
                                                <div class="careerfy-featured-listing-options">
                                                    <ul>
                                                        <li><i class="careerfy-icon careerfy-maps-and-flags"></i> <a
                                                                    href="#">Derry,</a> <a href="#">United Kingdom</a>
                                                        </li>
                                                        <li>
                                                            <i class="careerfy-icon careerfy-filter-tool-black-shape"></i>
                                                            <a href="#">Automotive</a></li>
                                                    </ul>
                                                    <a href="#" class="careerfy-option-btn careerfy-blue">Full time</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="careerfy-column-6">
                                    <div class="careerfy-table-layer">
                                        <div class="careerfy-table-row">
                                            <figure><a href="#"><img
                                                            src="{{asset($public.'/jpg/featured-listing-3.jpg')}}"
                                                            alt=""></a></figure>
                                            <div class="careerfy-featured-listing-text">
                                                <h2><a href="#">Dropbox -- UX designer</a></h2>
                                                <a href="#" class="careerfy-like-list"><i
                                                            class="careerfy-icon careerfy-heart"></i></a>
                                                <time datetime="2008-02-14 20:00">September 15, 2017</time>
                                                <div class="careerfy-featured-listing-options">
                                                    <ul>
                                                        <li><i class="careerfy-icon careerfy-maps-and-flags"></i> <a
                                                                    href="#">Aberdeen,</a> <a href="#">United
                                                                Kingdom</a></li>
                                                        <li>
                                                            <i class="careerfy-icon careerfy-filter-tool-black-shape"></i>
                                                            <a href="#">Banking</a></li>
                                                    </ul>
                                                    <a href="#" class="careerfy-option-btn careerfy-red">Temporary</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="careerfy-column-6">
                                    <div class="careerfy-table-layer">
                                        <div class="careerfy-table-row">
                                            <figure><a href="#"><img
                                                            src="{{asset($public.'/jpg/featured-listing-4.jpg')}}"
                                                            alt=""></a></figure>
                                            <div class="careerfy-featured-listing-text">
                                                <h2><a href="#">Dropbox -- UX designer</a></h2>
                                                <a href="#" class="careerfy-like-list"><i
                                                            class="careerfy-icon careerfy-heart"></i></a>
                                                <time datetime="2008-02-14 20:00">September 15, 2017</time>
                                                <div class="careerfy-featured-listing-options">
                                                    <ul>
                                                        <li><i class="careerfy-icon careerfy-maps-and-flags"></i> <a
                                                                    href="#">Saint-Etienne,</a> <a href="#">France</a>
                                                        </li>
                                                        <li>
                                                            <i class="careerfy-icon careerfy-filter-tool-black-shape"></i>
                                                            <a href="#">Restaurant</a></li>
                                                    </ul>
                                                    <a href="#" class="careerfy-option-btn careerfy-green">Part time</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="careerfy-column-6">
                                    <div class="careerfy-table-layer">
                                        <div class="careerfy-table-row">
                                            <figure><a href="#"><img
                                                            src="{{asset($public.'/jpg/featured-listing-5.jpg')}}"
                                                            alt=""></a></figure>
                                            <div class="careerfy-featured-listing-text">
                                                <h2><a href="#">Dropbox -- UX designer</a></h2>
                                                <a href="#" class="careerfy-like-list"><i
                                                            class="careerfy-icon careerfy-heart"></i></a>
                                                <time datetime="2008-02-14 20:00">September 15, 2017</time>
                                                <div class="careerfy-featured-listing-options">
                                                    <ul>
                                                        <li><i class="careerfy-icon careerfy-maps-and-flags"></i> <a
                                                                    href="#">London,</a> <a href="#">United Kingdom</a>
                                                        </li>
                                                        <li>
                                                            <i class="careerfy-icon careerfy-filter-tool-black-shape"></i>
                                                            <a href="#">Real Estate</a></li>
                                                    </ul>
                                                    <a href="#" class="careerfy-option-btn careerfy-blue">Full time</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="careerfy-column-6">
                                    <div class="careerfy-table-layer">
                                        <div class="careerfy-table-row">
                                            <figure><a href="#"><img
                                                            src="{{asset($public.'/jpg/featured-listing-6.jpg')}}"
                                                            alt=""></a></figure>
                                            <div class="careerfy-featured-listing-text">
                                                <h2><a href="#">Dropbox -- UX designer</a></h2>
                                                <a href="#" class="careerfy-like-list"><i
                                                            class="careerfy-icon careerfy-heart"></i></a>
                                                <time datetime="2008-02-14 20:00">September 15, 2017</time>
                                                <div class="careerfy-featured-listing-options">
                                                    <ul>
                                                        <li><i class="careerfy-icon careerfy-maps-and-flags"></i> <a
                                                                    href="#">Rennes,</a> <a href="#">France</a></li>
                                                        <li>
                                                            <i class="careerfy-icon careerfy-filter-tool-black-shape"></i>
                                                            <a href="#">Education</a></li>
                                                    </ul>
                                                    <a href="#" class="careerfy-option-btn">Freelance</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Featured Jobs Listings -->
                        <div class="careerfy-plain-btn"><a href="#">View All Jobs</a></div>
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

        <!-- Main Section -->
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
        <!-- Main Section -->

        <!-- Main Section -->
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

    </div>
    <!-- Main Content -->

   @endsection