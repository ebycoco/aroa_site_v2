$(function(){
    $("form[name='postulerform']").validate({
        // Specify validation rules
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            nom: "required",
            prenoms: "required",
            cv: {
                required : true,
                accept: "doc|docx|pdf"
            },
            telephone: "required",
            email: {
                required: true,
                // Specify that email should be validated
                // by the built-in "email" rule
                email: true
            },
        },
        // Specify validation error messages
        messages: {
            nom: "<span style='color: #f00'>veuillez insérer votre nom</span>",
            prenoms: "<span style='color: #f00'>veuillez insérer votre prénom</span>",
            email: "<span style='color: #f00'>veuillez insérer une adresse mail valide</span>",
            // cv: "<span style='color: #f00'>veuillez choisir votre CV</span>",
            telephone: "<span style='color: #f00'>veuillez entrer votre numero de téléphone</span>",
            cv:{
                required:"<span style='color: #f00'>veuillez choisir votre CV</span>",                  
                accept:"<span style='color: #f00'>Sélectionnez un CV au format PDF ou WORD </span>"
            }
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            form.submit();
        }
    });
})