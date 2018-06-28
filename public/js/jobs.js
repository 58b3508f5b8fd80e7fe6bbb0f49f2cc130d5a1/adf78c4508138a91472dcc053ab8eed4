function applyJob(elem) {
    var data = {
        'title': $(elem).attr("data-title"),
        'id': $(elem).attr("data-id"),
    };
    jobApply(data);
}

function jobApply(data) {
    swal({
        title: "Are you sure?",
        text: "Are you sure that you want to apply for " + data.title + "?",
        type: "success",
        showCancelButton: true,
        closeOnConfirm: true,
        confirmButtonText: "Yes, go ahead!",
    }).then((isConfirm) => {
        if (isConfirm) {
            $.post('/jobs/apply', data, function (result) {
                $.notify({
                        // options
                        icon: 'fa fa-check',
                        message: result.message,
                    },
                    {
                        'type': result.state
                    });
                $('#jobs').fadeOut(300).html(result.html).fadeIn(800);
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
        }else {
            swal("The job application was not sent!");
        }
    });
}

function cancelJob(elem) {
    var data = {
        'title': $(elem).attr("data-title"),
        'id': $(elem).attr("data-id"),
    };
    jobCancel(data);
}

function jobCancel(data) {
    swal({
        title: "Are you sure?",
        text: "Are you sure that you want to delete " + data.title + "?",
        type: "warning",
        showCancelButton: true,
        closeOnConfirm: true,
        confirmButtonText: "Yes, delete it!",
        confirmButtonColor: "#ec6c62"
    }).then((isConfirm) => {
        if (isConfirm) {
            $.post('/jobs/cancel', data, function (result) {
                $.notify({
                        // options
                        icon: 'fa fa-check',
                        message: result.message,
                    },
                    {
                        'type': result.state
                    });
                $('#jobs').fadeOut(300).html(result.html).fadeIn(1200);
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
        } else {
            swal("The job was not deleted!");
        }
    });
}