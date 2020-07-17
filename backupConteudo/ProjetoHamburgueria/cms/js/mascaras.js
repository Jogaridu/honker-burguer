$(document).ready(function () {
    const maskApenasLetras = ($el) => {
        let aux = $el.value;
        aux = aux.replace(/[\d!@#$%¨&*()_+{}^?:><`]/g, "");
        $el.value = aux;
    }
    
    const $nome = document.getElementById("nome");
    const $usuario = document.getElementById("usuario");
    
    $nome.addEventListener("keyup", function() { maskApenasLetras($nome) });

    if ($usuario != null) {
        $usuario.addEventListener("keyup", function() { maskApenasLetras($usuario) });    
    }
    
    $("#celular").mask("(00) 00000-0000");
    
});
