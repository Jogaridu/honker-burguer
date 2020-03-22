<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Honker Burguer</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/promocoes.css">
</head>
<body>
    <?php include_once("header.php"); ?>

    <div class="caixaCentralizaSite">
        <div id="caixaProdutos" class="centralizar">
            <div class="produtos">
                <figure class="imagemProduto"></figure>

                <h3 class="formatarTexto">Titulo 01</h3>

                <div class="caixaPrecos">
                    <p class="formatarTexto precoVelho">Velho: R$20,00</p>
                    <p class="formatarTexto precoNovo">NOVO: R$19,99</p>
                </div>

                <div class="caixaBotoes">
                    <figure class="btnCurtir"></figure>
                </div>
            </div>

            <div class="produtos">
                <figure class="imagemProduto"></figure>

                <h3 class="formatarTexto">Titulo 01</h3>

                <div class="caixaPrecos">
                    <p class="formatarTexto precoVelho">Velho: R$20,00</p>
                    <p class="formatarTexto precoNovo">NOVO: R$19,99</p>
                </div>

                <div class="caixaBotoes">
                    <figure class="btnCurtir"></figure>
                </div>
            </div>
        </div>
    </div>

    <?php include_once("footer.php"); ?>

    <script src="scripts/jquery-1.11.3.min.js"></script>
    <script src="scripts/promocoes.js"></script>
</body>
</html>