
$(function () {
    // alert('rerere')
    $('#form-submit').on('click', function () {
        var nom = $('#nom').val()
        var email = $('#email').val()
        var sujet = $('#sujet').val()
        var message = $('#message').val()
        $.ajax({
            type: "post",
            url: 'contact',
            data: {
                "_token": "{{ csrf_token() }}",
                nom: nom,
                email: email,
                sujet: sujet,
                message: message
            },
            success: function (resp) {
                $('#successMessage').show()
                $('#showSuccess').html(resp.success)
                $('#contact')[0].reset()
            },
            error: function (resp) {
                var datas = resp.responseJSON.errors
                $.each(datas, function (key, value) {
                    $('.showErrors').show()
                    $('#showErrors' + key).html(value)
                })
            },
        });
    });
})