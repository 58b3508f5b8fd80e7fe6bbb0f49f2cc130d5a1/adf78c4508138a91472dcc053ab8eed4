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
    <div class="careerfy-candidate careerfy-candidate-grid">
        <ul class="careerfy-row">
            @foreach($interviews as $interview)
                <li class="careerfy-column-4">
                    <figure>
                        <div class="col-xs-12 col-sm-12">
                            <a href="{{url("/backend/user/$interview->user_id")}}"
                               class="careerfy-candidate-grid-thumb"><img
                                        src="{{Storage::url($interview->avatar_location)}}"
                                        alt=""> <span
                                        class="careerfy-candidate-grid-status"></span></a>
                        </div>
                        <figcaption>
                            <h2>
                                <a href="{{url("/backend/user/$interview->user_id")}}">{{"$interview->first_name, $interview->last_name"}}</a>
                            </h2>
                            <p>{{$interview->job_title}}</p>
                            <span>{{"$interview->state, $interview->lga"}}</span>
                            @if($interview->application_status=='invited')
                                <h2>
                                    <a href="javascript:void(0)"
                                       onclick="showAssessModal('{{$interview->interview_id}}');"
                                       class="careerfy-candidate-default-btn text-center"
                                       style="float: left; width:100%;"><i
                                                class="careerfy-icon careerfy-download-arrow"></i>
                                        Assess</a>
                                </h2>
                            @elseif(in_array($interview->application_status,['passed','failed']))
                                <div>
                                    <h3 class="badge">Interviewed</h3>
                                </div>
                            @endif

                        </figcaption>
                    </figure>
                    <ul class="careerfy-candidate-grid-option" style="margin:0;">
                        <li>
                            <div class="careerfy-right">
                                <span>Experience:</span>
                                {{$interview->experience}}
                            </div>
                        </li>
                        <li>
                            <div class="careerfy-right">
                                <strong style="font-size:1.5em;"
                                        class="label @if($interview->application_status=='passed') label-success @elseif($interview->application_status=='invited') label-warning @elseif($interview->application_status=='failed') label-danger @endif">{{title_case($interview->application_status)}}</strong>
                            </div>
                        </li>
                    </ul>
                </li>
            @endforeach
        </ul>
    </div>
    <!-- Pagination -->
    <div class="careerfy-pagination-blog">
        <ul class="page-numbers">
            <li><a class="prev page-numbers" href="#"><span><i
                                class="careerfy-icon careerfy-arrows4"></i></span></a></li>
            <li><span class="page-numbers current">01</span></li>
            <li><a class="page-numbers" href="#">02</a></li>
            <li><a class="page-numbers" href="#">03</a></li>
            <li><a class="page-numbers" href="#">04</a></li>
            <li><a class="next page-numbers" href="#"><span><i
                                class="careerfy-icon careerfy-arrows4"></i></span></a></li>
        </ul>
    </div>
</div>