<div class="container">
    <div class="row">
        <div class="col-md-12">

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


            <!-- Main Section -->
            <div class="careerfy-main-section careerfy-dashboard-full">
                <div class="container">
                    <div class="row">
                        @include('includes.sidebar',['profile_sidebar'=>true])
                        <div class="careerfy-column-9">
                            <div class="careerfy-typo-wrap">
                                <form class="careerfy-employer-dasboard" action="{{route('update_profile')}}">
                                    <div class="careerfy-employer-box-section">
                                        <div class="careerfy-profile-title"><h2>Basic Information</h2></div>
                                        <ul class="careerfy-row careerfy-employer-profile-form">
                                            <li class="careerfy-column-6">
                                                <label>First Name *</label>
                                                <input value="{{$profile->first_name or null}}" type="text">
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Last Name *</label>
                                                <input value="{{$profile->last_name or null}}" type="text">
                                            </li>
                                     p       <li class="careerfy-column-6">
                                                <label>Email *</label>
                                                <input value="{{$profile->email or null}}" type="text">
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Date of Birth:</label>
                                                <div class="careerfy-three-column-row">
                                                    <div class="careerfy-profile-select careerfy-three-column">
                                                        <select>
                                                            <option>dd</option>
                                                            <option>dd</option>
                                                        </select>
                                                    </div>
                                                    <div class="careerfy-profile-select careerfy-three-column">
                                                        <select>
                                                            <option>mm</option>
                                                            <option>mm</option>
                                                        </select>
                                                    </div>
                                                    <div class="careerfy-profile-select careerfy-three-column">
                                                        <select>
                                                            <option>yyyy</option>
                                                            <option>yyyy</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Phone *</label>
                                                <input value="{{$profile->phone_no}}" placeholder="Phone No."
                                                       type="text">
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Job Title *</label>
                                                <input value="{{$profile->title}}" placeholder="Job Title"
                                                       type="text">
                                            </li>
                                            <li class="careerfy-column-12">
                                                <label>Description *</label>
                                                <textarea>{{$profile->description}}</textarea>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="careerfy-employer-box-section">
                                        <div class="careerfy-profile-title"><h2>Address / Location</h2></div>
                                        <ul class="careerfy-row careerfy-employer-profile-form">
                                            <li class="careerfy-column-6">
                                                <label>Country *</label>
                                                <div class="careerfy-profile-select">
                                                    <select name="country" state="country">
                                                        @foreach(__('countries.index') as $country)
                                                            <option value="{{$country}}">{{$country}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Region *</label>
                                                <div class="careerfy-profile-select">
                                                    <select name="state" id="state">
                                                        @foreach(__('states.index') as $state)
                                                            <option value="{{$state}}"
                                                                    @if($profile->state == $state) selected @endif>{{$state}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>LGA</label>
                                                <div class="careerfy-profile-select">
                                                    <select name="lga" id="lga">
                                                        <option>{{$profile->lga or null}}</option>
                                                    </select>
                                                </div>
                                            </li>
                                            <li class="careerfy-column-10">
                                                <label>Full Address *</label>
                                                <input value="{{$profile->address or null}}" type="text" name="address">
                                            </li>
                                            <li class="careerfy-column-2">
                                                <button class="careerfy-findmap-btn">Find on Map</button>
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Latitude</label>
                                                <input value="51.4935825"
                                                       onblur="if(this.value == '') { this.value ='51.4935825'; }"
                                                       onfocus="if(this.value =='51.4935825') { this.value = ''; }"
                                                       type="text">
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Longitude</label>
                                                <input value="-0.16803379999998924"
                                                       onblur="if(this.value == '') { this.value ='-0.16803379999998924'; }"
                                                       onfocus="if(this.value =='-0.16803379999998924') { this.value = ''; }"
                                                       type="text">
                                            </li>
                                            <li class="careerfy-column-12">
                                                <div class="careerfy-profile-map">
                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d22589232.038285658!2d-103.9763543971716!3d46.28054447273778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1507595834401"></iframe>
                                                </div>
                                                <span class="careerfy-short-message">For the precise location, you can drag and drop the pin.</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="careerfy-employer-box-section">
                                        <div class="careerfy-profile-title"><h2>Other Information</h2></div>
                                        <ul class="careerfy-row careerfy-employer-profile-form">
                                            <li class="careerfy-column-6">
                                                <label>Experience *</label>
                                                <div class="careerfy-profile-select">
                                                    <select name="experience">
                                                        @for($i=1;$i<=50;$i++)
                                                            @if($i==1)
                                                                <option>{{$i}} Year</option>
                                                            @else
                                                                <option>{{$i}} Years</option>
                                                            @endif
                                                        @endfor
                                                    </select>
                                                </div>
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Current Salary(&#8358;) *</label>
                                                <input value="{{number_format($profile->current_salary)}}"
                                                       placeholder="Current Salary" type="text" name="current_salary">
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Expected Salary(&#8358;) *</label>
                                                <div class="careerfy-profile-select">
                                                    <input value="{{number_format($profile->expected_salary)}}"
                                                           placeholder="Expected Salary" type="text"
                                                           name="expected_salary">
                                                </div>
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Languages *</label>
                                                <div class="careerfy-profile-select">
                                                    <select name="languages">
                                                        <option>English</option>
                                                        <option>English</option>
                                                    </select>
                                                </div>
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Education Levels *</label>
                                                <div class="careerfy-profile-select">
                                                    <select name="education">
                                                        <option>B.sc Master</option>
                                                        <option>B.sc Master</option>
                                                    </select>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <input class="careerfy-employer-profile-submit" value="Save Setting" type="submit">
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Main Section -->


        </div>
    </div>

</div>
