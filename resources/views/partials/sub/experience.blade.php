<ul class="careerfy-row">
    @foreach($educations as $education)
        <li class="careerfy-column-12">
            <div class="careerfy-resume-education-wrap">
                <small>{{date('Y',strtotime($education->finished_at))}} - {{date('Y',strtotime($education->finished_at))}}</small>
                <h2><a href="#">{{$education->title}}</a></h2>
                <small>{{$education->qualification}}</small><span>{{$education->institution}}</span>
            </div>
            <div class="careerfy-resume-education-btn">
                <a href="#" onclick="editEducation({{($education->id+1293)}})" class="careerfy-icon careerfy-edit"></a>
                <a href="#" onclick="deleteEducation({{($education->id+1753)}})" class="careerfy-icon careerfy-rubbish"></a>
            </div>
        </li>
    @endforeach
</ul>