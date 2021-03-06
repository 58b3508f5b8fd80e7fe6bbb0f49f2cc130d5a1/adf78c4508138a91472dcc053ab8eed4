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
                            @if(!null == session('status') && !null == session('state'))
                                <div class="alert alert-{{session('state')}}">{{session('status')}}</div>
                            @endif
                            <div class="careerfy-typo-wrap">
                                @if(isset($profile->description))
                                    <div class="careerfy-employer-box-section">
                                        <div class="col-sm-4">
                                            <a href="#" class="img-thumbnail img-rounded"><img
                                                        src="{{Storage::url(Auth::user()->avatar_location)}}"
                                                        class="user-avatar" alt=""></a>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="js"
                                                 style="float:left;width: 100%;">
                                                <form method="post"
                                                      action="{{url('/profile/avatar')}}"
                                                      enctype="multipart/form-data" novalidate class="box">
                                                    <div class="box__input text-center">
                                                        <input type="hidden" value="{{($profile->id+1933)}}" name="id">
                                                        <svg class="box__icon" xmlns="http://www.w3.org/2000/svg"
                                                             width="50"
                                                             height="43" viewBox="0 0 50 43">
                                                            <path d="M48.4 26.5c-.9 0-1.7.7-1.7 1.7v11.6h-43.3v-11.6c0-.9-.7-1.7-1.7-1.7s-1.7.7-1.7 1.7v13.2c0 .9.7 1.7 1.7 1.7h46.7c.9 0 1.7-.7 1.7-1.7v-13.2c0-1-.7-1.7-1.7-1.7zm-24.5 6.1c.3.3.8.5 1.2.5.4 0 .9-.2 1.2-.5l10-11.6c.7-.7.7-1.7 0-2.4s-1.7-.7-2.4 0l-7.1 8.3v-25.3c0-.9-.7-1.7-1.7-1.7s-1.7.7-1.7 1.7v25.3l-7.1-8.3c-.7-.7-1.7-.7-2.4 0s-.7 1.7 0 2.4l10 11.6z"/>
                                                        </svg>
                                                        <input type="file" name="avatar_location" id="file"
                                                               class="box__file"
                                                               accept=".png,.jpg,.jpeg"
                                                               data-multiple-caption="{count} files selected"/>
                                                        <label for="file"><strong>Select your profile
                                                                image</strong><span
                                                                    class="box__dragndrop"> or drag it here</span>.</label>
                                                        <p class="notice">Only image file formats (.png & .jpg) are
                                                            accepted..</p>
                                                        <button type="submit" class="box__button">Upload</button>
                                                    </div>


                                                    <div class="box__uploading"><strong><i
                                                                    class="fa fa-spinner fa-spin fa-3x"></i></strong><br>Uploading&hellip;
                                                    </div>
                                                    <div class="box__success">Done! <a
                                                                href="#" class="box__restart" role="button">Upload
                                                            CV?</a>
                                                    </div>
                                                    <div class="box__error">Error! <span></span>. <a
                                                                href="https://css-tricks.com/examples/DragAndDropFileUploading//?submit-on-demand"
                                                                class="box__restart" role="button">Try again!</a></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <hr>
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
                                                           type="text" name="first_name" required>
                                                    @if ($errors->has('first_name'))
                                                        <span class="text-danger">
                                                            <strong>{{ $errors->first('first_name') }}</strong>
                                                        </span>
                                                    @endif
                                                </li>
                                                <li class="careerfy-column-6">
                                                    <label>Last Name *</label>
                                                    <input value="{{$profile->last_name or old('last_name')}}"
                                                           type="text" name="last_name" required>
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
                                                           type="date" required>
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
                                                           placeholder="Phone No." type="text" required>
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
                                                           type="text" required>
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
                                                        <select name="country" required>
                                                            <option selected value="Nigeria">Nigeria</option>
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
                                                        <select name="state" id="state" required>
                                                            <option disabled selected>Select state</option>
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
                                                        <select name="lga" id="lga" required>
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
