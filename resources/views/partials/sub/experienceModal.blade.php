<form id="experiencesForm" class="resume-form"
      action="{{url('/resume/experiences')}}"
      method="post">
    {{csrf_field()}}
    <ul class="careerfy-row careerfy-employer-profile-form">
        <li class="careerfy-column-12">
            <label>Title *</label>
            <input name="title" placeholder="Enter title of experience"
                   type="text">
        </li>
        <li class="careerfy-column-5">
            <label>From Date *</label> <input type="date" name="started_at"
                                              placeholder="yyyy-mm-dd">
        </li>
        <li class="careerfy-column-5">
            <label>To Date *</label>
            <input type="date" name="finished_at" placeholder="yyyy-mm-dd">
        </li>
        <li class="careerfy-column-2">
            <div class="careerfy-checkbox">
                <input id="r8" name="status" value="current"
                       type="checkbox">
                <label for="r8"><span></span>Present</label>
            </div>
        </li>
        <li class="careerfy-column-12">
            <label>Company *</label>
            <input placeholder="Enter company name" name="company"
                   type="text">
        </li>
        <li class="careerfy-column-12">
            <label>Description *</label>
            <textarea name="description"
                      placeholder="Describe your experience.."></textarea>
        </li>
        <li class="careerfy-column-12">
            <input value="Add experince" type="submit">
        </li>
    </ul>
</form>