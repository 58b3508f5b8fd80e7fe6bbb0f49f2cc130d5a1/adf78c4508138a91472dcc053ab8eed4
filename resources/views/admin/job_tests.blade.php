@php    $public='';    if(config('app.env') == 'production')    $public ='public'; @endphp
@extends('layouts.admin.app')
@section('title',$title)
@section('content')
    <div class="container-fluid">
        <div class="careerfy-subheader careerfy-subheader-without-bg">

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
                                <div class="careerfy-employer-box-section">
                                    <div class="careerfy-profile-title">
                                        <h2>Saved Jobs</h2>
                                        <form class="careerfy-employer-search">
                                            <input value="Search orders"
                                                   onblur="if(this.value == '') { this.value ='Search orders'; }"
                                                   onfocus="if(this.value =='Search orders') { this.value = ''; }"
                                                   type="text">
                                            <input value="" type="submit">
                                            <i class="careerfy-icon careerfy-search"></i>
                                        </form>
                                    </div>
                                    <div class="careerfy-candidate-savedjobs">
                                        <div class="careerfy-candidate-savedjobs-wrap">
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th>Job Title</th>
                                                    <th>Applicants</th>
                                                    <th>Maximum</th>
                                                    <th>Minimum</th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($results as $result)
                                                    <tr>
                                                        <td>
                                                            <h2><a href="{{url("/backend/tests/result/$result->test_id")}}">{{$result->title}}</a></h2>
                                                        </td>
                                                        <td><span>{{$result->count}}</span></td>
                                                        <td>{{$result->maximum}}</td>
                                                        <td>{{$result->minimum}}</td>
                                                        <td>
                                                            <a href="{{url("/backend/tests/result/$result->test_id")}}" class="careerfy-savedjobs-links"><i
                                                                        class="careerfy-icon careerfy-view"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- Pagination -->
                                    <div class="careerfy-pagination-blog">
                                        <ul class="page-numbers">
                                            <li><a class="prev page-numbers" href="#"><span><i
                                                                class="careerfy-icon careerfy-arrows4"></i></span></a>
                                            </li>
                                            <li><span class="page-numbers current">01</span></li>
                                            <li><a class="page-numbers" href="#">02</a></li>
                                            <li><a class="page-numbers" href="#">03</a></li>
                                            <li><a class="page-numbers" href="#">04</a></li>
                                            <li><a class="next page-numbers" href="#"><span><i
                                                                class="careerfy-icon careerfy-arrows4"></i></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection