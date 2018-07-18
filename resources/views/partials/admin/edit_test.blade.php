<form action="{{url("/backend/tests/edit/".($test->test_id))}}" method="post"
      id="test-form">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$test->id+335}}">
    <div class="form-group row">
        <div class="col-12">
            <div class="form-material ">
                <input class="form-control" id="title" name="title" type="text"
                       placeholder="Enter your test title here" value="{{$test->title}}">
                <label for="title">Title</label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-12">
            <div class="form-material ">
                <label for="description">Description</label>
                <textarea class="form-control" id="description"
                          name="description" rows="3">{{$test->description}}</textarea>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-6">
            <div class="form-material ">
                <input class="form-control" id="duration" name="duration" type="number" value="{{$test->duration}}">
                <label for="duration">Duration</label>
            </div>
        </div>
        <div class="col-6">
            <div class="form-material ">
                <input class="form-control" id="length" name="length" type="number" value="{{$test->length}}">
                <label for="length">Length</label>
            </div>
        </div>
    </div>
</form>