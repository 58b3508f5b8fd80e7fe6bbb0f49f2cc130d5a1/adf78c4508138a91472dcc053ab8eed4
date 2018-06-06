@php
    $public='';
    if(App::environment('production'))
    $public ='public';
@endphp
<div class="row">


    <div class="careerfy-subheader careerfy-subheader-without-bg">
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
                        @if(!null == session('status'))
                            @php $status=session('status'); @endphp
                            <div class="alert alert-{{session('state')}}">{{session('status')}}</div>
                        @endif
                        <div class="careerfy-typo-wrap">

                            <div class="careerfy-employer-box-section">
                                <div class="careerfy-profile-title"><h2>My Resume</h2></div>
                                <div class="careerfy-candidate-section">
                                    <div class="careerfy-candidate-resume-wrap">
                                        <div class="careerfy-candidate-title"><h2><i
                                                        class="careerfy-icon careerfy-resume-1"></i> Curriculum Vitae
                                                <a href="{{url('/resume/download/cv')}}"
                                                   onclick="window.location.href=this.href"
                                                   class="careerfy-resume-addbtn"><span
                                                            class="fa fa-plus"></span> View your CV</a>
                                            </h2>
                                        </div>
                                        <div class="js"
                                             style="float:left;width: 100%;padding-left:78px;margin-bottom:58px;">
                                            <form method="post"
                                                  action="{{url('/resume/curriculumvitae')}}"
                                                  enctype="multipart/form-data" novalidate class="box">
                                                <div class="box__input text-center">
                                                    <input type="hidden" value="{{($resume->id+373)}}" name="id">
                                                    <svg class="box__icon" xmlns="http://www.w3.org/2000/svg" width="50"
                                                         height="43" viewBox="0 0 50 43">
                                                        <path d="M48.4 26.5c-.9 0-1.7.7-1.7 1.7v11.6h-43.3v-11.6c0-.9-.7-1.7-1.7-1.7s-1.7.7-1.7 1.7v13.2c0 .9.7 1.7 1.7 1.7h46.7c.9 0 1.7-.7 1.7-1.7v-13.2c0-1-.7-1.7-1.7-1.7zm-24.5 6.1c.3.3.8.5 1.2.5.4 0 .9-.2 1.2-.5l10-11.6c.7-.7.7-1.7 0-2.4s-1.7-.7-2.4 0l-7.1 8.3v-25.3c0-.9-.7-1.7-1.7-1.7s-1.7.7-1.7 1.7v25.3l-7.1-8.3c-.7-.7-1.7-.7-2.4 0s-.7 1.7 0 2.4l10 11.6z"/>
                                                    </svg>
                                                    <input type="file" name="cv_location" id="file" class="box__file"
                                                           accept=".pdf"
                                                           data-multiple-caption="{count} files selected"/>
                                                    <label for="file"><strong>Select your CV</strong><span
                                                                class="box__dragndrop"> or drag it here</span>.</label>
                                                    <p class="notice">Only .pdf are accepted for uploads &amp;
                                                        .pdf</p>
                                                    <button type="submit" class="box__button">Upload</button>
                                                </div>


                                                <div class="box__uploading"><strong><i
                                                                class="fa fa-spinner fa-spin fa-3x"></i></strong><br>Uploading&hellip;
                                                </div>
                                                <div class="box__success">Done! <a
                                                            href="#" class="box__restart" role="button">Upload CV?</a>
                                                </div>
                                                <div class="box__error">Error! <span></span>. <a
                                                            href="https://css-tricks.com/examples/DragAndDropFileUploading//?submit-on-demand"
                                                            class="box__restart" role="button">Try again!</a></div>
                                            </form>
                                        </div>
                                    </div>
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
                                                <a href="javascript:void(0)" onclick="getModal('education','create')"
                                                   class="careerfy-resume-addbtn"><span
                                                            class="fa fa-plus"></span> Add education</a>
                                            </h2>
                                        </div>

                                        <div class="careerfy-resume-education" id="resume-education">
                                            @include('partials.sub.education')
                                        </div>
                                    </div>
                                    <div class="careerfy-candidate-resume-wrap">
                                        <div class="careerfy-candidate-title"><h2>
                                                <i class="careerfy-icon careerfy-social-media"></i> Experience <a
                                                        href="javascript:void(0)"
                                                        onclick="getModal('experience','create')"
                                                        class="careerfy-resume-addbtn"><span
                                                            class="fa fa-plus"></span> Add experince</a>
                                            </h2>
                                        </div>

                                        <div class="careerfy-resume-education" id="resume-experience">
                                            @include('partials.sub.experience')
                                        </div>
                                    </div>
                                    <div class="careerfy-candidate-resume-wrap">
                                        <div class="careerfy-candidate-title"><h2>
                                                <i class="careerfy-icon careerfy-design-skills"></i> Skills
                                                <a href="javascript:void(0)" onclick="getModal('skill','create')"
                                                   class="careerfy-resume-addbtn"><span
                                                            class="fa fa-plus"></span> Add Skills</a>
                                            </h2></div>

                                        <div class="careerfy-add-skills" id="resume-skill">
                                            @include('partials.sub.skill')
                                        </div>
                                    </div>
                                    <div class="careerfy-candidate-resume-wrap">
                                        <div class="careerfy-candidate-title"><h2>
                                                <i class="careerfy-icon careerfy-trophy"></i> Honors &amp;
                                                Awards
                                                <a href="#" class="careerfy-resume-addbtn"
                                                   onclick="getModal('honor','create')"><span
                                                            class="fa fa-plus"></span> Add Award</a>
                                            </h2>
                                        </div>

                                        <div class="careerfy-resume-education careerfy-resume-awards" id="resume-honor">
                                            @include('partials.sub.honor')
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Main Section -->
    </div>
</div>
<div id="resume-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" style="background-color: #fff;">
            <div class="modal-header" style="background-color:#2c3e50;">
                <button type="button" class="close" data-dismiss="modal" style="color: #ffffff;">&times;</button>
                <h4 class="modal-title" style="color: #ffffff;"></h4>
            </div>
            <div class="modal-body ">

            </div>

        </div>


    </div>
</div>