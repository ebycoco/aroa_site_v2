$(function () {

    $("#current_pwd").on("keyup", function () {
        var current_pwd = $("#current_pwd").val();
        $.ajax({
            type: "post",
            url: '/admin/check-current-password',
            data: { current_pwd: current_pwd },
            success: function (resp) {
                // alert(resp);
                if (resp == "false") {
                    // console.log("false");
                    $("#chkCurrentPwd").html("<font color=red> Mot de passe actuel est incorrect</font>");
                } else if (resp == "true") {
                    // console.log("true");
                    $("#chkCurrentPwd").html("<font color=green> Mot de passe actuel est correct</font>");
                }
            },
            error:function(){
                alert('Error');
            }
        });

    });


    $('.confirmDelete').click(function(){
        var record = $(this).attr("record");
        var recordid = $(this).attr("recordid");
        var categoryname = $(this).attr("categoryname");
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success ml-2',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: 'Êtes-vous sûre de vouloir supprimé '+categoryname+'?',
            text: "Vous ne pourrez pas annuler cela!",
            icon: 'Attention!',
            showCancelButton: true,
            confirmButtonText: 'Oui, Supprimé!',
            cancelButtonText: 'Non, Annulé!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                swalWithBootstrapButtons.fire(
                    'Supprimé!',
                    categoryname+' a été supprimé.',
                    'succès'
                )
                window.location.href="/admin/delete-"+record+"/"+recordid;
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Annulé',
                    categoryname+' est en sécurité :)',
                    'Erreur'
                )
            }
        });
        return false;
    });

    $(".updateOffreStatus").on('click', function(){
        var status = $(this).prop("checked");
        // alert(status);
        var offre_id = $(this).attr("offre_id");
        var check = $(this).attr('id');
        $.ajax({
            type:'post',
            url: 'update-offre-status',
            data:{status:status, offre_id:offre_id, check:check},
            success:function(resp){
                // alert(resp)
                if(resp['status']== false){
                    $("#offre-"+offre_id).attr('checked', function (){
                        return $(this).attr('checked').split("").pop();
                    });


                }else if(resp['status']== true){
                    $("#offre-"+offre_id).attr('checked', function (){
                        return $(this).attr('checked').split("checked").pop();
                    });
                }
            },
    //         error:function(){
    //             alert('Error');
    //         }
        });
    });
    $(".updatearticleStatus").on('click', function(){
        var status = $(this).prop("checked");
        // alert(status);
        var article_id = $(this).attr("article_id");
        var check = $(this).attr('id');
        $.ajax({
            type:'post',
            url: 'update-article-status',
            data:{status:status, article_id:article_id, check:check},
            success:function(resp){
                // alert(resp)
                if(resp['status'] == false){
                    $("#article-"+article_id).attr('checked', function (){
                        return $(this).attr('checked').split("").pop();
                    });


                }else if(resp['status'] == true){
                    $("#article-"+article_id).attr('checked', function (){
                        return $(this).attr('checked').split("checked").pop();
                    });
                }
            },
            //         error:function(){
            //             alert('Error');
            //         }
        });
    });

    $(".updateSerieStatus").on('click', function(){
        var status = $(this).prop("checked");
        // alert(status);
        var serie_id = $(this).attr("serie_id");
        var check = $(this).attr('id');
        $.ajax({
            type:'post',
            url: 'update-serie-status',
            data:{status:status, serie_id:serie_id, check:check},
            success:function(resp){
                // alert(resp)
                if(resp['status'] == false){
                    $("#serie-"+serie_id).attr('checked', function (){
                        return $(this).attr('checked').split("").pop();
                    });


                }else if(resp['status'] == true){
                    $("#serie-"+serie_id).attr('checked', function (){
                        return $(this).attr('checked').split("checked").pop();
                    });
                }
            },
            //         error:function(){
            //             alert('Error');
            //         }
        });
    });
    $(".updateCategoryStatus").on('click', function(){
        var status = $(this).prop("checked");
        // alert(status);
        var category_id = $(this).attr("category_id");
        var check = $(this).attr('id');
        $.ajax({
            type:'post',
            url: 'update-category-status',
            data:{status:status, category_id:category_id, check:check},
            success:function(resp){
                // alert(resp)
                if(resp['status']== false){
                    $("#category-"+category_id).attr('checked', function (){
                        return $(this).attr('checked').split("").pop();
                    });


                }else if(resp['status']== true){
                    $("#category-"+category_id).attr('checked', function (){
                        return $(this).attr('checked').split("checked").pop();
                    });
                }
            },
            //         error:function(){
            //             alert('Error');
            //         }
        });
    });
});
