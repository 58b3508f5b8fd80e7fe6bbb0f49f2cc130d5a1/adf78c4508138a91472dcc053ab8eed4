function updateCoverLetter() {
    $coverLetter = $("#textEditor").Editor("getText");

    var data = {
        'text': $coverLetter
    };
    $.post('/resume/coverletter', data, function (result) {
            swal("Status", result.message, result.state);
        $coverLetter = $("#textEditor").Editor(result.text);
    }).fail(function () {
        swal("Oops!", "Sorry an error occurred..", 'danger');
    });
}