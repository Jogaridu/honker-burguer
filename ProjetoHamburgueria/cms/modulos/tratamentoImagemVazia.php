<?php

function tratarImagemVazia($imagem) {

    if ($imagem !== "") {
        
        return "bd/arquivos/".$imagem;
    }

    return "images/semImagem.jpg";
}

?>