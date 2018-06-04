@php    $public='';    if(config('app.env') == 'production')    $public ='public'; @endphp
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