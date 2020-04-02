$(document).ready(function () {
    const maskApenasLetras = ($el) => {
        let aux = $el.value;
        aux = aux.replace(/[\d!@#$%¨&*()_+{}^?:><`~]/, "");
        // aux = aux.replace(/(.{5})(.)/, '$1-$2');
        $el.value = aux;
    }

    $("#telefone").mask("0000-0000");
    $("#celular").mask("(00) 0000-0000");
    
    $nome = document.getElementById("nome");
    $profissao = document.getElementById("profissao");

    $nome.addEventListener("keyup", () => maskApenasLetras($nome));
    $profissao.addEventListener("keyup", () => maskApenasLetras($profissao));
    
});

