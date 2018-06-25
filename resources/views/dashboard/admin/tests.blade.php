@php    $public='';    if(config('app.env') == 'production')    $public ='public'; @endphp
@extends('layouts.admin.dashboard')
@section('title',$title)
@section('styles')

@endsection
@section('content')
    <main id="main-container" style="min-height: 192px;">
        <div class="content">
            <h2 class="content-heading">View Tests</h2>
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Showing Tests
                        <small>Full</small>
                    </h3>
                    <div class="block-options">
                        <a href="{{url("/backend/tests/add/")}}"
                           class="btn btn-alt-primary"><i
                                    class="fa fa-plus"> Add Tests</i></a>
                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="fullscreen_toggle"><i class="si si-size-fullscreen"></i></button>
                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="content_toggle"><i class="si si-arrow-up"></i></button>

                    </div>
                </div>
                <div class="block-content block-content-full" id="tests">
                    @include('partials.admin.tests')
                </div>
            </div>
        </div>
    </main>
@endsection
@section('scripts')
    <script src="{{asset($public.'/dashboard/js/jquery.simple.timer.js')}}"></script>
    <script>
        $('#user-form').on('submit', function (e) {
            e.preventDefault();
            var form = $('#test-form');

            var data = new FormData(form);

            $.ajax({
                url: form.action,
                method: form.method,
                contentType: false,
                data: data,
                processData: false,
                success: function (result) {
                    alert(result.message);
                },
                error: function () {
                    alert('Sorry, an error occurred');
                }
            });
            return false;
        })
        $('.timer').startTimer();

        function deleteTest(id, title) {
            swal({
                title: "Are you sure to delete " + title + "?",
                text: "Once deleted, you will not be able to recover this test!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        var data = {'id': id};
                        $.post('/backend/tests/delete',data,function(result){
                            $('#tests').fadeOut(500);
                            $('#tests').html(result.html);
                            swal(result.status, {
                                icon: result.state,
                            });
                            $('#tests').fadeIn(800);
                            $('.dataTable').DataTable();
                        });

                    } else {
                        swal("The test was not deleted!");
                    }
                });
        }
    </script>
@endsection