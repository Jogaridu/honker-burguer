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
</head>
<body>
    <?php include_once("header.php"); ?>
    <div class="caixaCentralizaSite">

        <?php 
            $sql = "SELECT tblNossasLoja.*
                    FROM tblNossasLoja
                    WHERE tblNossasLoja.ativado = 1";

            $selectTitulo = mysqli_query($conexao, $sql);

            while($rsTitulo = mysqli_fetch_assoc($selectTitulo)) {
        ?>
                <div id="caixaEnderecoLojas">
                    <h1>ONDE PODE NOS ENCONTRAR?</h1>
                    <ul id="listaEnderecos">
                        <li class="itemListaEnderecos">
                            <p class="formatarTexto">Av. Luis Carlos Berrini, nº 666</p>
                            <p class="formatarTexto formatarTelefone">(11)4880-3829</p>
                        </li>

                        <li class="itemListaEnderecos">
                            <p class="formatarTexto">Rodovia Raposo Tavares, KM 23,5, Loja 94 - (11)4880-3829</p>
                        </li>

                        <li class="itemListaEnderecos">
                            <p class="formatarTexto">Alameda Grajaú, 61 - Alphaville Industrial - (11)4880-3829</p>
                        </li>

                        <li class="itemListaEnderecos">
                            <p class="formatarTexto">Av. Dr. Chucri Zaidan, 902, 90 - (11)4880-3829</p>
                        </li>
                    </ul>

                    <div id="caixaMapa">
                        <figure id="mapaFiliais"></figure>
                    </div>
                </div>

        <?php } ?>
    </div>
    <?php include_once("footer.php"); ?>
    
    <script src="scripts/jquery-1.11.3.min.js"></script>
    <script src="scripts/mobile.js"></script>
</body>
</html>