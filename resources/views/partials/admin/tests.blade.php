<div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-bordered table-striped table-vcenter dataTable">
                <thead>
                <tr role="row">
                    <th class="text-center">S/N</th>
                    <th class="">Title</th>
                    <th class="">Description</th>
                    <th class="text-center">Duration</th>
                    <th class="text-center">Length</th>
                    <th class="text-center">Action</th>

                </tr>
                </thead>
                <tbody>
                @php
                    $i=1;
                @endphp
                @foreach($tests as $test)
                    <tr role="row" class="odd">
                        <td class="text-center">{{$i}}</td>
                        <td>{{$test->title}}</td>
                        @php
                            $description =strip_tags($test->description);
                            $description =explode(' ',$description);
                            $description = array_splice($description ,0,20);
                            $description=implode(' ',$description).'...';
                        @endphp
                        <td>{{$description}}</td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-danger">{{$test->duration}} mins</span></td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-primary">{{$test->length}}</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a class="btn btn-sm btn-outline-success"
                                   href="{{url("/backend/tests/view/$test->test_id")}}"
                                   data-toggle="tooltip" title="View {{$test->title}}"
                                   data-original-title="View {{$test->title}}">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a class="btn btn-sm btn-outline-primary"
                                   href="javascript:void(0)" onclick="editTest('{{$test->id+973}}','{{$test->test_id}}')"
                                   data-toggle="tooltip" title="Edit {{$test->title}}"
                                   data-original-title="Edit {{$test->title}}">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a class="btn btn-sm btn-outline-danger"
                                   href="javascript:void(0)"
                                   onclick='deleteTest("{{$test->id+1921}}","{{str_replace('"',"'",$test->title)}}","{{$test->test_id}}")'
                                   data-toggle="tooltip" title="Delete {{$test->title}}"
                                   data-original-title="Delete {{$test->title}}">
                                    <i class="fa fa-times"></i>
                                </a>

                            </div>
                        </td>
                    </tr>
                    @php($i++)
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>