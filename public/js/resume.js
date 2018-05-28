function updateCoverLetter() {
    var coverLetter = $("#textEditor").Editor("getText");

    var data = {
        'text': coverLetter
    };
    $.post('/resume/coverletter', data, function (result) {
        swal("Status", result.message, result.state);
        coverLetter = $("#textEditor").Editor(result.text);
    }).fail(function () {
        swal("Oops!", "Sorry an error occurred..", 'danger');
    });
}

$(".modal").on('shown.bs.modal', function () {
    $('.resume-form').on('submit', function (e) {
        e.preventDefault();

        // gathering the form data
        let form = e.target;
        let data = new FormData(form);

        let type = $('#resume-modal .modal-title').text().toLowerCase()
        $.ajax(
            {
                url: form.action,
                method: form.method,
                contentType: false,
                data: data,
                processData: false,
                success: function (result) {
                    $.notify({
                            // options
                            icon: 'fa fa-check',
                            message: result.message,
                        },
                        {
                            'type': result.state
                        });
                    $('.modal').modal('hide');
                    $('#resume-' + type).fadeOut(500).html(result.html).fadeIn(800);
                },
                error: function () {
                    $('.modal').modal('hide');
                    $.notify({
                            // options
                            icon: 'fa fa-times',
                            message: "Sorry, an error occurred",
                        },
                        {
                            'type': 'danger'
                        })
                }
            });
    });
});

function deleteResume(elem) {
    var data = {
        'title': $(elem).attr("data-title"),
        'id': $(elem).attr("data-id"),
        'type': $(elem).attr("data-type"),
    };
    resumeDelete(data);
}

function resumeDelete(data) {

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

function getModal(type, action, id = null) {
    var data = {'id': id};
    $.getJSON('/resume/modal/' + action + '/' + type + '/' + id, function (result) {
        $('#resume-modal .modal-body').html(result.html);
        $('#resume-modal .modal-title').text(type.toUpperCase());
        $('#resume-modal').modal('show');
    });
}