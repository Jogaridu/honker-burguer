$(document).ready(function() {
    // MUDANÇA DE CONTEUDO
    const $menu = document.querySelectorAll(".menuCuriosidade li");
    const $conteudo = document.querySelectorAll("#curiosidades>section");
    const exibir = (div) => {
        $conteudo.forEach(div => div.classList.remove("mostrarConteudo"));
        div.classList.add("mostrarConteudo");
    }

    for (let i=0; i <= 4; i++) {
        $menu[i].addEventListener("click", () => {
            exibir ($conteudo[i]);
            $menu.forEach(Element => Element.classList.remove("selecionado"));
            $menu[i].classList.add("selecionado");
            });
    }

    // CARROUSSEL
    let numImages = 1;
    let ident = 0;
    let count = $(".itensCarroussel").length - 1;

   const mudaSlide = (option) => {

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
   
   $(".next").click(() => mudaSlide("next"));

   $(".back").click(() => mudaSlide("back"));

   // GRAFICO

   const graficoPie = (ctx, arrDados) => {
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