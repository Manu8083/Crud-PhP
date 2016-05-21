$.validator.setDefaults({
    submitHandler: function() {
        alert("submitted!");
    }
});
$().ready(function(){

    $("#FormData").validate({
        rules:{
            nombres: "required",
            apellidos: {
                required: true,
                minlength: 2
            },
            edad:{
                required: true,
                minlength: 2
            },
            email:{
                required: true,
                minlength: 4,
                email: true
            }
        },
        messages:{
            nombres: "Nombre por favor",
            apellidos:{
                required: "apellido requerido",
                minlength: "minimo 2 caracteres"
            },
            edad:{
                required: "edad requerido",
                minlength: "minimo 2 caracteres"
            }
        }
    });
})
