<form method="POST" action="{{url('backend/tests/invite')}}" id="invite-form">
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
            <li class="col-md-6">
                <label>Due Date</label>:</label>
                <input value="{{$applicant->due_date or null}}" name="due_date" type="date"
                       placeholder="Enter Due Date (YYYY-MM-DD)" required>
                <i class="fa fa-phone"></i>
                @if ($errors->has('phone_no'))
                    <span class="text-danger">{{ $errors->first('phone_no') }}</span>
                @endif
            </li>
            <li class="col-md-12">
                <label>Interview Type:</label>
                <div class="list-group">
                    <div class="careerfy-checkbox list-group-item" style="width: auto; padding-right:14px;">
                        <input id="skype" name="type" type="radio" value="skype" required>
                        <label for="skype"><span></span> Skype</label>
                    </div>
                    <div class="careerfy-checkbox list-group-item" style="width: auto; padding-right:14px;">
                        <input id="whatsapp" name="type" type="radio" value="whatsapp">
                        <label for="whatsapp"><span></span> Whatsapp</label>
                    </div>
                    <div class="careerfy-checkbox list-group-item" style="width: auto; padding-right:14px;">
                        <input id="phone" name="type" type="radio" value="phone">
                        <label for="phone"><span></span> Phone</label>
                    </div>
                    <div class="careerfy-checkbox list-group-item" style="width: auto; padding-right:14px;">
                        <input id="physical" name="type" type="radio" value="physical meeting">
                        <label for="physical"><span></span> Physical Meeting</label>
                    </div>
                </div>

                @if ($errors->has('type'))
                    <span class="text-danger">{{ $errors->first('type') }}</span>
                @endif

            </li>
            <li class="col-md-6">
                <label>Address</label>:</label>
                <input name="address" type="text"
                       placeholder="Enter Phone number" required>
                <i class="fa fa-phone"></i>
                @if ($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                @endif
            </li>
            <li class="careerfy-user-form-coltwo-full">
                <input value="Invite" type="submit">
            </li>
        </ul>
    </div>
</form>