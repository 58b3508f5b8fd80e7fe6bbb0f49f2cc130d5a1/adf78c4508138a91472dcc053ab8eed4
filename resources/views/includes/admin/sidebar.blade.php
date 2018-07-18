@php    $public='';    if(config('app.env') == 'production')    $public ='public'; @endphp
<aside class="careerfy-column-3">
    <div class="careerfy-typo-wrap">
        <div class="careerfy-employer-dashboard-nav">
            <figure>
                <a href="#" class="employer-dashboard-thumb">
                    <img src="{{Storage::url(Auth::user()->avatar_location)}}" class="user-avatar" alt=""></a>
                <figcaption>
                    <h3>{{Auth::user()->first_name.' '.Auth::user()->last_name}}</h3>
                    <span class="careerfy-dashboard-subtitle">{{Auth::user()->job_title}}</span>
                </figcaption>
            </figure>
            <ul>
                <li @if(isset($profile_sidebar)) class="active" @endif><a href="{{url('/backend/jobs')}}"><i
                                class="careerfy-icon careerfy-user"></i> View Jobs</a></li>
                <li @if(isset($resume_sidebar)) class="active" @endif><a href="{{url('backend/jobs/add')}}"><i
                                class="careerfy-icon careerfy-resume"></i> Add Job</a></li>
                <li @if(isset($jobs_sidebar)) class="active" @endif><a href="{{url('/backend/interviews')}}"><i
                                class="careerfy-icon careerfy-heart"></i> Interviews</a></li>
                <li @if(isset($jobs_sidebar)) class="active" @endif><a href="{{url('/backend/tests')}}"><i
                                class="careerfy-icon careerfy-heart"></i> View Tests</a></li>
                <li @if(isset($jobs_sidebar)) class="active" @endif><a href="{{url('/backend/tests/add')}}"><i
                                class="careerfy-icon careerfy-heart"></i> Add Test</a></li>
                <li @if(isset($jobs_sidebar)) class="active" @endif><a href="{{url('/backend/tests/result')}}"><i
                                class="careerfy-icon careerfy-heart"></i> Test Results</a></li>
                @if(Auth::user()->access >=10)<li><a href="{{url('/admin')}}"><i class="fa fa-gears"></i>Control Panel</a></li>@endif
                <li><a href="{{url('/learning/admin')}}"><i
                                class="careerfy-icon careerfy-books"></i> LMS Panel</a></li>
                <li><a href="{{ url('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                class="careerfy-icon careerfy-logout"></i> Logout</a></li>
            </ul>
        </div>
    </div>
</aside>