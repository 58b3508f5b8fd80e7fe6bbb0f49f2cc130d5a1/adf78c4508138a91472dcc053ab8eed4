<form method="post" action="{{url('/resume/education')}}" class="resume-form">
    <ul class="careerfy-row careerfy-employer-profile-form">
        <li class="careerfy-column-12">
            <label>Title *</label>
            <input type="text" class="form-control" name="title">
        </li>
        <li class="careerfy-column-6">
            <label>From Date *</label>
            <input type="date" class="form-control" name="started_at">
        </li>
        <li class="careerfy-column-6">
            <label>To Date *</label>
            <input type="date" class="form-control" name="finished_at">
        </li>
        <li class="careerfy-column-12">
            <label>Institute *</label>
            <input type="text" class="form-control" name="institution">
        </li>
        <li class="careerfy-column-12">
            <label>Qualification *</label>
            <div class="careerfy-profile-select">
                <select name="qualification">
                    <option value="B.Sc">Bachelor of Science</option>
                    <option value="B.Tech">Bachelor of Technology</option>
                    <option value="B.Eng">Bachelor of Engineering</option>
                    <option value="B.Eng">Bachelor of Engineering</option>
                    <option value="M.Sc">Masters</option>

                </select>
            </div>
        </li>
        <li class="careerfy-column-12">
            <label>Description *</label>
            <textarea name="description"></textarea>
        </li>
        <li class="careerfy-column-12">
            <input value="Add education" type="submit">
        </li>
    </ul>
</form>