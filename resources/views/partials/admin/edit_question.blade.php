<form action="{{url("/backend/tests/questions/edit/$question->question_id")}}" method="post"
      id="question-form">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$question->id+3217}}">
    <div class="form-group row">
        <div class="col-md-12">
            <div class="form-material ">
                <label for="question">Question</label>
                <textarea class="form-control" id="question"
                          name="question" rows="3">{{$question->question}}</textarea>
            </div>
        </div>
    </div>
    <div class="form-group row" id="options">
        <div class="col-md-6">
            <div class="form-material ">
                <label for="option-a">Option A</label>
                <textarea class="form-control" id="option-a"
                          name="option_a" rows="3">{{$question->option_a}}</textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-material ">
                <label for="option-b">Option B</label>
                <textarea class="form-control" id="option-b"
                          name="option_b" rows="3">{{$question->option_b}}</textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-material ">
                <label for="option-c">Option C</label>
                <textarea class="form-control" id="option-c"
                          name="option_c" rows="3">{{$question->option_c}}</textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-material ">
                <label for="option-d">Option D</label>
                <textarea class="form-control" id="option-d"
                          name="option_d" rows="3">{{$question->option_d}}</textarea>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-6">
            <label for="answer">Answer</label>
            <div class="form-group">
                <label class="css-control css-control-lg css-control-primary css-radio">
                    <input class="css-control-input" name="answer" @if($question->answer=='a') checked="" @endif type="radio"
                           value="a">
                    <span class="css-control-indicator"></span> A
                </label>
                <label class="css-control css-control-lg css-control-primary css-radio">
                    <input class="css-control-input" name="answer" @if($question->answer=='b') checked="" @endif type="radio" value="b">
                    <span class="css-control-indicator"></span> B
                </label>
                <label class="css-control css-control-lg css-control-primary css-radio">
                    <input class="css-control-input" name="answer" @if($question->answer=='c') checked="" @endif type="radio" value="c">
                    <span class="css-control-indicator"></span> C
                </label>
                <label class="css-control css-control-lg css-control-primary css-radio">
                    <input class="css-control-input" name="answer" @if($question->answer=='d') checked="" @endif type="radio" value="d">
                    <span class="css-control-indicator"></span> D
                </label>
            </div>
        </div>
        <div class="col-6">
            <div class="form-material ">
                <input class="form-control" id="score" name="score" type="number" value="{{$question->score}}">
                <label for="score">Score</label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-9">
            <button type="submit" class="btn btn-alt-primary">Submit</button>
        </div>
    </div>
</form>
