function applyJob(elem) {
    var data = {
        'id': $(elem).attr("data-id"),
    };
    jobApply(data);
}

function jobApply(data) {
    swal({
        title: "Are you sure?",
        text: "Are you sure that you want to delete " + data.title + "?",
        type: "warning",
        showCancelButton: true,
        closeOnConfirm: true,
        confirmButtonText: "Yes, delete it!",
        confirmButtonColor: "#ec6c62"
    }, function (isConfirm) {
        $.post('/jobs/apply', data, function (result) {
            $.notify({
                    // options
                    icon: 'fa fa-check',
                    message: result.message,
                },
                {
                    'type': result.state
                });
            $('#jobs').fadeOut(800).html(result.html).fadeIn(1200);
        }).fail(function () {
            $.notify({
                    // options
                    icon: 'fa fa-times',
                    message: "Sorry, an error occurred",
                },
                {
                    'type': 'danger'
                });
        });
    });
}

function deleteJob(elem) {
    var data = {
        'title': $(elem).attr("data-title"),
        'id': $(elem).attr("data-id"),
        'type': $(elem).attr("data-type"),
    };
    resumeDelete(data);
}

function jobDelete(data) {
    swal({
        title: "Are you sure?",
        text: "Are you sure that you want to delete " + data.title + "?",
        type: "warning",
        showCancelButton: true,
        closeOnConfirm: true,
        confirmButtonText: "Yes, delete it!",
        confirmButtonColor: "#ec6c62"
    }, function (isConfirm) {
        $.post('/resume/delete', data, function (result) {
            $.notify({
                    // options
                    icon: 'fa fa-check',
                    message: result.message,
                },
                {
                    'type': result.state
                });
            $('#resume-' + result.type).fadeOut(800).html(result.html).fadeIn(1200);
        }).fail(function () {
            $.notify({
                    // options
                    icon: 'fa fa-times',
                    message: "Sorry, an error occurred",
                },
                {
                    'type': 'danger'
                });
        });
    });
}