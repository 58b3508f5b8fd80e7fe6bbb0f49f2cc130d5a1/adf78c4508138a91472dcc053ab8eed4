<ul class="careerfy-row">
    @foreach($honors as $honor)
        <li class="careerfy-column-12">
            <div class="careerfy-resume-education-wrap">
                <small>{{date('Y',strtotime($honor->received_at))}}</small>
                <h2><a href="#">{{$honor->title}}</a></h2>
                <small>{{$honor->description}}</small><span>{{$honor->company}}</span>
            </div>
            <div class="careerfy-resume-education-btn">
                <a href="#" onclick="editHonor({{($honor->id+1293)}})" class="careerfy-icon careerfy-edit"></a>
                <a href="#" onclick="deleteHonor({{($honor->id+1753)}})" class="careerfy-icon careerfy-rubbish"></a>
            </div>
        </li>
    @endforeach
</ul>