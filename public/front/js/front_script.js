$(document).ready(function() {
    $().ready(function() {
        // validate the comment form when it is submitted
        $("#commentForm").validate();

        // validate signup form on keyup and submit
        $("#projectForm").validate({
            rules: {
                nom_projet: "required",
                date_debut: "required",
                date_fin: "required",
                fichier: {
                    required: true,
                    accept: "image/jpeg, image/pjpeg"
                },
            },
            messages: {
                nom_projet: "Veuillez entrer le nom du projet",
                date_debut: "Veuillez selectionnez une date de debut",
                date_fin: "Veuillez selectionnez une date de fin",
                fichier: {
                    required: "Veuillez entrer un fichier",
                    accept: "Veuillez entrer votre adresse e-mail valide",
                },
                password: {
                    required: "Veuillez choisir votre mot de passe",
                    minlength: "Votre mot de passe doit comporter au moins 6 caractères"
                },
            }
        });

        // validate signup form on keyup and submit
        $("#loginForm").validate({
            rules: {
                email: {
                    required: true,
                    email: true,
                },
                password: {
                    required: true,
                    minlength: 6
                },
            },
            messages: {
                email: {
                    required: "Veuillez entrer votre adresse e-mail",
                    minlength: "Veuillez entrer votre adresse e-mail valide",
                },
                password: {
                    required: "Veuillez choisir votre mot de passe",
                    minlength: "Votre mot de passe doit comporter au moins 6 caractères"
                },
            }
        });
    });
});
