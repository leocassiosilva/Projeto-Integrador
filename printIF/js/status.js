$(function(){
    $("#btnEmAndamento").on("click", function(){
        var status = "Em Andamento"
        $("#div1").text(status);
    });
});

$(function(){
    $("#btnConcluido").on("click", function(){
        var status = "Concluido"
        $("#div1").text(status);
    });
});
    
$(function(){
    $("#btnCancelado").on("click", function(){
        var status = "Cancelado"
        $("#div1").text(status);
    });
});