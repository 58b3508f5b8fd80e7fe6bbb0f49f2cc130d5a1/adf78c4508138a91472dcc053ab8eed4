<template>
    <div>
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

        <div class="careerfy-main-section careerfy-dashboard-full">
            <div class="container">
                <div class="row">

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
                                    <li>
                                        <router-link :to="{ name: 'applied' }"><i class="careerfy-icon careerfy-briefcase-1"></i> Applied Jobs</router-link>
                                    </li>
                                    <li>
                                        <router-link :to="{ name: 'resume' }"><i class="careerfy-icon careerfy-resume"></i> Resume</router-link>
                                    </li>
                                    <li><a href="candidate-dashboard-profile-seting.html"><i class="careerfy-icon careerfy-user"></i> My Profile</a></li>
                                    <li><a href="candidate-dashboard-resume.html"><i class="careerfy-icon careerfy-resume"></i> My Resume</a></li>
                                    <li class="active"><a href="candidate-dashboard-saved-jobs.html"><i class="careerfy-icon careerfy-heart"></i> Saved jobs</a></li>
                                    <li><a href="candidate-dashboard-applied-jobs.html"><i class="careerfy-icon careerfy-briefcase-1"></i> Applied jobs</a></li>
                                    <li><a href="candidate-dashboard-job-alert.html"><i class="careerfy-icon careerfy-alarm"></i> Job Alerts</a></li>
                                    <li><a href="candidate-dashboard-cv-manager.html"><i class="careerfy-icon careerfy-id-card"></i> CV Manager</a></li>
                                    <li><a href="candidate-dashboard-changed-password.html"><i class="careerfy-icon careerfy-multimedia"></i> Change Password</a></li>
                                    <li><a href="index-2.html"><i class="careerfy-icon careerfy-logout"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                    <router-view></router-view>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {}
</script>