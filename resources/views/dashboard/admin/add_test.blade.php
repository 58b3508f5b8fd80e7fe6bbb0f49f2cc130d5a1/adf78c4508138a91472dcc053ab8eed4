@php    $public='';    if(config('app.env') == 'production')    $public ='public'; @endphp
@extends('layouts.dashboard')
@section('title',$title)
@section('content')
    <form method="post" action="{{url('/backend/test/add')}}">
        <div class="col-md-6 col-lg-6 col-sm-6 col-lg-offset-3">
            <div class="form-group">
                <label class="col-form-label" for="formGroupExampleInput2">Course Name</label>
                <input type="text" name="Course" class="form-control" id="formGroupExampleInput2"
                       placeholder="example:SWE111" required>
            </div>
            <div class="form-group">
                <label class="col-form-label" for="formGroupExampleInput2">Number Of Question</label>
                <input type="text" name="question_lenth" class="form-control" id="formGroupExampleInput2"
                       placeholder="E.g 10" required>
            </div>
            <div class="form-group">
                <label class="col-form-label" for="formGroupExampleInput2">Set time</label>
                <input type="text" name="time" class="form-control" id="formGroupExampleInput2"
                       placeholder="Enter In Minite" required>
            </div>
            <button type="Submit" class="btn btn-success btn-block">Submit</button>
        </div>
    </form>
@endsection