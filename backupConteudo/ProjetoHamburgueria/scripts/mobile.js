//Function para o clique do menu Mobile
$("#iconeMenu").click(function(){
    $("#menuMobile").fadeToggle(1000);
    });
    
    $(".itemMenu").click(function(){
    $("#menuMobile").fadeToggle();
        
    })

// Function para a home, Esconder o segundo menu
$("#btnMostraLista").click(function() {
    $("#listaSelecaoItensMobile").toggle(500);
});
