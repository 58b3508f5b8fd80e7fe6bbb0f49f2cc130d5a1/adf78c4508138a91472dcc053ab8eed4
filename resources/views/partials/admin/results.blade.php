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
            @foreach($results as $result)
                <li class="careerfy-column-4">
                    <figure>


                        <div class="col-xs-12 col-sm-12">
                            <a href="{{url("/backend/user/$result->resume_id")}}"
                               class="careerfy-candidate-grid-thumb"><img
                                        src="{{Storage::url($result->avatar_location)}}"
                                        alt=""> <span
                                        class="careerfy-candidate-grid-status"></span></a>
                        </div>
                        <figcaption>
                            <h2>
                                <a href="{{url("/backend/user/$result->user_id")}}">{{"$result->first_name, $result->last_name"}}</a>
                            </h2>
                            <p>{{$result->job_title}}</p>
                            <span>{{"$result->state, $result->lga"}}</span>
                            @if($result->application_status=='processing')
                                <h2>
                                    <a href="javascript:void(0)"
                                       onclick="showInviteModal('{{$result->application_id}}');"
                                       class="careerfy-candidate-default-btn text-center"
                                       style="float: left; width:100%;"><i
                                                class="careerfy-icon careerfy-download-arrow"></i>
                                        Send Invite</a>
                                </h2>
                            @elseif($result->application_status=='invited')
                                <div>
                                    <h3 class="badge">Invited</h3>
                                </div>
                            @endif

                        </figcaption>
                    </figure>
                    <ul class="careerfy-candidate-grid-option" style="margin:0;">
                        <li>
                            <div class="careerfy-right">
                                <span>Experience:</span>
                                {{$result->experience}}
                            </div>
                        </li>
                        <li>
                            <div class="careerfy-right">
                                <strong style="font-size:2em;"
                                        class="label @if($result->score>70) label-success @elseif($result->score>50) label-warning @else($result->score<50) label-danger @endif">{{$result->score}}
                                    %</strong>
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