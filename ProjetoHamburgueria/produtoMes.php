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
                <img src="images/produtoMes/imgCoroa.png" alt="Coroa para destaque do mês">
            </figure>

            <div id="cardDestaque">
                <figure id="lancheImg" class="centralizar"> 
                    <img src="images/produtoMes/produtoDoMes.jpg" alt="Imagem Produto do Mês">
                </figure>

                <h1 class="centralizar">COMBO FOME NÍVEL ALTO</h1>

                <div id="caixaSobreOMes" class="centralizar">
                    <div id="descricaoDoProdutoMes" class="centralizar">
                        <p id="nomeMes" class="formatarTexto">Mês de Setembro</p>
                        <div id="btnMostrar" class="centralizar"></div>
                    </div>
                    <div class="conteudoSobreDestaqueMes centralizar">
                        <p class='formatarTexto'> COMBO DO MÊS: Nesse mês de Março teremos uma grande novidade, é 1 BIG HONKER + 1 BATATA GRANDE + 1 LATA + 1 SOBREMESA.  </p>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div id="caixaOutrosDestaque">
            <h1>EM BREVE</h1>
            <!-- MES MAIOR -->

            <div class="flip-box centralizar">
                <div class="flip-box-inner cover">
                    <!-- FRENTE -->
                    <div class="flip-box-front">
                        <img src="images/produtoMes/imgOutroMes.jpg">
                    </div>

                    <!-- VERSO -->
                    <div class="flip-box-back">
                        <img src="images/logoEmpresa.png">
                    </div>
                </div>
            </div>

            <!-- OUTROS MESES PARA ESCOLHER -->
            <figure class="thumbs">
                <img src="images/produtoMes/imgOutroMes.jpg" alt="EM BREVE PRODUTO DO MES">

                <img src="images/produtoMes/janeiro.jpeg" alt="EM BREVE PRODUTO DO MES">

                <img src="images/produtoMes/fevereiro.jpg" alt="EM BREVE PRODUTO DO MES">

                <img src="images/produtoMes/marco.jpg" alt="EM BREVE PRODUTO DO MES">

                <img src="images/produtoMes/abril.jpg" alt="EM BREVE PRODUTO DO MES">

            </figure>
        </div>
    </div>
    <?php include_once("footer.php"); ?>

    <script src="scripts/jquery-1.11.3.min.js"></script>
    <script src="scripts/produtoMes.js"></script>
</body>
</html>