<ul class="careerfy-row">
    @foreach($educations as $education)
        <li class="careerfy-column-12">
            <div class="careerfy-resume-education-wrap col-xs-11">
                <small>{{date('Y',strtotime($education->started_at))}}
                    - {{date('Y',strtotime($education->finished_at))}}</small>
                <h2><a href="#">{{$education->title}}</a></h2>
                <small>{{$education->qualification}}</small>
                <span>{{$education->institution}}</span>
            </div>
            <div class="careerfy-resume-education-btn col-xs-1">
                <a href="javascript:void(0)" data-title="{{$education->title}}" data-id="{{$education->id+7051}}"
                   data-type="education" class="careerfy-icon careerfy-edit resume-edit"></a>
                <a href="javascript:void(0)" data-title="{{$education->title}}" data-id="{{$education->id+3329}}"
                   data-type="education" onclick="deleteResume(this)" class="careerfy-icon careerfy-rubbish resume-delete"></a>
            </div>
        </li>
    @endforeach
</ul>