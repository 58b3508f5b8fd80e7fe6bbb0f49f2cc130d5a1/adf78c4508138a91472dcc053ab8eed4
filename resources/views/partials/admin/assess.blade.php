<form method="POST" action="{{url('backend/interviews/assess')}}" id="assess-form">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$applicant->application_id}}">
    <div class="careerfy-box-title">
        <span>Send an invite...</span>
    </div>
    <div class="careerfy-user-options">
        <ul>
            <li class="active" style="width:100%;">

                <a href="#">
                    <i class="careerfy-icon careerfy-user"></i>
                    <span>{{"$applicant->first_name $applicant->last_name"}}</span>
                    <small>{{$applicant->job_title}}</small>
                </a>
            </li>
        </ul>

    </div>
    <div class="careerfy-user-form">
        <ul>
            <li class="col-md-12">
                <label>Job Title:</label>
                <input value="{{$applicant->title}}" name="job_title" type="text"
                       placeholder="Enter Job Title" required readonly>
                <i class="fa fa-user"></i>
                @if ($errors->has('job_title'))
                    <span class="text-danger">{{ $errors->first('job_title') }}</span>
                @endif
            </li>
            <li class="col-md-6">
                <label>Full Name:</label>
                <input value="{{"$applicant->first_name $applicant->last_name"}}" name="full_name" type="text"
                       placeholder="Enter the applicant's full name" required readonly>
                <i class="fa fa-envelope"></i>
                @if ($errors->has('full_name'))
                    <span class="text-danger">{{ $errors->first('full_name') }}</span>
                @endif
            </li>
            <li class="col-md-6">
                <label>Email Address:</label>
                <input value="{{$applicant->email or null}}" name="email" type="email"
                       placeholder="Enter the applicant's email" required readonly>
                <i class="fa fa-envelope"></i>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </li>
            <li class="col-md-6">
                <label>Phone Number:</label>
                <input value="{{$applicant->phone_no or null}}" name="phone_no" type="text"
                       placeholder="Enter Phone number" required readonly>
                <i class="fa fa-phone"></i>
                @if ($errors->has('phone_no'))
                    <span class="text-danger">{{ $errors->first('phone_no') }}</span>
                @endif
            </li>
            <li class="col-md-12">
                <label>Interview Performance: <strong class="label label-default">(<span id="performance-range"></span> %)</strong></label>
                <input id="performance" class="form-control" name="performance" type="range" min="0" max="100" required>
                @if ($errors->has('performance'))
                    <span class="text-danger">{{ $errors->first('phone_no') }}</span>
                @endif
            </li>
            <li class="careerfy-user-form-coltwo-full">
                <input value="Invite" type="submit">
            </li>
        </ul>
    </div>
</form>