<div class="careerfy-typo-wrap">
    <!-- FilterAble -->
    <div class="careerfy-filterable">
        <h2>Showing 0-12 of 37 results</h2>
        <ul>
            <li>
                <i class="careerfy-icon careerfy-sort"></i>
                <div class="careerfy-filterable-select">
                    <select>
                        <option>Sort</option>
                        <option>Sort</option>
                        <option>Sort</option>
                    </select>
                </div>
            </li>
            <li><a href="#"><i class="careerfy-icon careerfy-squares"></i> Grid</a></li>
            <li><a href="#"><i class="careerfy-icon careerfy-list"></i> List</a></li>
        </ul>
    </div>
    <!-- Candidate Listings -->
    <div class="careerfy-candidate careerfy-candidate-default">
        <ul class="careerfy-row">
            @foreach($applicants as $applicant)
                <li class="careerfy-column-12">
                    <div class="careerfy-candidate-default-wrap">
                        <figure><a href="#"><img
                                        src="{{Storage::url($applicant->avatar_location)}}"
                                        alt=""></a></figure>
                        <div class="careerfy-candidate-default-text">
                            <div class="careerfy-candidate-default-left">
                                @php
                                    switch ($applicant->status) {
                                        case 'applied':
                                            $label = 'warning';
                                            break;
                                        case 'shortlisted':
                                            $label = 'default';
                                            break;
                                        case 'processing':
                                            $label = 'info';
                                            break;
                                        case 'invited':
                                            $label = 'primary';
                                            break;
                                        case 'passed':
                                            $label = 'success';
                                            break;
                                        default:
                                            $label = 'warning';
                                            break;
                                    }

                                @endphp
                                <h2>
                                    <a href="{{url("/backend/user/$applicant->resume_id")}}">{{"$applicant->first_name $applicant->last_name"}}</a>
                                    <i
                                            class="careerfy-icon careerfy-check-mark"></i>
                                    <span class="label label-{{$label}}">{{$applicant->status}}</span>
                                    <a href="{{url("/backend/download/cv/$applicant->resume_id")}}"
                                       class="careerfy-resumes-download"><i
                                                class="careerfy-icon careerfy-download-arrow"></i>
                                        Download CV</a>
                                </h2>

                                <ul>
                                    <li>{{$applicant->job_title}}</li>
                                    <li><i class="fa fa-map-marker"></i>
                                        {{"$applicant->state, $applicant->lga"}}
                                    </li>
                                    <li><i class="careerfy-icon careerfy-envelope"></i> <a
                                                href="#">{{$applicant->email}}</a></li>
                                    <li><i class="fa fa-phone"></i> <a
                                                href="#">{{$applicant->phone_no}}</a></li>
                                    <li><i class="fa fa-money"></i> Current
                                        Salary:
                                        &#8358;{{number_format($applicant->current_salary)}}
                                    </li>
                                    <li><i class="fa fa-money"></i>Expected
                                        Salary:
                                        &#8358;{{number_format($applicant->expected_salary)}}
                                    </li>
                                </ul>
                            </div>
                            <a href="javascript:void(0)"
                               onclick="shortlist('{{$applicant->id+5451}}','{{$applicant->resume_id}}')"
                               class="careerfy-candidate-default-btn"><i
                                        class="careerfy-icon careerfy-add-list"></i>
                                Shortlist</a>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    <!-- Pagination -->
    <div class="col-xs-6 col-sm-4 careerfy-employer-search">
        <label>Results per page: </label>
        <select id="per-page">
            <option value="10">10 results</option>
            <option value="20">20 results</option>
            <option value="30">30 results</option>
            <option value="40">40 results</option>
            <option value="50">50 results</option>
            <option value="100">100 results</option>
        </select>
    </div>
    <div class="careerfy-pagination-blog">
        <ul class="page-numbers pagination">
            <li>
                <a class="prev page-numbers @if($page<=1) disabled @endif"
                   href="javascript:void(0)"
                   onclick="@if($page>1) @php $prev=$page-1; @endphp
                           var per=document.getElementById('per-page').value;
                           window.location='{{url("/backend/applicants/$id/$prev")}}/'+per;
                   @else return false; @endif"><span><i
                                class="careerfy-icon careerfy-arrows4"></i></span></a>
            </li>
            <li>
                <strong class="text-muted fa fa-ellipsis-h"></strong>
            </li>
            @for($pg=1; $pg<=$pages;$pg++)
                @if(($pg>$page-3 && $pg<$page+3) || ($page<=4 && $pg<=4))
                    <li>
                        <a href="javascript:void(0)"
                           onclick="var per=document.getElementById('per-page').value;window.location='{{url("/backend/applicants/$id/$pg")}}/'+per;"
                           class="page-numbers @if($pg==$page) current @endif">{{str_pad($pg,2,"0",STR_PAD_LEFT)}}</a>
                    </li>
                @endif
            @endfor
            <li>
                <strong class="text-muted fa fa-ellipsis-h"></strong>
            </li>
            <li>
                <a class="next page-numbers @if($page==$pages) disabled @endif"
                   href="javascript:void(0)"
                   onclick="@if($page!=$pages) @php $next=$page+1; @endphp
                           var per=document.getElementById('per-page').value;
                           window.location='{{url("/backend/applicants/$id/$next")}}/'+per;
                   @else return false; @endif"><span><i
                                class="careerfy-icon careerfy-arrows4"></i></span>
                </a>
            </li>
        </ul>

    </div>
</div>
