$(document).ready(function(){
    $('#recuperarSenha').validate({
        rules:{
            usuario:{
                required:true,
                email:true
            }
        }, 
        messages:{
            usuario:{
                required: "Este campo é obrigatorio"
            }
        }
    });
});