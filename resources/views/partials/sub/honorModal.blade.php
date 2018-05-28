<form action="{{url('/resume/honors')}}" method="post" class="resume-form">
    <ul class="careerfy-row careerfy-employer-profile-form">
        <li class="careerfy-column-12">
            <label>Award Title *</label>
            <input placeholder="Enter award title.." name="title"
                   type="text">
        </li>
        <li class="careerfy-column-6">
            <label>Year *</label>
            <input type="date" name="received_at" placeholder="yyyy-mm-dd">
        </li>
        <li class="careerfy-column-6">
            <label>Company *</label>
            <input placeholder="Enter company.." name="company" type="text">
        </li>
        <li class="careerfy-column-12">
            <label>Description *</label>
            <textarea name="description"></textarea>
        </li>
        <li class="careerfy-column-12">
            <input value="Add Award" type="submit">
        </li>
    </ul>
</form>