$(document).ready(function() {
    const data = new Date();
    // const $btnMostrar = document.getElementById("btnMostrar");
    // const $caixaSobreOMes = $("#caixaSobreOMes");
    let caixaMostrando = false;
    // let contadorParaConteudo = 0;

    $("#btnMostrar").click(() => {
    // DESTAQUE

        if (caixaMostrando == false) {
            $("#btnMostrar").css({transform: "rotate(-90deg)"})
            caixaMostrando = true;

        } else {
            $("#btnMostrar").css({transform: "rotate(0deg)"})
            caixaMostrando = false

        }
        
        $(".conteudoSobreDestaqueMes").slideToggle(500);

    });

    // OUTROS DESTAQUES
    let thumbs = document.querySelectorAll(".imgCarroussel img");

    let cover = document.querySelector(".flip-box-front").children[0];
    for (let i=0; i < thumbs.length; i++) {
        
        thumbs[i].addEventListener("click", () => {
            console.log(thumbs[i].getAttribute("src"));
            cover.setAttribute("src", thumbs[i].getAttribute("src")) 
        });
    }
    
    // PEGAR O MÊS
    const monName = new Array ("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Agosto", "Outubro", "Novembro", "Dezembro");
    $("#nomeMes").text(`Mês de ${monName[data.getMonth()]}`);

    // CARROUSSEL
    // Declaração de variáveis

    let numImages = 4;
    let marginPadding = 100;
    let ident = 0;
    let count = ($(".itensCarroussel").length / numImages) - 1;
    // Funções
    
    // Função que muda de slide. Parâmetros são "next" ou "back"
    const mudaSlide = (option) => {

        switch(option) {

        // Codigo para o slider ir para frente
            case "next":
                if (ident < count) {
                    ident++;
                    $("#carroussel").animate({'marginLeft':"-=" + proximoSlide + 'px'}, 500)
        
                } else {
                    ident = 0;
                    $("#carroussel").animate({'marginLeft':"+=" + slideFinalComeco + 'px'}, 500)
                }
                break;
        
        // Codigo para o slider ir para trás
            case "back":
                if (ident > 0) {
                    ident--;
                    $("#carroussel").animate({'marginLeft':"+=" + proximoSlide + 'px'}, 500)
        
                } else {
                    ident = ($(".itensCarroussel").length - 1);
                    $("#carroussel").animate({'marginLeft':"-=" + slideFinalComeco + 'px'}, 500)
                }
                break;

            default:
                alert("Parametros INCORRETOS");
                break;
        }
    }

    // Ajuste do tamanho do Carroussel em largura
    let width = (
        parseInt($(".itensCarroussel").outerWidth()) + 
        parseInt($(".itensCarroussel").css("margin-right")) + 
        parseInt($(".itensCarroussel").css("margin-left"))) * 
        $(".itensCarroussel").length;
    
    $("#carroussel").css("width", width);
    
    let proximoSlide = (numImages * marginPadding) + ($(".itensCarroussel").outerWidth() * numImages);
    let slideFinalComeco = proximoSlide * count;

    $(".next").click(() => mudaSlide("next"));

    $(".back").click(() => mudaSlide("back"));

});
