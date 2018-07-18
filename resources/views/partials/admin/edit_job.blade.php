<form action="{{url('/backend/jobs/edit/'.$job->job_id)}}" method="post" id="job-form">
    {{csrf_field()}}
    <input type="hidden" value="{{$job->id+4361}}" name="id">
    <ul class="careerfy-row careerfy-employer-profile-form">
        <li class="careerfy-column-12">
            <label for="title">Title</label>
            <input id="title" name="title" type="text" value="{{$job->title}}"
                   placeholder="Enter the Job Title">
        </li>
        <li class="careerfy-column-6">
            <label for="country">Country</label>
            <div class="careerfy-profile-select">
                <select id="country" name="country">
                    @foreach(__('countries.index') as $country)
                        <option @if($country==$job->country) selected
                                @elseif($country=="NIGERIA") selected @endif>{!! $country !!}</option>
                    @endforeach
                </select></div>
        </li>
        <li class="careerfy-column-6">
            <label for="state">State</label>
            <div class="careerfy-profile-select">
                <select id="state" name="state"
                        onchange="changeLGA()">
                    <option selected disabled>Select a state..</option>
                    @foreach(__('states.index') as $state)
                        <option @if($country==$job->state) selected @endif>{{$state}}</option>
                    @endforeach
                </select>
            </div>
        </li>
        <li class="careerfy-column-6">
            <label for="lga">LGA</label>
            <div class="careerfy-profile-select">
                <select id="lga" name="lga">
                    <option selected>{{$job->lga}}</option>
                </select></div>
        </li>
        <li class="careerfy-column-6">
            <label for="experience">Experience</label>
            <input id="experience" name="experience" type="number" value="{{$job->experience}}"
                   placeholder="Choose Required Experience">
        </li>
        <li class="careerfy-column-6">
            <label for="min-salary">Min. Salary</label>
            <input id="min-salary" name="salary_from" type="number" value="{{$job->salary_from}}"
                   placeholder="Set Min. salary">
        </li>
        <li class="careerfy-column-6">
            <label for="max-salary">Max. Salary</label>
            <input id="max-salary" name="salary_to" type="number" value="{{$job->salary_to}}"
                   placeholder="Set Max. Salary">
        </li>

        <li class="careerfy-column-6">
            <label for="post-date">Post date</label>
            <input id="post-date" name="post_at" type="date" value="{{$job->post_at}}"
                   placeholder="Select Post Date">
        </li>
        <li class="careerfy-column-6">
            <label for="deadline-date">Deadline date</label>
            <input id="deadline-date"
                   name="close_at" type="date" value="{{$job->close_at}}"
                   placeholder="Select Deadline Date">
        </li>

        <li class="careerfy-column-6">
            <label for="qualification">Qualification</label>
            <select name="qualification[]" id="qualification" multiple="multiple"
                    class="form-control">
                <option value="B.Sc.">Bachelors of Science (B.Sc.)</option>
                <option value="B.Tech">Bachelors of Technology (B.Tech)</option>
                <option value="B.Eng.">Bachelors of Engineering (B.Eng)</option>
                <option value="OND">Ordinary National Diploma (OND)</option>
                <option value="HND">Higher National Diploma (HND)</option>
                <option value="SSCE">Senior Secondary Certificate Examinations
                    (SSCE)
                </option>
                <option value="FSLC">First School Leaving Certificate</option>
            </select>


        </li>
        <li class="careerfy-column-6">

            <div class="careerfy-profile-select">
                <label for="test">Add Test</label>
                <select id="test" name="test">
                    <option selected disabled>Choose a test for the Job..</option>
                    @foreach($tests as $test)
                        <option value="{{$test->test_id}}">{{$test->title}}</option>
                    @endforeach
                </select>
            </div>

        </li>
        <li class="careerfy-column-12">
            <label for="description">Description</label>
            <textarea id="job-description" name="description">{{$job->description}}</textarea>
        </li>
        <li class="careerfy-column-6">
            <button type="submit" class="btn btn-alt-primary">Submit</button>
        </li>
    </ul>
</form>