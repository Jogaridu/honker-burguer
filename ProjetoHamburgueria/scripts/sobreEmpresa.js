$(document).ready(function() {
    let conteudoMostrado = false
    $("#btnLinhaDoTempo").click(() => {

        if (!conteudoMostrado) {
            $("#btnLinhaDoTempo").animate({"width": "85%", "borderRadius": "0px", "marginBottom": "10px"}, 500);
            $("#caixaConteudoLinhaDoTempo").animate({"width": "85%"}, 500)
            conteudoMostrado = true    

        } else {
            $("#btnLinhaDoTempo").animate({"width": "57%", "borderRadius": "10px", "marginBottom": "0px"}, 500);
            $("#caixaConteudoLinhaDoTempo").animate({"width": "57%"}, 500)
            conteudoMostrado = false
        }
        
        $("#caixaConteudoLinhaDoTempo").slideToggle(500);

        

    });
    
});