<?php
    require_once('bd/conexao.php');

    $conexao = conexaoMysql();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Honker Burguer</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/lojas.css">
    <script src="scripts/jquery-1.11.3.min.js"></script>
    <script src="scripts/jquery.form.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="scripts/mobile.js"></script>
</head>
<body>
    <?php include_once("header.php"); ?>
    <div class="caixaCentralizaSite">

        <?php 
            $sql = "SELECT tblNossasLoja.*
                    FROM tblNossasLoja
                    WHERE tblNossasLoja.ativado = 1";

            $selectTitulo = mysqli_query($conexao, $sql);

            if($rsTitulo = mysqli_fetch_assoc($selectTitulo)) {
        ?>
                <div id="caixaEnderecoLojas">

                    <!-- TITULO DA SEÇÃO -->
                    <h1><?=$rsTitulo['tituloNossasLoja']?></h1>

                    <!-- LISTA DE ENDEREÇOS -->
                    <ul id="listaEnderecos">

                    <?php 

                        $sql = "SELECT tblEndereco.*, tblNossasLoja.idNossasLoja as idLojas
                                FROM tblEndereco, tblNossasLoja
                                WHERE tblEndereco.ativado = 1 AND tblEndereco.idNossasLoja = tblNossasLoja.idNossasLoja;";

                        $selectEndereco = mysqli_query($conexao, $sql);

                        while($rsEndereco = mysqli_fetch_assoc($selectEndereco)) {

                    ?>
                            <li class="itemListaEnderecos">
                                <p class="formatarTexto"><?=$rsEndereco['rua']?>,<?=$rsEndereco['numero']?> - <?=$rsEndereco['bairro']?></p>
                                <p class="formatarTexto formatarTelefone"><?=$rsEndereco['celular']?></p>
                            </li>

                        <?php } ?>
                    </ul>

                    <div id="caixaMapa">
                        <figure id="mapaFiliais" style="background-image: url('cms/bd/arquivos/<?=$rsTitulo['imagemNossasLoja']?>')"></figure>
                    </div>
                </div>

        <?php } ?>
    </div>
    <?php include_once("footer.php"); ?>
    
    
</body>
</html>