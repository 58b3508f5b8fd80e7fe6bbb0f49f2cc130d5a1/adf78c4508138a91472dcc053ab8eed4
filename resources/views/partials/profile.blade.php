<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="careerfy-page-title">
                            <h1>Profile</h1>
                            <p>You can update your profile details</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="careerfy-breadcrumb">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="#">{{Auth::user()->first_name}}</a></li>
                    <li>Profile</li>
                </ul>
            </div>

            <!-- Main Section -->
            <div class="careerfy-main-section careerfy-dashboard-full">
                <div class="container">
                    <div class="row">
                        @include('includes.sidebar',['profile_sidebar'=>true])
                        <div class="careerfy-column-9">
                            @if(!null == session('status'))
                                @php $status=session('status'); var_dump($status)@endphp
                                {{--<div class="alert alert-{{$status['state']}}">{{$status['message']}}</div>--}}
                            @endif
                            <div class="careerfy-typo-wrap">
                                <form class="careerfy-employer-dasboard" action="{{route('update_profile')}}"
                                      method="post">
                                    {{csrf_field()}}
                                    @if(isset($profile))<input type="hidden" name="id"
                                                               value={{($profile->id+3021)}}>@endif
                                    <div>
                                        <div class="careerfy-employer-box-section">
                                            <div class="careerfy-profile-title"><h2>Basic Information</h2></div>
                                            <ul class="careerfy-row careerfy-employer-profile-form">
                                                <li class="careerfy-column-6">
                                                    <label>First Name *</label>
                                                    <input value="{{$profile->first_name or old('first_name')}}"
                                                           type="text" name="first_name">
                                                    @if ($errors->has('first_name'))
                                                        <span class="text-danger">
                                                            <strong>{{ $errors->first('first_name') }}</strong>
                                                        </span>
                                                    @endif
                                                </li>
                                                <li class="careerfy-column-6">
                                                    <label>Last Name *</label>
                                                    <input value="{{$profile->last_name or old('last_name')}}"
                                                           type="text" name="last_name">
                                                    @if ($errors->has('last_name'))
                                                        <span class="text-danger">
                                                            <strong>{{ $errors->first('last_name') }}</strong>
                                                        </span>
                                                    @endif
                                                </li>
                                                <li class="careerfy-column-6">
                                                    <label>Email *</label>
                                                    <input name="email" value="{{$profile->email or old('email')}}"
                                                           readonly
                                                           type="text">
                                                    @if ($errors->has('email'))
                                                        <span class="text-danger">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </li>
                                                <li class="careerfy-column-6">
                                                    <label>Date of Birth:</label>
                                                    <input name="dob"
                                                           value="@if(isset($profile->dob)){{date('Y-m-d',strtotime($profile->dob))}}@endif"
                                                           type="text">
                                                    @if ($errors->has('dob'))
                                                        <span class="text-danger">
                                                            <strong>{{ $errors->first('dob') }}</strong>
                                                        </span>
                                                    @endif

                                                </li>
                                                <li class="careerfy-column-6">
                                                    <label>Phone *</label>
                                                    <input name="phone_no"
                                                           value="{{$profile->phone_no or old('phone_number')}}"
                                                           placeholder="Phone No." type="text">
                                                    @if ($errors->has('phone_no'))
                                                        <span class="text-danger">
                                                            <strong>{{ $errors->first('phone_no') }}</strong>
                                                        </span>
                                                    @endif
                                                </li>
                                                <li class="careerfy-column-6">
                                                    <label>Job Title *</label>
                                                    <input value="{{$profile->job_title or old('job_title')}}"
                                                           placeholder="Job Title" name="job_title"
                                                           type="text">
                                                    @if ($errors->has('title'))
                                                        <span class="text-danger">
                                                            <strong>{{ $errors->first('title') }}</strong>
                                                        </span>
                                                    @endif
                                                </li>
                                                <li class="careerfy-column-12">
                                                    <label>Description *</label>
                                                    <textarea
                                                            name="description">{{$profile->description or old('description')}}</textarea>
                                                    @if ($errors->has('description'))
                                                        <span class="text-danger">
                                                            <strong>{{ $errors->first('description') }}</strong>
                                                        </span>
                                                    @endif
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
                                                                <option @if(isset($profile->country)&&( $profile->country == $country || old('country') == $country)) selected
                                                                        @endif value="{{$country}}">{{$country}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    @if ($errors->has('country'))
                                                        <span class="text-danger">
                                                            <strong>{{ $errors->first('country') }}</strong>
                                                        </span>
                                                    @endif
                                                </li>
                                                <li class="careerfy-column-6">
                                                    <label>Region *</label>
                                                    <div class="careerfy-profile-select">
                                                        <select name="state" id="state">
                                                            @foreach(__('states.index') as $state)
                                                                <option value="{{$state}}"
                                                                        @if(isset($profile->state)&& ($profile->state == $state || old('state') == $state)) selected @endif>{{$state}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    @if ($errors->has('state'))
                                                        <span class="text-danger">
                                                            <strong>{{ $errors->first('state') }}</strong>
                                                        </span>
                                                    @endif
                                                </li>
                                                <li class="careerfy-column-6">
                                                    <label>LGA</label>
                                                    <div class="careerfy-profile-select">
                                                        <select name="lga" id="lga">
                                                            <option>{{$profile->lga or old('lga')}}</option>
                                                        </select>
                                                    </div>
                                                    @if ($errors->has('lga'))
                                                        <span class="text-danger">
                                                            <strong>{{ $errors->first('lga') }}</strong>
                                                        </span>
                                                    @endif
                                                </li>
                                                <li class="careerfy-column-10">
                                                    <label>Full Address *</label>
                                                    <input value="{{$profile->address or old('address')}}" type="text"
                                                           name="address">
                                                    @if ($errors->has('address'))
                                                        <span class="text-danger">
                                                            <strong>{{ $errors->first('address') }}</strong>
                                                        </span>
                                                    @endif
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
                                                                    <option @if(isset($profile)&&($profile->experience==$i || old('experience')==$i)) selected @endif>{{$i}}
                                                                        Year
                                                                    </option>
                                                                @else
                                                                    <option @if(isset($profile)&&($profile->experience==$i || old('experience')==$i)) selected @endif>{{$i}}
                                                                        Years
                                                                    </option>
                                                                @endif
                                                            @endfor
                                                        </select>
                                                    </div>
                                                    @if ($errors->has('experience'))
                                                        <span class="text-danger">
                                                            <strong>{{ $errors->first('experience') }}</strong>
                                                        </span>
                                                    @endif
                                                </li>
                                                <li class="careerfy-column-6">
                                                    <label>Current Salary(&#8358;) *</label>
                                                    <input value="{{$profile->current_salary or number_format(old('current_salary'))}}"
                                                           placeholder="Current Salary" type="text"
                                                           name="current_salary">
                                                    @if ($errors->has('current_salary'))
                                                        <span class="text-danger">
                                                            <strong>{{ $errors->first('current_salary') }}</strong>
                                                        </span>
                                                    @endif
                                                </li>
                                                <li class="careerfy-column-6">
                                                    <label>Expected Salary(&#8358;) *</label>
                                                    <div class="careerfy-profile-select">
                                                        <input value="{{$profile->expected_salary or number_format(old('expected_salary'))}}"
                                                               placeholder="Expected Salary" type="text"
                                                               name="expected_salary">
                                                    </div>
                                                    @if ($errors->has('expected_salary'))
                                                        <span class="text-danger">
                                                            <strong>{{ $errors->first('expected_salary') }}</strong>
                                                        </span>
                                                    @endif
                                                </li>
                                                {{--<li class="careerfy-column-6">
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
                                                </li>--}}
                                            </ul>
                                        </div>
                                        <input class="careerfy-employer-profile-submit" value="Save Setting"
                                               type="submit">
                                    </div>
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
