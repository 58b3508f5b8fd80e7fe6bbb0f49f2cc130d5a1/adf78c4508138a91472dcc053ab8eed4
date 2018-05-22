@php
    $public='';
    if(App::environment('production'))
    $public ='public';
@endphp
<div class="row">


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


    <div class="careerfy-main-content">

        <!-- Main Section -->
        <div class="careerfy-main-section careerfy-dashboard-fulltwo">
            <div class="container">
                <div class="row">
                    @include('includes.sidebar',['resume_sidebar'=>true])
                    <div class="careerfy-column-9">
                        <div class="careerfy-typo-wrap">

                            <div class="careerfy-employer-box-section">
                                <div class="careerfy-profile-title"><h2>My Resume</h2></div>
                                <div class="careerfy-upload-cv">
                                    <div class="careerfy-candidate-title"><h2><i
                                                    class="careerfy-icon careerfy-resume-1"></i> Curriculum Vitae
                                        </h2>
                                    </div>
                                    <div>
                                        <input id="input-b1" name="input-b1" type="file" class="file">
                                    </div>

                                    {{--
                                                                            <div class="careerfy-cvupload-file">
                                                                                <span><i class="careerfy-icon careerfy-arrows-2"></i> Upload CV</span>
                                                                                <input id="careerfy-uploadbtn" class="careerfy-upload-btn" type="file">
                                                                            </div>
                                    --}}
                                    <p>Suitable files are .doc,docx,rft,pdf &amp; .pdf</p>
                                </div>
                                <div class="careerfy-candidate-section">
                                    <div class="careerfy-candidate-resume-wrap">
                                        <div class="careerfy-candidate-title"><h2>
                                                <i class="careerfy-icon careerfy-mortarboard"></i> Cover Letter
                                                <a href="javascript:void(0)" onclick="updateCoverLetter()"
                                                   class="careerfy-resume-addbtn"><span
                                                            class="fa fa-plus"></span> Update cover letter</a>
                                            </h2></div>
                                        <div class="careerfy-row careerfy-employer-profile-form"
                                             style="float:left;width: 100%;padding-left:78px;margin-bottom:58px;">
                                            <textarea id="textEditor" name="cover_letter"></textarea>
                                        </div>
                                    </div>
                                    <div class="careerfy-candidate-resume-wrap">
                                        <div class="careerfy-candidate-title"><h2>
                                                <i class="careerfy-icon careerfy-mortarboard"></i> Education
                                                <a href="javascript:void(0)"
                                                   class="careerfy-resume-addbtn"><span
                                                            class="fa fa-plus"></span> Add education</a>
                                            </h2></div>

                                        <div class="careerfy-add-popup">
                                            <form method="post" action="{{url('/resume/education')}}">
                                                <ul class="careerfy-row careerfy-employer-profile-form">
                                                    <li class="careerfy-column-12">
                                                        <label>Title *</label>
                                                        <input type="text" name="title">
                                                    </li>
                                                    <li class="careerfy-column-6">
                                                        <label>From Date *</label>
                                                        <input type="text" name="started_at">
                                                    </li>
                                                    <li class="careerfy-column-6">
                                                        <label>To Date *</label>
                                                        <input type="text" name="finished_at">
                                                    </li>
                                                    <li class="careerfy-column-12">
                                                        <label>Institute *</label>
                                                        <input type="text" name="institution">
                                                    </li>
                                                    <li class="careerfy-column-12">
                                                        <label>Description *</label>
                                                        <textarea id="textEditor" name="cover_letter"></textarea>
                                                    </li>
                                                    <li class="careerfy-column-12">
                                                        <input value="Add education" type="submit">
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                        <div class="careerfy-resume-education" id="resume-education">
                                            @include('partials.sub.education')
                                        </div>
                                    </div>
                                    <div class="careerfy-candidate-resume-wrap">
                                        <div class="careerfy-candidate-title"><h2>
                                                <i class="careerfy-icon careerfy-social-media"></i> Experience
                                                <a href="javascript:void(0)"
                                                   class="careerfy-resume-addbtn"><span
                                                            class="fa fa-plus"></span> Add experince</a>
                                            </h2></div>

                                        <div class="careerfy-add-popup">
                                            <ul class="careerfy-row careerfy-employer-profile-form">
                                                <li class="careerfy-column-12">
                                                    <label>Title *</label>
                                                    <input value="Masters in Fine Arts"
                                                           onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                           onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                           type="text">
                                                </li>
                                                <li class="careerfy-column-5">
                                                    <label>From Date *</label>
                                                    <div class="careerfy-profile-select">
                                                        <select>
                                                            <option>10-05-2012</option>
                                                            <option>10-05-2012</option>
                                                        </select>
                                                    </div>
                                                </li>
                                                <li class="careerfy-column-5">
                                                    <label>To Date *</label>
                                                    <div class="careerfy-profile-select">
                                                        <select>
                                                            <option>10-05-2014</option>
                                                            <option>10-05-2014</option>
                                                        </select>
                                                    </div>
                                                </li>
                                                <li class="careerfy-column-2">
                                                    <div class="careerfy-checkbox">
                                                        <input id="r8" name="rr" type="checkbox">
                                                        <label for="r8"><span></span>Present</label>
                                                    </div>
                                                </li>
                                                <li class="careerfy-column-12">
                                                    <label>Company *</label>
                                                    <input value="Walters University"
                                                           onblur="if(this.value == '') { this.value ='Walters University'; }"
                                                           onfocus="if(this.value =='Walters University') { this.value = ''; }"
                                                           type="text">
                                                </li>
                                                <li class="careerfy-column-12">
                                                    <label>Description *</label>
                                                    <img src="png/candidate-add-popup-textarea.png" alt="">
                                                </li>
                                                <li class="careerfy-column-12">
                                                    <input value="Add experince" type="submit">
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="careerfy-resume-education">
                                            <ul class="careerfy-row">
                                                <li class="careerfy-column-12">
                                                    <div class="careerfy-resume-education-wrap">
                                                        <small>2010 - 2012</small>
                                                        <h2><a href="#">Development Manager</a></h2>
                                                        <span>Atract Solutions</span>
                                                    </div>
                                                    <div class="careerfy-resume-education-btn">
                                                        <a href="#" class="careerfy-icon careerfy-edit"></a>
                                                        <a href="#" class="careerfy-icon careerfy-rubbish"></a>
                                                    </div>
                                                </li>
                                                <li class="careerfy-column-12">
                                                    <div class="careerfy-resume-education-wrap">
                                                        <small>2006 - 2008</small>
                                                        <h2><a href="#">Senior PHP/Drupal developer</a></h2>
                                                        <span>Minor Solutions</span>
                                                    </div>
                                                    <div class="careerfy-resume-education-btn">
                                                        <a href="#" class="careerfy-icon careerfy-edit"></a>
                                                        <a href="#" class="careerfy-icon careerfy-rubbish"></a>
                                                    </div>
                                                </li>
                                                <li class="careerfy-column-12">
                                                    <div class="careerfy-resume-education-wrap">
                                                        <small>2002 - 2004</small>
                                                        <h2><a href="#">Self Employed Professional</a></h2>
                                                        <span> Abstraxct Max</span>
                                                    </div>
                                                    <div class="careerfy-resume-education-btn">
                                                        <a href="#" class="careerfy-icon careerfy-edit"></a>
                                                        <a href="#" class="careerfy-icon careerfy-rubbish"></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="careerfy-candidate-resume-wrap">
                                        <div class="careerfy-candidate-title"><h2>
                                                <i class="careerfy-icon careerfy-briefcase"></i> Portfolio
                                                <a href="#" class="careerfy-resume-addbtn"><span
                                                            class="fa fa-plus"></span> Add Portfolio</a>
                                            </h2></div>

                                        <div class="careerfy-company-gallery">
                                            <ul class="careerfy-row">
                                                <li class="careerfy-column-3">
                                                    <figure>
                                                        <a href="#"><img src="png/employer-company-photo-1.png"
                                                                         alt=""></a>
                                                        <figcaption>
                                                            <span>Peca8 World</span>
                                                            <div class="careerfy-company-links">
                                                                <a href="#"
                                                                   class="careerfy-icon careerfy-edit"></a>
                                                                <a href="#"
                                                                   class="careerfy-icon careerfy-rubbish"></a>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                <li class="careerfy-column-3">
                                                    <figure>
                                                        <a href="#"><img src="png/employer-company-photo-2.png"
                                                                         alt=""></a>
                                                        <figcaption>
                                                            <span>City Light</span>
                                                            <div class="careerfy-company-links">
                                                                <a href="#"
                                                                   class="careerfy-icon careerfy-edit"></a>
                                                                <a href="#"
                                                                   class="careerfy-icon careerfy-rubbish"></a>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                <li class="careerfy-column-3">
                                                    <figure>
                                                        <a href="#"><img src="png/employer-company-photo-3.png"
                                                                         alt=""></a>
                                                        <figcaption>
                                                            <span>Spass Life</span>
                                                            <div class="careerfy-company-links">
                                                                <a href="#"
                                                                   class="careerfy-icon careerfy-edit"></a>
                                                                <a href="#"
                                                                   class="careerfy-icon careerfy-rubbish"></a>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                <li class="careerfy-column-3">
                                                    <figure>
                                                        <a href="#"><img src="png/employer-company-photo-4.png"
                                                                         alt=""></a>
                                                        <figcaption>
                                                            <span>Cass Rasioaror</span>
                                                            <div class="careerfy-company-links">
                                                                <a href="#"
                                                                   class="careerfy-icon careerfy-edit"></a>
                                                                <a href="#"
                                                                   class="careerfy-icon careerfy-rubbish"></a>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                <li class="careerfy-column-3">
                                                    <figure>
                                                        <a href="#"><img src="png/employer-company-photo-5.png"
                                                                         alt=""></a>
                                                        <figcaption>
                                                            <span>Miki Uni</span>
                                                            <div class="careerfy-company-links">
                                                                <a href="#"
                                                                   class="careerfy-icon careerfy-edit"></a>
                                                                <a href="#"
                                                                   class="careerfy-icon careerfy-rubbish"></a>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                <li class="careerfy-column-3">
                                                    <figure>
                                                        <a href="#"><img src="png/employer-company-photo-6.png"
                                                                         alt=""></a>
                                                        <figcaption>
                                                            <span>Manhattoon</span>
                                                            <div class="careerfy-company-links">
                                                                <a href="#"
                                                                   class="careerfy-icon careerfy-edit"></a>
                                                                <a href="#"
                                                                   class="careerfy-icon careerfy-rubbish"></a>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                <li class="careerfy-column-3">
                                                    <figure>
                                                        <a href="#"><img src="png/employer-company-photo-7.png"
                                                                         alt=""></a>
                                                        <figcaption>
                                                            <span>Aocan Active</span>
                                                            <div class="careerfy-company-links">
                                                                <a href="#"
                                                                   class="careerfy-icon careerfy-edit"></a>
                                                                <a href="#"
                                                                   class="careerfy-icon careerfy-rubbish"></a>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="careerfy-candidate-resume-wrap">
                                        <div class="careerfy-candidate-title"><h2>
                                                <i class="careerfy-icon careerfy-design-skills"></i> Skills
                                                <a href="javascript:void(0)"
                                                   class="careerfy-resume-addbtn"><span
                                                            class="fa fa-plus"></span> Add Skills</a>
                                            </h2></div>

                                        <div class="careerfy-add-popup">
                                            <ul class="careerfy-row careerfy-employer-profile-form">
                                                <li class="careerfy-column-12">
                                                    <label>Skill Heading *</label>
                                                    <input value="Web Development"
                                                           onblur="if(this.value == '') { this.value ='Web Development'; }"
                                                           onfocus="if(this.value =='Web Development') { this.value = ''; }"
                                                           type="text">
                                                </li>
                                                <li class="careerfy-column-12">
                                                    <label>Percentage *</label>
                                                    <input value="75%"
                                                           onblur="if(this.value == '') { this.value ='75%'; }"
                                                           onfocus="if(this.value =='75%') { this.value = ''; }"
                                                           type="text">
                                                </li>
                                                <li class="careerfy-column-12">
                                                    <input value="Add Skills" type="submit">
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="careerfy-add-skills">
                                            <ul class="careerfy-row">
                                                <li class="careerfy-column-12">
                                                    <div class="careerfy-add-skills-wrap">
                                                        <span>74</span>
                                                        <h2><a href="#">Social Media Marketing</a></h2>
                                                    </div>
                                                    <div class="careerfy-resume-education-btn">
                                                        <a href="#" class="careerfy-icon careerfy-edit"></a>
                                                        <a href="#" class="careerfy-icon careerfy-rubbish"></a>
                                                    </div>
                                                </li>
                                                <li class="careerfy-column-12">
                                                    <div class="careerfy-add-skills-wrap">
                                                        <span>67</span>
                                                        <h2><a href="#">Web Development</a></h2>
                                                    </div>
                                                    <div class="careerfy-resume-education-btn">
                                                        <a href="#" class="careerfy-icon careerfy-edit"></a>
                                                        <a href="#" class="careerfy-icon careerfy-rubbish"></a>
                                                    </div>
                                                </li>
                                                <li class="careerfy-column-12">
                                                    <div class="careerfy-add-skills-wrap">
                                                        <span>25</span>
                                                        <h2><a href="#">Search Engine Optimization</a></h2>
                                                    </div>
                                                    <div class="careerfy-resume-education-btn">
                                                        <a href="#" class="careerfy-icon careerfy-edit"></a>
                                                        <a href="#" class="careerfy-icon careerfy-rubbish"></a>
                                                    </div>
                                                </li>
                                                <li class="careerfy-column-12">
                                                    <div class="careerfy-add-skills-wrap">
                                                        <span>20</span>
                                                        <h2><a href="#">User Experience Design</a></h2>
                                                    </div>
                                                    <div class="careerfy-resume-education-btn">
                                                        <a href="#" class="careerfy-icon careerfy-edit"></a>
                                                        <a href="#" class="careerfy-icon careerfy-rubbish"></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="careerfy-candidate-resume-wrap">
                                        <div class="careerfy-candidate-title"><h2>
                                                <i class="careerfy-icon careerfy-trophy"></i> Honors &amp;
                                                Awards
                                                <a href="#" class="careerfy-resume-addbtn"><span
                                                            class="fa fa-plus"></span> Add Award</a>
                                            </h2></div>

                                        <div class="careerfy-add-popup">
                                            <ul class="careerfy-row careerfy-employer-profile-form">
                                                <li class="careerfy-column-12">
                                                    <label>Award Title *</label>
                                                    <input value="Distinguished Service Award"
                                                           onblur="if(this.value == '') { this.value ='Distinguished Service Award'; }"
                                                           onfocus="if(this.value =='Distinguished Service Award') { this.value = ''; }"
                                                           type="text">
                                                </li>
                                                <li class="careerfy-column-6">
                                                    <label>Year *</label>
                                                    <div class="careerfy-profile-select">
                                                        <select>
                                                            <option>2012</option>
                                                            <option>2012</option>
                                                        </select>
                                                    </div>
                                                </li>
                                                <li class="careerfy-column-6">
                                                    <label>Company *</label>
                                                    <input value="Gldtech"
                                                           onblur="if(this.value == '') { this.value ='Gldtech'; }"
                                                           onfocus="if(this.value =='Gldtech') { this.value = ''; }"
                                                           type="text">
                                                </li>
                                                <li class="careerfy-column-12">
                                                    <label>Description *</label>
                                                    <img src="png/candidate-add-popup-textarea.png" alt="">
                                                </li>
                                                <li class="careerfy-column-12">
                                                    <input value="Add Award" type="submit">
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="careerfy-resume-education careerfy-resume-awards">
                                            <ul class="careerfy-row">
                                                <li class="careerfy-column-12">
                                                    <div class="careerfy-resume-education-wrap">
                                                        <small>1970</small>
                                                        <h2><a href="#">Distinguished Service Award</a></h2>
                                                    </div>
                                                    <div class="careerfy-resume-education-btn">
                                                        <a href="#" class="careerfy-icon careerfy-edit"></a>
                                                        <a href="#" class="careerfy-icon careerfy-rubbish"></a>
                                                    </div>
                                                </li>
                                                <li class="careerfy-column-12">
                                                    <div class="careerfy-resume-education-wrap">
                                                        <small>1979</small>
                                                        <h2><a href="#">Robin Milner Young Researcher Award</a>
                                                        </h2>
                                                    </div>
                                                    <div class="careerfy-resume-education-btn">
                                                        <a href="#" class="careerfy-icon careerfy-edit"></a>
                                                        <a href="#" class="careerfy-icon careerfy-rubbish"></a>
                                                    </div>
                                                </li>
                                                <li class="careerfy-column-12">
                                                    <div class="careerfy-resume-education-wrap">
                                                        <small>1985</small>
                                                        <h2><a href="#">Doctoral Dissertation Award</a></h2>
                                                    </div>
                                                    <div class="careerfy-resume-education-btn">
                                                        <a href="#" class="careerfy-icon careerfy-edit"></a>
                                                        <a href="#" class="careerfy-icon careerfy-rubbish"></a>
                                                    </div>
                                                </li>
                                                <li class="careerfy-column-12">
                                                    <div class="careerfy-resume-education-wrap">
                                                        <small>1990</small>
                                                        <h2><a href="#">Programming Languages Achievement</a>
                                                        </h2>
                                                    </div>
                                                    <div class="careerfy-resume-education-btn">
                                                        <a href="#" class="careerfy-icon careerfy-edit"></a>
                                                        <a href="#" class="careerfy-icon careerfy-rubbish"></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <input class="careerfy-employer-profile-submit" value="Update Resume" type="submit">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Main Section -->
    </div>
</div>

