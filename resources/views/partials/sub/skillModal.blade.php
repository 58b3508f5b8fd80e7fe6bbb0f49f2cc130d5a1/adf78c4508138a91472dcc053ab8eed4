<form action="{{url('/resume/skills')}}" method="post" class="resume-form">
    <ul class="careerfy-row careerfy-employer-profile-form">
        <li class="careerfy-column-12">
            <label>Skill Heading *</label>
            <input placeholder="Enter skill type.." type="text"
                   name="title">
        </li>
        <li class="careerfy-column-12">
            <label>Percentage <span class="badge badge-primary"><span
                            id="percent-output"></span>%</span> *</label>
            <input type="range" min="0" max="100" id="percentage"
                   onchange="document.getElementById('percent-output').innerHTML=this.value; "
                   name="percentage">
        </li>
        <li class="careerfy-column-12">
            <input value="Add Skills" type="submit">
        </li>
    </ul>
</form>