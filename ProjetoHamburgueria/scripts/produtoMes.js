$(document).ready(function() {
    const data = new Date();
    const $btnMostrar = $("#btnMostrar");
    const $caixaSobreOMes = $("#caixaSobreOMes");

    $btnMostrar.click(() => {
    // DESTAQUE
        if (!$(".conteudoSobreOMes").length) {
            const $caixaConteudo = document.createElement("div");
            $caixaConteudo.classList.add("conteudoSobreOMes");
            
            $caixaSobreOMes.append($caixaConteudo);
            
            $caixaConteudo.innerHTML = " <p class='formatarTexto'> TEXTO TEXTO TEXTO </p>";
            $(".conteudoSobreOMes").css("height", "200px");
            $(".conteudoSobreOMes").css("display", "none");
        }

        $(".conteudoSobreOMes").slideToggle(500);

    });

    // OUTROS DESTAQUES
    const meses = document.querySelectorAll(".cardOutroMes");
    const conteudoSobreOMes = [
    "Mente sã, corpo são. O primeiro mês do ano é um alerta sobre a saúde mental. As ações dessa campanha buscam ressaltar a importância de cuidarmos não só da parte física, mas como emocionais para o melhor equilíbrio e bem-estar."

    ]

    meses.forEach((element) => {
        
        element.addEventListener('mouseover', () => {
            const caixaInfDoMesdocument = document.createElement("div");
            caixaInfDoMesdocument.classList.add("infomacaoEventoMes");
            caixaInfDoMesdocument.innerHTML = `<p class='formatarTexto'>${conteudoSobreOMes[0]}</p>`;
            element.appendChild(caixaInfDoMesdocument);

            $(".infomacaoEventoMes").animate({marginTop: "10px"}, 500);
        });

        element.addEventListener('mouseout', () => {
            
            element.removeChild(element.lastChild);
        });
    });
    
    // PEGAR O MÊS
    const monName = new Array ("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Agosto", "Outubro", "Novembro", "Dezembro");
    $("#nomeMes").text(`Mês de ${monName[data.getMonth()]}`);

});
