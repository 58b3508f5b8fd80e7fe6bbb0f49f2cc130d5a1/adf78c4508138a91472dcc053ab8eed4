<aside class="careerfy-column-3">
    <div class="careerfy-typo-wrap">
        <div class="careerfy-employer-dashboard-nav">
            <figure>
                <a href="#" class="employer-dashboard-thumb"><img src="jpg/candidate-dashboard-navthumb.jpg" alt=""></a>
                <figcaption>
                    <div class="careerfy-fileUpload">
                        <span><i class="careerfy-icon careerfy-add"></i> Upload Photo</span>
                        <input class="careerfy-upload" type="file">
                    </div>
                    <h2>Nora Tsunoda</h2>
                    <span class="careerfy-dashboard-subtitle">UI/UX Designer</span>
                </figcaption>
            </figure>
            <ul>
                <li @if(isset($profile_sidebar)) class="active" @endif><a href="{{route('profile')}}"><i class="careerfy-icon careerfy-user"></i> My Profile</a></li>
                <li @if(isset($resume_sidebar)) class="active" @endif><a href="{{route('resume')}}"><i class="careerfy-icon careerfy-resume"></i> My Resume</a></li>
                <li @if(isset($jobs_sidebar)) class="active" @endif><a href="{{route('jobs')}}"><i class="careerfy-icon careerfy-heart"></i> Saved jobs</a></li>
                <li @if(isset($applied_sidebar)) class="active" @endif><a href="{{route('applied')}}"><i class="careerfy-icon careerfy-briefcase-1"></i>
                        Applied Jobs</a></li>
                <li><a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                class="careerfy-icon careerfy-logout"></i> Logout</a></li>
            </ul>
        </div>
    </div>
</aside>