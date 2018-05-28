<ul class="careerfy-row">
    @foreach($experiences as $experience)
        <li class="careerfy-column-12">
            <div class="careerfy-resume-education-wrap col-xs-11">
                <small>{{date('Y',strtotime($experience->started_at))}} - {{date('Y',strtotime($experience->finished_at))}}</small>
                <h2><a href="#">{{$experience->title}}</a></h2>
                <small>{{$experience->description}}</small><span>{{$experience->company}}</span>
            </div>
            <div class="careerfy-resume-education-btn col-xs-1">
                <a href="javascript:void(0)" data-title="{{$experience->title}}" data-id="{{$experience->id+7051}}"
                   data-url="deleteexperience" data-type="Experience" class="careerfy-icon careerfy-edit resume-edit"></a>
                <a href="javascript:void(0)" data-title="{{$experience->title}}" data-id="{{$experience->id+3329}}"
                   data-url="deleteexperience" data-type="experience" onclick="deleteResume(this)"
                   class="careerfy-icon careerfy-rubbish resume-delete"></a>
            </div>
        </li>
    @endforeach
</ul>