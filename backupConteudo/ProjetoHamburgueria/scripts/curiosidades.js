$(document).ready(function() {
    // MUDANÇA DE CONTEUDO

    // Funções
    function trocarConteudo($elemento) {
        for (let i=0; i <= $elemento.length - 1; i++) {
            $elemento[i].addEventListener("click", function(){
                exibir ($conteudo[i]);
                $elemento.forEach(function (Element) { Element.classList.remove("selecionado")});
                $elemento[i].classList.add("selecionado");
                });
        }

    }

    function exibir (div) {
        $conteudo.forEach(function (div){div.classList.remove("mostrarConteudo")});
        div.classList.add("mostrarConteudo");
    }

    // - Variáveis declaração - 
    const $menu = document.querySelectorAll(".menuCuriosidade li");
    const $menuMobile = document.querySelectorAll(".menuCuriosidadeMobile li")

    const $conteudo = document.querySelectorAll("#curiosidades>section");

    trocarConteudo($menu);
    trocarConteudo($menuMobile);

    // CARROUSSEL
    let numImages = 1;
    let ident = 0;
    let count = $(".itensCarroussel").length - 1;

   function mudaSlide (option) {

       switch(option) {
           case "next":
               if (ident < count) {
                   ident++;
                   $("#carroussel").animate({'marginLeft':"-=" + proximoSlide + 'px'}, 500)
       
               } else {
                   ident = 0;
                   $("#carroussel").animate({'marginLeft':"+=" + slideFinalComeco + 'px'}, 500)
               }
               break;
           
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

   let width = parseInt($(".itensCarroussel").outerWidth() * $(".itensCarroussel").length);
   
   $("#carroussel").css("width", width);

   let proximoSlide = numImages + $(".itensCarroussel").outerWidth();
   let slideFinalComeco = proximoSlide * ($(".itensCarroussel").length - 1);
   
   // Clique do usuário para avançar o Carroussel
   $(".next").on("click", function() {mudaSlide("next")});

   // Clique do usuário para voltar o Carroussel
   $(".back").on("click", function() {mudaSlide("back")});

   // GRAFICO

   function graficoPie (ctx, arrDados) {
        let myPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["Gorduras", "Carboidratos", "Proteinas"],

                datasets: [{
                    data: arrDados,
                    backgroundColor: ["blue", "red", "yellow"],
                }]
            },
            options: {
                cutoutPercentage: 0,
                responsive: true
            }
        });
   }

   const valoresCaloricosNivelAlto = [10, 50, 40];
   const valoresCaloricosNivelMedio = [10, 10, 80];
   const valoresCaloricosNivelBaixo = [30, 30, 31];
   graficoPie($("#graficoNivelAlto"), valoresCaloricosNivelAlto);
   graficoPie($("#graficoNivelMedio"), valoresCaloricosNivelMedio);
   graficoPie($("#graficoNivelBaixo"), valoresCaloricosNivelBaixo);
   

});