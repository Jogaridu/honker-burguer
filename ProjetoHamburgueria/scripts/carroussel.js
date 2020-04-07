$(document).ready(function () {
    // Declaração de variáveis

    // - Numero de imagens para aparecer na tela
    let numImages = 1;

    // - Numero indicando quantidade de margin e paddin em UM item
    let marginPadding = 70;

    // - Identação, mostra em que parte do CARROUSSEL está
    let ident = 0;

    // - Contador indica a posição máximo que um item pode chegar
    let count = ($(".itensCarroussel").length / numImages) - 1;

   // Funções
   
   // Função que muda de slide. Parâmetros são "next" ou "back"
   function mudaSlide (option) {

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
   
   // Calculos somando todos os Margin e Padding dos itens do Carroussel
   let proximoSlide = (numImages + marginPadding) + $(".itensCarroussel").outerWidth();
   let slideFinalComeco = proximoSlide * ($(".itensCarroussel").length - 1);
   
   // Clique do usuário para avançar o Carroussel
   $(".next").on("click", function() {mudaSlide("next")});

   // Clique do usuário para voltar o Carroussel
   $(".back").on("click", function() {mudaSlide("back")});

   setInterval(function() {mudaSlide("next")}, 10000);
});