/**
 * Função que tem como proposito a validação do formulario de cadastro do professor na parte do cliente
 */

/*Fução para verificar se o usuario colocou o email correto!*/
$(function () {
    $('#btnCadastro').on("click", function () {
        var usuario = $('#inputemail').val();
        resultado = usuario.split("@");

        var result = resultado [1].split(".");  

        if(result[0] == "ifrn" && result[1] == "edu" && result[2] == "br"){
           alert("Email válido!");
        }else {
            $("#menssagem").html("Email invalido para o cadastro!"); 
        } 
    });
});

 
$(document).ready(function () {
    $('#cadastroForm').validate({
        rules: {
            nome: {
                required: true,
                minlength: 3
            },
            inputemail: {
                required: true,
                inputemail: true
            },
            matricula: {
                required: true,
                minlength: 7
            },
            turno:{
                required: true
            },
        },
        messages: {
            nome: {
                required: "Este campo é obrigatorio",
                minlength: "O campo deve conter no minimo 3 caracterer "
            },
            matricula: {
                required: "Este campo é obrigatorio",
                minlength: "O campo deve conter no minimo 7 caracterer"
            },
            inputemail: {
                required: "O campo email é obrigatório.",
                inputemail: "O campo email deve conter um email válido."
            }, 
            turno:{
                required: "Este campo é obrigatorio",
            },
        }
    });
});

