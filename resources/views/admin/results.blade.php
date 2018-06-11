@php    $public='';    if(config('app.env') == 'production')    $public ='public'; @endphp
@extends('layouts.admin')
@section('title',$title)
@section('content')
    <div class="container-fluid">
        <div class="careerfy-subheader careerfy-subheader-without-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="careerfy-page-title">
                            <h1>Companies</h1>
                            <p>Thousands of prestigious employers for you, search for a recruiter right now.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="careerfy-breadcrumb">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li>Candidates</li>
                </ul>
            </div>
        </div>
        <div class="careerfy-main-content">

            <!-- Main Section -->
            <div class="careerfy-main-section careerfy-dashboard-fulltwo">
                <div class="container">
                    <div class="row">
                        @include('includes.admin.sidebar',['applicants_sidebar'=>true])

                        <div class="careerfy-column-9">
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
                                                    <a href="#" class="careerfy-candidate-grid-thumb"><img
                                                                src="{{Storage::url($result->avatar_location)}}" alt=""> <span
                                                                class="careerfy-candidate-grid-status"></span></a>
                                                    <figcaption>
                                                        <h2><a href="#">{{"$result->first_name, $result->last_name"}}</a></h2>
                                                        <p>{{$result->job_title}}</p>
                                                        <span>{{"$result->state, $result->lga"}}</span>
                                                    </figcaption>
                                                </figure>
                                                <ul class="careerfy-candidate-grid-option" style="margin:0;">
                                                    <li>
                                                        <div class="careerfy-right">
                                                            <span>Experience:</span>
                                                            {{$result->experience}}
                                                        </div>
                                                    </li><li>
                                                        <div class="careerfy-right">
                                                            <span>Score:</span>
                                                            <span class="label">{{$result->score}}</span>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection