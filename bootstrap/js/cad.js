/**
 * Função que tem como proposito a validação do formulario de cadastro do professor. 
 */
$(document).ready(function(){
    $('#cadastroForm').validate({
        rules:{
            nome:{
                required: true,
                minlength: 5
            },
            matricula:{
                required: true,
                minlength: 7
            }, 
            email:{
                required:true,
                email:true
            }
        }, 
        messages:{
            nome:{
                required: "Este campo é obrigatorio",
                minlength: 5
            },
            matricula:{
                required: "Este campo é obrigatorio",
                minlength: 7
            },
            email:{
                required: "Este campo é obrigatorio",
                email: true
            }
        }
    });
});