<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Honker Burguer</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/produtoMes.css">
</head>
<body>
    <?php include_once("header.php"); ?>

    <div class="caixaCentralizaSite">
        <div id="caixaDestaqueDoMes" class="centralizar">

            <figure id="coroaImg" class="centralizar">
                <img src="images/imgCoroa.png" alt="Coroa para destaque do mês">
            </figure>

            <div id="cardDestaque">
                <figure id="lancheImg" class="centralizar"> 

                </figure>

                <h2 class="formatarTexto centralizar">NOME DO LANCHE</h2>

                <div id="caixaSobreOMes" class="centralizar">
                    <div id="nomeMes" class="formatarTexto">Mês de Setembro</div>
                    <div id="btnMostrar" class="centralizar">Mostrar</div>
                </div>
            </div>


        </div>
        <div id="caixaOutrosDestaque">
            <h1>Outros destaques dos meses</h1>

            <div class="cardOutroMes">
                <figure class="imgMes">
                    <img src="images/produtoMes/imgOutroMes.jpg">
                </figure>
            </div>

            <div class="cardOutroMes">
                <figure class="imgMes">
                    <img src="images/produtoMes/imgOutroMes.jpg">
                </figure>
            </div>

            <div class="cardOutroMes">
                <figure class="imgMes">
                    <img src="images/produtoMes/imgOutroMes.jpg">
                </figure>
            </div>

            <div class="cardOutroMes">
                <figure class="imgMes">
                    <img src="images/produtoMes/imgOutroMes.jpg">
                </figure>
            </div>

            <div class="cardOutroMes">
                <figure class="imgMes">
                    <img src="images/produtoMes/imgOutroMes.jpg">
                </figure>
            </div>

            <div class="cardOutroMes">
                <figure class="imgMes">
                    <img src="images/produtoMes/imgOutroMes.jpg">
                </figure>
            </div>

            <div class="cardOutroMes">
                <figure class="imgMes">
                    <img src="images/produtoMes/imgOutroMes.jpg">
                </figure>
            </div>

            <div class="cardOutroMes">
                <figure class="imgMes">
                    <img src="images/produtoMes/imgOutroMes.jpg">
                </figure>
            </div>
            
        </div>
    </div>

    <?php include_once("footer.php"); ?>

    <script src="scripts/jquery-1.11.3.min.js"></script>
    <script src="scripts/produtoMes.js"></script>
</body>
</html>