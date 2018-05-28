<ul class="careerfy-row">
    @foreach($honors as $honor)
        <li class="careerfy-column-12">
            <div class="careerfy-resume-education-wrap col-xs-11">
                <small>{{date('Y',strtotime($honor->received_at))}}</small>
                <h2><a href="#">{{$honor->title}}</a></h2>
                <small>{{$honor->description}}</small>
                <span>{{$honor->company}}</span>
            </div>
            <div class="careerfy-resume-education-btn col-xs-1">
                <a href="javascript:void(0)" data-title="{{$honor->title}}" data-id="{{$honor->id+7051}}"
            data-url="deletehonor" data-type="Honor" class="careerfy-icon careerfy-edit resume-edit"></a>
            <a href="javascript:void(0)" data-title="{{$honor->title}}" data-id="{{$honor->id+3329}}"
               data-url="deletehonor" data-type="honor" onclick="deleteResume(this)"
               class="careerfy-icon careerfy-rubbish resume-delete"></a>
            </div>
        </li>
    @endforeach
</ul>