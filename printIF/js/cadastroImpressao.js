/**
 * Função que tem como proposito a validação do formulario de cadastro do professor na parte do cliente
 */

/*Fução para verificar se o usuario colocou o email correto!*/



$(document).ready(function () {
    $('#cadastroImpressao').validate({
        rules: {
            nome: {
                required: true,
                minlength: 3
            },
            quantidade: {
                required: true,
                minlength: 1
            },
            atividadeRadio: {
                required: true
            },
            turma: {
                required: true,
                minlength: 3
            },
            turno:{
                required: true
            },
            data: {
                required: true,
                minlength: 10
            }, 
            lado:{
                required: true
            }, 
            ArquivoFile:{
                required: true
            }

        },
        messages: {
            nome: {
                required: "Este campo é obrigatorio",
                minlength: "O campo deve conter no minimo 3 caracterer "
            },
            quantidade: {
                required: "Este campo é obrigatorio",
                minlength: "O deve ter pelo menos uma 1 impressao!"
            },
            atividadeRadio: {
                required: "Este campo é obrigatorio"
            },
            turma: {
                required: "Este campo é obrigatorio",
                minlength: "O campo deve conter no minimo 3 caracterer"
            },
            turno:{
                required: "Este campo é obrigatorio",
            },
            data: {
                required: "Este campo é obrigatorio", 
                minlength: "O campo deve ter esse formato DD/MM/AA"
            },
            lado: {
                required: "Este campo é obrigatorio"
            },
            ArquivoFile:{
                required: "Este campo é obrigatorio"
            }
        },

    });
});

