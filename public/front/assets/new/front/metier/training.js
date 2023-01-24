$(function() {
    var carou = $('.carousel-inner div:nth-child(1)')
    carou.addClass('active')

    var cerclenom = $('.cerclenom')
    var formation_list = $('.formation_list')
    var formulaire = $('#formulaire')
    var animation_down = $('#animation_down')
    // $('#download_result').hide()
    animation_down.hide()
    // formulaire.hide()
    var down = $('#down')
    cerclenom.addClass('animecercle')
    
    down.click(function() {
        var nom = $('#nom').val()
        var email = $('#email').val()
        animation_down.show()
        $.ajax({
            type: "post",
            url: '/download/formation',
            data: {
                "_token": $('meta[name="csrf-token"]').attr('content'),
                nom: nom,
                email: email,
            },
            success: function(resp) {
                // alert('fdddddddddddddd')
                animation_down.hide()
                $('#download_result').show()
                $('#download_result').html(resp['success']).css({
                    'color': '#58FF33'
                });

                
                // $('#download_result').show()
                var link = document.createElement('a');
                link.href = "/assets/new/ressources/formations/formation.pdf";
                link.download = "Formation_" + new Date() + ".pdf";
                link.click();
                link.remove();
                $('#trainingDownload').modal('hide');
                // formulaire.hide()
                $('#formulairedown')[0].reset()
                $('#download_result').fadeOut(10000)
            },
            error: function(resp) {
                animation_down.hide()
                var datas = resp.responseJSON.errors
                $.each(datas, function(key, value) {
                    $('.showErrors').show()
                    $('#showErrors' + key).html(value)
                    $('.showErrors').fadeOut(10000)
                })
                $('#formulairedown')[0].reset()
            },
        });
    })


})