<ul class="careerfy-row">
    @foreach($skills as $skill)
        <li class="careerfy-column-12">
            <div class="careerfy-add-skills-wrap col-xs-11">
                <span>{{$skill->percentage}}</span>
                <h2><a href="#">{{$skill->title}}</a></h2>
            </div>
            <div class="careerfy-resume-education-btn col-xs-1">
                <a href="javascript:void(0)" data-title="{{$skill->title}}" data-id="{{$skill->id+7051}}"
                   data-type="Skill" class="careerfy-icon careerfy-edit resume-edit"></a>
                <a href="javascript:void(0)" data-title="{{$skill->title}}" data-id="{{$skill->id+3329}}"
                   data-type="skill" onclick="deleteResume(this)"
                   class="careerfy-icon careerfy-rubbish resume-delete"></a>
            </div>
        </li>
    @endforeach
</ul>