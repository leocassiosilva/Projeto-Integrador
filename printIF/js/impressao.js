/**
 * Função que tem como proposito a validação do formulario de cadastro do professor. 
 */
$(document).ready(function(){
    $('#formImpressao').validate({
        rules:{
            atividade:{
                required: true,
                minlength: 5
            },
            turma:{
                required: true,
                minlength: 5
            }, 
            turno:{
                required: true
            }, 
            dataNecessita:{
                required:true
            }, 
            ladoFolha:{
                required:true
            },
            quantidade:{
                required:true
            }, 
            InputFile:{
                required: true
            }
        }, 
       
        messages:{
            atividade:{
                required: "Este campo é obrigatorio",
                minlength: 5
            }, 
            turma:{
                required: "Este campo é obrigatorio",
                minlength: 5
            }, 
            turno:{
                required: "Este campo é obrigatorio"
            }, 
            dataNecessita:{
                required: "Este campo é obrigatorio"
            },  
            ladoFolha:{
                required: "Este campo é obrigatorio"
            }, 
            quantidade:{
                required: "Este campo é obrigatorio"
            }, 
            InputFile:{
                required: "Este campo é obrigatorio"
            }
        }
    });
});