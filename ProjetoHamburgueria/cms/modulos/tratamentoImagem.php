<?php

function tratarImagem($imgFormulario) {

    if($imgFormulario['size'] > 0 && $imgFormulario['type'] != "") {

        $diretorioArquivo = "../../arquivos/";

        $arquivoSize = round($imgFormulario['size']/1024);

        $arquivosPermitidos = array("image/jpeg", "image/jpg", "image/png");

        $arquivoType = $imgFormulario['type'];

        if (in_array($arquivoType, $arquivosPermitidos)) {

            if ($arquivoSize <= 2000) {

                $nomeArquivo = pathinfo($imgFormulario['name'], PATHINFO_FILENAME);

                $extensaoArquivo = pathinfo($imgFormulario['name'], PATHINFO_EXTENSION);

                $nomeArquivoCripty = md5($nomeArquivo . uniqid(time()));

                $foto = $nomeArquivoCripty . "." . $extensaoArquivo;

                $arquivoTemp = $imgFormulario['tmp_name'];

                if(move_uploaded_file($arquivoTemp, $diretorioArquivo.$foto)) {

                    return $foto;

                }

            }

        } 

    } 
        
    return false;
    
}

?>