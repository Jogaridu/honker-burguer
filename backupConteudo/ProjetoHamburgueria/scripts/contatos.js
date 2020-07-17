$(document).ready(function () {
    const maskApenasLetras = ($el) => {
        let aux = $el.value;
        aux = aux.replace(/[\d!@#$%¨&*()_+{}^?:><`]/g, "");
        $el.value = aux;
    }

    $("#telefone").mask("0000-0000");
    $("#celular").mask("(00) 00000-0000");
    
    $nome = document.getElementById("nome");
    $profissao = document.getElementById("profissao");

    $nome.addEventListener("keyup", function() {maskApenasLetras($nome)});
    $profissao.addEventListener("keyup", function() {maskApenasLetras($profissao)});
    
    // Contador de caracteres textarea
    let $contadorTextArea = document.getElementById("caractereRestante");
    let contador = 0;
    
    document.querySelector("textarea").addEventListener("keyup", (evento) => {

        contador = evento.target.value.length;
        $contadorTextArea.innerHTML = `${contador} de 250`;
    });
    
});

