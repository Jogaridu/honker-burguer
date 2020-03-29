<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Honker Burguer</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/lojas.css">
</head>
<body>
    <?php include_once("header.php"); ?>
    <div class="caixaCentralizaSite">

        <div id="caixaEnderecoLojas">
            <h1>ONDE PODE NOS ENCONTRAR?</h1>
            <ul id="listaEnderecos">
                <li class="itemListaEnderecos formatarTexto">Av. Luis Carlos Berrini, nº 666.</li>
                <li class="itemListaEnderecos formatarTexto">Rodovia Raposo Tavares, KM 23,5, Loja 94</li>
                <li class="itemListaEnderecos formatarTexto">Alameda Grajaú, 61 - Alphaville Industrial</li>
                <li class="itemListaEnderecos formatarTexto">Av. Dr. Chucri Zaidan, 902, 902</li>
            </ul>

            <div id="caixaMapa">
                <figure id="mapaFiliais"></figure>
            </div>
        </div>

        
    </div>
    <?php include_once("footer.php"); ?>
</body>
</html>