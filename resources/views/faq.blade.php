@php
    $public='';
    if(App::environment('production'))
    $public ='public';
@endphp
@extends('layouts.app')
@section('title',$title)
@section('content')
    <!-- SubHeader -->
    <div class="careerfy-subheader careerfy-subheader-with-bg">
        <span class="careerfy-banner-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="careerfy-page-title">
                        <h1>Questions? Look here.</h1>
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
                <li>Faq's</li>
            </ul>
        </div>
    </div>
    <!-- SubHeader -->

    <!-- Main Content -->
    <div class="careerfy-main-content">

        <!-- Main Section -->
        <div class="careerfy-main-section careerfy-faq-full">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 careerfy-typo-wrap">
                        <!-- Fancy Title -->
                        <section class="careerfy-fancy-title">
                            <h2>What We Have</h2>
                            <p>A better career is out there. We'll help you find it to use.</p>
                        </section>
                        <div class="careerfy-services-classic">
                            <ul class="row">
                                <li class="col-md-4">
                                    <span><i class="careerfy-icon careerfy-curriculum"></i></span>
                                    <h2>CV Search</h2>
                                    <p>Over the coming years Ismail worked with a number of remittance businesses as
                                        well as international policy makers.</p>
                                </li>
                                <li class="col-md-4">
                                    <span><i class="careerfy-icon careerfy-building"></i></span>
                                    <h2>Recruiter Profiles</h2>
                                    <p>And because we understand the importance of staying connected, Nimble enables
                                        people to send mobile airtime top-ups.</p>
                                </li>
                                <li class="col-md-4">
                                    <span><i class="careerfy-icon careerfy-briefcase-1"></i></span>
                                    <h2>Advertise a Job</h2>
                                    <p>Millions of us now rely on Mobile Money services instead of bank accounts, so we
                                        offer transfers directly to them.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 careerfy-typo-wrap">
                        <div class="widget careerfy-search-form-widget">
                            <form>
                                <label>Find Your Question:</label>
                                <input value="Keyword" onblur="if(this.value == '') { this.value ='Keyword'; }"
                                       onfocus="if(this.value =='Keyword') { this.value = ''; }" type="text">
                                <input type="submit" value="">
                                <i class="fa fa-search"></i>
                            </form>
                        </div>
                        <div class="widget widget-text-info">
                            <h2 class="careerfy-slash-title">Don’t find your Question?</h2>
                            <p>You are not able to find the answer to your question? No Problem!</p>
                            <a href="{{url('/contact')}}" class="careerfy-text-btn careerfy-bgcolor">contact us</a>
                        </div>
                        <div class="widget widget_faq">
                            <h2 class="careerfy-slash-title">Recent Questions</h2>
                            <ul>
                                <li><a href="#">Is the career in car sales right for me?</a></li>
                                <li><a href="#">Can I work part time/as a summer job or weekends?</a></li>
                                <li><a href="#">How to get a job in car sales?</a></li>
                                <li><a href="#">How do car salespeople get paid?</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="careerfy-section-title"><h2>FREQUENTLY ASKED QUESTIONS</h2></div>
                        <div class="panel-group careerfy-accordion" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                           href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="careerfy-icon careerfy-arrows"></i> Q. What’s involved with
                                            financing or leasing a new vehicle?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                        voluptatem quia voluptas sit aspernatur aut odit aut fugitsed ratione voluptatem
                                        sequi nesciunt. <br> <br>
                                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                        adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                                        dolore magnam aliquam quaerat voluptatem.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                           aria-controls="collapseTwo">
                                            <i class="careerfy-icon careerfy-arrows"></i> Q. Can I purchase a
                                            right-hand-drive car?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                        voluptatem quia voluptas sit aspernatur aut odit aut fugitsed ratione voluptatem
                                        sequi nesciunt. <br> <br>
                                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                        adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                                        dolore magnam aliquam quaerat voluptatem.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                           aria-controls="collapseThree">
                                            <i class="careerfy-icon careerfy-arrows"></i> Q. Can I get a price quoted on
                                            a new car via the Internet?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                        voluptatem quia voluptas sit aspernatur aut odit aut fugitsed ratione voluptatem
                                        sequi nesciunt. <br> <br>
                                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                        adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                                        dolore magnam aliquam quaerat voluptatem.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordion" href="#collapseFour" aria-expanded="false"
                                           aria-controls="collapseFour">
                                            <i class="careerfy-icon careerfy-arrows"></i> Q. Where can I purchase
                                            genuine car parts and accessories?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                        voluptatem quia voluptas sit aspernatur aut odit aut fugitsed ratione voluptatem
                                        sequi nesciunt. <br> <br>
                                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                        adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                                        dolore magnam aliquam quaerat voluptatem.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordion" href="#collapseFive" aria-expanded="false"
                                           aria-controls="collapseFive">
                                            <i class="careerfy-icon careerfy-arrows"></i> Q. Can I purchase cars for my
                                            fleet?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                        voluptatem quia voluptas sit aspernatur aut odit aut fugitsed ratione voluptatem
                                        sequi nesciunt. <br> <br>
                                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                        adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                                        dolore magnam aliquam quaerat voluptatem.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordion" href="#collapseSix" aria-expanded="false"
                                           aria-controls="collapseSix">
                                            <i class="careerfy-icon careerfy-arrows"></i> Q. How can I subscribe to
                                            Car’s Open Road Magazine?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSix" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                        voluptatem quia voluptas sit aspernatur aut odit aut fugitsed ratione voluptatem
                                        sequi nesciunt. <br> <br>
                                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                        adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                                        dolore magnam aliquam quaerat voluptatem.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="careerfy-section-title"><h2>General Inquiries</h2></div>
                        <div class="panel-group careerfy-accordion" id="accordionTwo">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordionTwo" href="#collapseSeven" aria-expanded="true"
                                           aria-controls="collapseSeven">
                                            <i class="careerfy-icon careerfy-arrows"></i> Q. Can I purchase a
                                            right-hand-drive car?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSeven" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                        voluptatem quia voluptas sit aspernatur aut odit aut fugitsed ratione voluptatem
                                        sequi nesciunt.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordionTwo" href="#collapseEight" aria-expanded="false"
                                           aria-controls="collapseEight">
                                            <i class="careerfy-icon careerfy-arrows"></i> Q. Can I get a price quoted on
                                            a new car via the Internet?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseEight" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                        voluptatem quia voluptas sit aspernatur aut odit aut fugitsed ratione voluptatem
                                        sequi nesciunt.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordionTwo" href="#collapseNine" aria-expanded="false"
                                           aria-controls="collapseNine">
                                            <i class="careerfy-icon careerfy-arrows"></i> Q. Where can I purchase
                                            genuine car parts and accessories?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseNine" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                        voluptatem quia voluptas sit aspernatur aut odit aut fugitsed ratione voluptatem
                                        sequi nesciunt.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordionTwo" href="#collapseTen" aria-expanded="false"
                                           aria-controls="collapseTen">
                                            <i class="careerfy-icon careerfy-arrows"></i> Q. Can I purchase cars for my
                                            fleet?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTen" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                        voluptatem quia voluptas sit aspernatur aut odit aut fugitsed ratione voluptatem
                                        sequi nesciunt.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordionTwo" href="#collapseEleven" aria-expanded="false"
                                           aria-controls="collapseEleven">
                                            <i class="careerfy-icon careerfy-arrows"></i> Q. How can I subscribe to
                                            Car’s Open Road Magazine?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseEleven" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                        voluptatem quia voluptas sit aspernatur aut odit aut fugitsed ratione voluptatem
                                        sequi nesciunt.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- Main Section -->
@endsection