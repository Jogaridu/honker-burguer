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
    <link rel="stylesheet" href="css/sobreEmpresa.css">
    <script src="scripts/jquery-1.11.3.min.js"></script>
    <script src="scripts/sobreEmpresa.js"></script>
    <script src="scripts/mobile.js"></script>
    <script src="scripts/jquery.form.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
    <?php include_once("header.php"); ?>
    
    
    <div class="caixaCentralizaSite">

        <?php 
            $sql = "SELECT * FROM tblSobreEmpresa WHERE tblSobreEmpresa.ativado = 1";

            $selectSobreEmpresa = mysqli_query($conexao, $sql);

            if($rsSobreEmpresa = mysqli_fetch_assoc($selectSobreEmpresa)) {

        ?>
            <section id="caixaSobreEmpresa" class="centralizar">
                <h2><?=$rsSobreEmpresa['tituloSobreEmpresa']?></h2>
                <p class="formatarTexto">
                    <?=$rsSobreEmpresa['conteudoSobreEmpresa']?>
                </p>
            </section>

            <?php } ?>

        <div id="caixaLinhaDoTempo" class="centralizar">
            <div id="btnLinhaDoTempo" class="formatarTexto centralizar">
                MAIS HISTÓRIA SOBRE A HONKER BURGUER
            </div>

            <div id="caixaConteudoLinhaDoTempo" class="centralizar">

                <?php
                    $sql = "SELECT * FROM tblOrigemEmpresa WHERE tblOrigemEmpresa.ativado = 1";

                    $selectOrigemEmpresa = mysqli_query($conexao, $sql);

                    while ($rsOrigemEmpresa = mysqli_fetch_assoc($selectOrigemEmpresa)) {
                ?>
                    <section class="conteudoHistoria">
                        <h3><?=$rsOrigemEmpresa['tituloOrigemEmpresa']?></h3>
                        <figure class="imagemHistoria">
                            <img src="cms/bd/arquivos/<?=$rsOrigemEmpresa['imagemOrigemEmpresa']?>" alt="Imagem origem da empresa">
                        </figure>
                        <p class="formatarTexto">
                            <?=$rsOrigemEmpresa['conteudoOrigemEmpresa']?>
                        </p>
                    </section>

                <?php }?>

                <!-- <section class="conteudoHistoria">
                    <h3>No Brasil</h3>
                    <p class="formatarTexto">
                        No Brasil, a rede é operada desde 2007 pela Arcos Dourados, máster franqueada da marca Honker Burguer em toda a América Latina.
                    </p>

                    <figure class="imagemHistoria">
                        <img src="images/sobreEmpresa/imgNoBrasil.jpg" alt="IMAGEM COPACABANA">
                    </figure>

                    <p class="formatarTexto">
                        O primeiro restaurante do Brasil foi inaugurado em 1979, em Copacabana, Rio de Janeiro. Uma das melhores empresas para trabalhar no Brasil e um dos maiores empregadores de jovens do país, o Honker Burguer reforça seu compromisso com a segurança e a saúde do trabalhador e anuncia o apoio ao movimento Abril Verde, iniciativa que ressalta a discussão sobre a segurança e a saúde no ambiente de trabalho.
                    </p>
                </section>
                <section class="conteudoHistoria">
                    <h3>Atual</h3>
                    <p class="formatarTexto">
                        Líder no segmento de serviço rápido de alimentação, o Honker Burguer se destaca pela qualidade dos produtos e do atendimento. O Honker Burguer é a maior e mais conhecida empresa de serviço rápido de alimentação do mundo. Presente em 119 países, a rede possui mais de 36 mil restaurantes, onde trabalham 2 milhões de funcionários que alimentam diariamente mais de 70 milhões de clientes. 
                    </p>

                    <figure class="imagemHistoria">
                        <img src="images/sobreEmpresa/imgFachada.jpg" alt="FACHADA HONKER BURGUER">
                    </figure>
                </section> -->
            </div>
        </div>
    </div>
    
    <?php include_once("footer.php"); ?>

    
</body>
</html>