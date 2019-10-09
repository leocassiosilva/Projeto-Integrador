$(document).ready(function(){
    $('#login-form').validate({
        rules:{
            usuario:{
                required:true,
                email:true
            }, 
            senha:{
                required:true
            }
        }, 
        messages:{
            usuario:{
                required: "Este campo é obrigatorio"
            }, 
            senha:{
                required:"Digite a senha"
            }
        }
    });
});

  
  function assinar(){
    window.location.href = "html/impressao.html"
  }