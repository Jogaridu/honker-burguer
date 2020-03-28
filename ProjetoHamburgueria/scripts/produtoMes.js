$(document).ready(function() {
    const data = new Date();
    const $btnMostrar = document.getElementById("btnMostrar");
    const $caixaSobreOMes = $("#caixaSobreOMes");
    let caixaMostrando = false;
    let contadorParaConteudo = 0;

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
    let thumbs = document.querySelector(".thumbs").children;
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

    
});
