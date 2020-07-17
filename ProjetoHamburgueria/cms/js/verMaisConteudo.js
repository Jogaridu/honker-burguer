function abrirModalConteudo() {
    $(this).css({
        "max-height": "350px",
        "width":"400px",
        "background-color": "white",
        "box-shadow": "1px 1px 10px black",
        "padding": "25px"
    });

}

function fecharModalConteudo() {
    $(this).css({
        "max-height": "150px",
        "width":"145px",
        "background-color": "transparent",
        "box-shadow": "none",
        "padding": "0px"
    });

}

$(".verMaisConteudo").hover(abrirModalConteudo, fecharModalConteudo);