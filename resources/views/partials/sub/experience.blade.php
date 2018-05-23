<ul class="careerfy-row">
    @foreach($experiences as $experience)
        <li class="careerfy-column-12">
            <div class="careerfy-resume-education-wrap">
                <small>{{date('Y',strtotime($experience->finished_at))}} - {{date('Y',strtotime($experience->finished_at))}}</small>
                <h2><a href="#">{{$experience->title}}</a></h2>
                <small>{{$experience->description}}</small><span>{{$experience->company}}</span>
            </div>
            <div class="careerfy-resume-education-btn">
                <a href="#" onclick="editexperience({{($experience->id+1293)}})" class="careerfy-icon careerfy-edit"></a>
                <a href="#" onclick="deleteexperience({{($experience->id+1753)}})" class="careerfy-icon careerfy-rubbish"></a>
            </div>
        </li>
    @endforeach
</ul>