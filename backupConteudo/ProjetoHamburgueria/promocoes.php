<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Honker Burguer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/promocoes.css">
</head>
<body>
    <?php include_once("header.php"); ?>
    
    <div class="caixaCentralizaSite">
        <h1>PROMOÇÕES</h1>
        <div id="caixaProdutos" class="centralizar">

            <div id="promocao">
                <h1>Hamburgueres</h1>
                <div class="produtos">
                    <figure class="imagemProduto">
                        <img src="images/promocoes/burguerCheddar.png" alt="Imagem hamburguer na promoção">
                    </figure>

                    <div class="caixaPrecos">
                        <p class="formatarTexto precoVelho">VELHO: R$20,00</p>
                        <p class="formatarTexto precoNovo">NOVO: R$19,99</p>
                    </div>

                    <h3 class="formatarTitulo nomeLanche">BURGER CHEDDAR</h3>

                    <div class="caixaBotoes">
                        <figure class="btnBurger"></figure>
                    </div>
                </div>

                <div class="produtos">
                    <figure class="imagemProduto">
                        <img src="images/promocoes/burguerChicken.png" alt="Imagem hamburguer na promoção">
                    </figure>

                    <div class="caixaPrecos">
                        <p class="formatarTexto precoVelho">VELHO: R$10,00</p>
                        <p class="formatarTexto precoNovo">NOVO: R$6,99</p>
                    </div>

                    <h3 class="formatarTitulo nomeLanche">BURGER CHICKEN</h3>

                    <div class="caixaBotoes">
                        <figure class="btnBurger"></figure>
                    </div>
                </div>

                <div class="produtos">
                    <figure class="imagemProduto">
                        <img src="images/promocoes/burguerMonster.png" alt="Imagem hamburguer na promoção">
                    </figure>

                    <div class="caixaPrecos">
                        <p class="formatarTexto precoVelho">VELHO: R$40,00</p>
                        <p class="formatarTexto precoNovo">NOVO: R$19,99</p>
                    </div>

                    <h3 class="formatarTitulo nomeLanche">BURGER MONSTERS</h3>

                    <div class="caixaBotoes">
                        <figure class="btnBurger"></figure>
                    </div>
                </div>
            </div>

            <div id="promocao">
                <h1>Batata Frita</h1>
                <div class="produtos">
                    <figure class="imagemProduto">
                        <img src="images/promocoes/batataBalde.png" alt="Imagem hamburguer na promoção">
                    </figure>

                    <div class="caixaPrecos">
                        <p class="formatarTexto precoVelho">VELHO: R$20,00</p>
                        <p class="formatarTexto precoNovo">NOVO: R$14,99</p>
                    </div>

                    <h3 class="formatarTitulo nomeLanche">BALDE DE BATATA</h3>

                    <div class="caixaBotoes">
                        <figure class="btnBatata"></figure>
                    </div>
                </div>

                <div class="produtos">
                    <figure class="imagemProduto">
                        <img src="images/promocoes/batataRustica.png" alt="Imagem hamburguer na promoção">
                    </figure>

                    <div class="caixaPrecos">
                        <p class="formatarTexto precoVelho">VELHO: R$16,00</p>
                        <p class="formatarTexto precoNovo">NOVO: R$9,99</p>
                    </div>

                    <h3 class="formatarTitulo nomeLanche">BATATA RUSTICA</h3>

                    <div class="caixaBotoes">
                        <figure class="btnBatata"></figure>
                    </div>
                </div>

                <div class="produtos">
                    <figure class="imagemProduto">
                        <img src="images/promocoes/batataCheddar.png" alt="Imagem hamburguer na promoção">
                    </figure>

                    <div class="caixaPrecos">
                        <p class="formatarTexto precoVelho">VELHO: R$20,00</p>
                        <p class="formatarTexto precoNovo">NOVO: R$19,99</p>
                    </div>

                    <h3 class="formatarTitulo nomeLanche">COMBO BATATA COM CHEDDAR</h3>

                    <div class="caixaBotoes">
                        <figure class="btnBatata"></figure>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <?php include_once("footer.php"); ?>

    <script src="scripts/jquery-1.11.3.min.js"></script>
    <script src="scripts/promocoes.js"></script>
    <script src="scripts/mobile.js"></script>
</body>
</html>