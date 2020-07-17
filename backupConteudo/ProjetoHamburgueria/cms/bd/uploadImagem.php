<?php

// Valida se o que esta chegando é um arquivo, size maior de 0 e type de arquivo diferente de vazio
if($_FILES['fleFoto']['size'] > 0 && $_FILES['fleFoto']['type'] != "") {

    // Nome da pasta que foi criada para colocar os arquivos usados
    $diretorioArquivo = "arquivos/";

    //Guardamos o tamanho do arquivo, convertendo o tamanho em byte para KB
    $arquivoSize = round($_FILES['fleFoto']['size']/1024);

    // Lista de extensões que serão permitidas no uploud
    $arquivosPermitidos = array("image/jpeg", "image/jpg", "image/png");

    // Guardamos o tupo de arquivo que foi escolhido pelo usuario
    $arquivoType = $_FILES['fleFoto']['type'];

    // Valida se a extensão do arquivo é permitido no uploud
    if (in_array($arquivoType, $arquivosPermitidos)) {
        if ($arquivoSize <= 2000) {

            // Guardamos o nome do arquivo, utilizando a função pathinfo() que permite desvincular 
            // o nome do arquivo da extensão
            $nomeArquivo = pathinfo($_FILES['fleFoto']['name'], PATHINFO_FILENAME);

            // Guarda a extensão do nome do arquivo
            $extensaoArquivo = pathinfo($_FILES['fleFoto']['name'], PATHINFO_EXTENSION);

            // Estamos gerando um nome de arquivo unico para fazer o upload no servidor.
            // Para isso utilizamos os comandos
            // uniqid() que gera uma sequencia aleatória com base em uma configuração de hardware
            // time() que pega a hora, minuto e segundo e coloca junto com o uniqid
            // md5() para fazer a criptografia do nome do arquivo
                // Existem outras formas de criptografia, tais como:
                    // md5()
                    // sha1()
                    // hash(tipo de criptografia, variavel)
            $nomeArquivoCripty = md5($nomeArquivo . uniqid(time()));

            // Juntamos novamente o nome do arquivo já alterado com a sua extensão original
            $foto = $nomeArquivoCripty . "." . $extensaoArquivo;

            // Pasta temporario que o form disponibilizou o arquivo a ser upado para o servidor
            $arquivoTemp = $_FILES['fleFoto']['tmp_name'];

            // Move para o servidor o arquivo da pasta temporaria para o diretório criado no
            // servidor, alterando o nome do arquivo original, para o nome criptografado.
            if(move_uploaded_file($arquivoTemp, $diretorioArquivo.$foto)) {
                
                // Ativa a utilização de uma variavel de sessão
                session_start();
                
                // Guarda o nome da foto que foi enviada para o servidor para recuperarmos
                // esse valor no insert para o banco de dados

                $_SESSION['nomeFoto'] = $foto;
                // Elimina as variaveis de sessao do projeto
                // session_destroy() USAR NO LOGOUT
                echo("<img src='bd/arquivos/".$foto."'>");

            }

        }


    } else {
        echo("Não é permitido arquivos com tamanho maior do que 2MB!");
        
    }

} else {
    echo("Extensão de arquivo selecionado não é permitido no sistema!");

}

?>