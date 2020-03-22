$(document).ready(function () {
    let width = (
        parseInt($(".itensCarroussel").outerWidth()) + 
        parseInt($(".itensCarroussel").css("margin-right")) + 
        parseInt($(".itensCarroussel").css("margin-left"))) * 
        $(".itensCarroussel").length;
    
    $("#caixaCarroussel").css("width", width);
    
    let numImages = 1;
    let marginPadding = 20;
    
    let ident = 0;
    let count = $(".itensCarroussel").length - 1;
    let slide = (numImages + marginPadding) + ($("itensCarroussel").outerWidth() * numImages);
    
    $(".next").click(function() {
        ident++;
        $(".caixaCarroussel").animate({'marginLeft':"-=" + slide + 'px'}, 500)
    });
});