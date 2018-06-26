<div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-bordered table-striped table-vcenter dataTable">
                <thead>
                <tr role="row">
                    <th class="text-center">S/N</th>
                    <th class="">Question</th>
                    <th class="">Options</th>
                    <th class="text-center">Answer</th>
                    <th class="text-center">Score</th>
                    <th class="text-center">Action</th>

                </tr>
                </thead>
                <tbody>
                @php
                    $i=1;
                @endphp
                @foreach($questions as $question)
                    <tr role="row" class="odd">
                        <td class="text-center">{{$i}}</td>
                        <td>{!! $question->question !!}</td>
                        <td>
                            <ul class="list-group">
                                <li class="list-group-item">a) {!!$question->option_a!!}</li>
                                <li class="list-group-item">b) {!!$question->option_b!!}</li>
                                <li class="list-group-item">c) {!!$question->option_c!!}</li>
                                <li class="list-group-item">d) {!!$question->option_d!!}</li>
                            </ul>
                        </td>
                        <td>{{$question->answer}}</td>
                        <td>{{$question->score}}</td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-alt-success"
                               href="javascript:void(0)"
                               onclick="editQuestion({{$question->id+3217}},'{{$question->question_id}}')"
                               data-toggle="tooltip" title="{{$question->title}}"
                               data-original-title="{{$question->title}}">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a class="btn btn-sm btn-alt-danger"
                               href="javascript:void(0)"
                               onclick="deleteQuestion({{$question->id+3217}},'{{$question->question_id}}')"
                               data-toggle="tooltip" title="{{$question->title}}"
                               data-original-title="{{$question->title}}">
                                <i class="fa fa-times"></i>
                            </a>
                        </td>
                    </tr>
                    @php($i++)
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>