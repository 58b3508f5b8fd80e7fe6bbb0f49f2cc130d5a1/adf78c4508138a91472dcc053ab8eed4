<div class="row">
    <div class="col-md-12">

        <div class="careerfy-subheader careerfy-subheader-without-bg">

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
                    @if($type=='new')
                        @include('includes.sidebar',['jobs_sidebar'=>true])
                    @else
                        @include('includes.sidebar',['applied_sidebar'=>true])
                    @endif
                    <div class="careerfy-column-9">
                        <div>
                            <div class="careerfy-employer-box-section">
                                <div class="careerfy-profile-title">
                                    <h2>{{$title}}</h2>
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
                                                    <div class="careerfy-applied-jobs-text">
                                                        <div class="careerfy-applied-jobs-left col-xs-12">
                                                            <h2><a href="#">{{$job->title}}</a>
                                                                <div class="pull-right">
                                                                    @if($type=='new')
                                                                        <a class="text-success btn"
                                                                           data-title="{{$job->title}}"
                                                                           data-id="{{$job->id+9431}}"
                                                                           onclick="applyJob(this)"><i
                                                                                    class="fa fa-plane"></i> Apply Now
                                                                        </a>
                                                                    @else
                                                                        @if($job->status=='shortlisted')

                                                                            <a class="text-success btn"
                                                                               href="{{url("/jobs/test/$job->application_id")}}"><i
                                                                                        class="fa fa-check"></i> Take
                                                                                Test
                                                                            </a>


                                                                        @elseif(in_array( $job->status,['applied','shortlisted']) )
                                                                            <a class="text-danger btn"
                                                                               data-title="{{$job->title}}"
                                                                               data-id="{{$job->id+113}}"
                                                                               onclick="cancelJob(this)"><i
                                                                                        class="fa fa-times"></i> Cancel
                                                                            </a>
                                                                        @endif
                                                                    @endif
                                                                </div>
                                                            </h2>
                                                            <?php
                                                            $description = strip_tags($job->description);
                                                            $description = explode(' ', $description);
                                                            $description = array_splice($description, 0, 40);
                                                            $description = implode(' ', $description) . '...';
                                                            switch ($job->status) {
                                                                case 'applied':
                                                                    $label = 'warning';
                                                                    break;
                                                                case 'shortlisted':
                                                                    $label = 'default';
                                                                    break;
                                                                case 'processing':
                                                                    $label = 'info';
                                                                    break;
                                                                case 'invited':
                                                                    $label = 'primary';
                                                                    break;
                                                                case 'passed':
                                                                    $label = 'success';
                                                                    break;
                                                                default:
                                                                    $label = 'warning';
                                                                    break;
                                                            }
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
                                                                @if($type != 'new')
                                                                    <li>
                                                                        Status: <strong class="label label-{{$label}}">{{strtoupper($job->status)}}</strong>
                                                                    </li>
                                                                @endif
                                                            </ul>

                                                        </div>
                                                        {{--<a href="#" class="careerfy-savedjobs-links"><i
                                                                    class="careerfy-icon careerfy-view"></i></a>--}}
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- Pagination -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Main Section -->


    </div>
</div>