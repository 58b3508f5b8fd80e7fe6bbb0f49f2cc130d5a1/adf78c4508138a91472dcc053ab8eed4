<ul class="careerfy-row">
    @foreach($skills as $skill)
        <li class="careerfy-column-12">
            <div class="careerfy-add-skills-wrap">
                <span>{{$skill->percentage}}</span>
                <h2><a href="#">{{$skill->title}}</a></h2>
            </div>
            <div class="careerfy-resume-education-btn">
                <a href="javascript:void(0)" onclick="editSkills({{($skill->id+1293)}})"
                   class="careerfy-icon careerfy-edit"></a>
                <a href="javascript:void(0)" onclick="deleteSkills({{($skill->id+1753)}})"
                   class="careerfy-icon careerfy-rubbish"></a>
            </div>
        </li>
    @endforeach
</ul>