$(document).ready(function() {
    let conteudoMostrado = false
    $("#btnLinhaDoTempo").click(() => {

        if (!conteudoMostrado) {
            $("#btnLinhaDoTempo").animate({"width": "100%", "borderRadius": "0px", "marginBottom": "10px"}, 500);
            $("#caixaConteudoLinhaDoTempo").animate({"width": "100%"}, 500)
            conteudoMostrado = true    

        } else {
            $("#btnLinhaDoTempo").animate({"width": "75%", "borderRadius": "10px", "marginBottom": "0px"}, 500);
            $("#caixaConteudoLinhaDoTempo").animate({"width": "75%"}, 500)
            conteudoMostrado = false
        }
        
        $("#caixaConteudoLinhaDoTempo").slideToggle(1500);

    });
    
});