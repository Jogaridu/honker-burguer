<?php
    require_once('bd/conexao.php');

    $conexao = conexaoMysql();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Honker Burguer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/curiosidade.css">
    <script src="scripts/jquery-1.11.3.min.js"></script>
    <script src="scripts/jquery.form.js"></script>
    <script src="scripts/curiosidades.js"></script>
    <script src="scripts/mobile.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
    <?php include_once("header.php"); ?>
    

    <div id="caixaCuriosidade" class="centralizar">
        <div class="caixaCentralizaSite">
            <!-- Menu mobile -->
            <ul class="menuCuriosidadeMobile">
                <li class="formatarTexto selecionado">INICIO</li>
                <li class="formatarTexto">ORIGEM</li>
            </ul>

            <div id="curiosidades">
                <section class="conteudoCuriosidade fundoInicio mostrarConteudo">
                    <h1>BEM VINDO Á</h1>
                </section>

                <!-- SURGIMENTO DO HAMBURGUER -->
                <section id="fundoHistoriaHamburguer" class="conteudoCuriosidade ">

                    <h1>Surgimento do Hamburguer</h1>

                        
                    <div class="conteudoHistoria">

                        <!-- CADASTRANDO SEM IMAGEM -->
                    <?php 
                        $sql = "SELECT * FROM tblOrigemHamburguer 
                        WHERE tblOrigemHamburguer.imagemOrigemHamburguer = '' AND tblOrigemHamburguer.ativado = 1";
                        
                        $selectOrigemHamburguer = mysqli_query($conexao, $sql);

                        while($rsOrigemHamburguer = mysqli_fetch_assoc($selectOrigemHamburguer)) {

                    ?>
                            <h3><?=$rsOrigemHamburguer['tituloOrigemHamburguer']?></h3>

                            <p class="formatarTexto conteudo"><?=$rsOrigemHamburguer['conteudoOrigemHamburguer']?></p>

                    <?php } ?>
                        
                        <!-- CADASTRANDO COM IMAGEM -->
                    <?php 
                        $sql = "SELECT * FROM tblOrigemHamburguer 
                        WHERE tblOrigemHamburguer.imagemOrigemHamburguer <> '' AND tblOrigemHamburguer.ativado = 1";

                        $selectOrigemHamburguer = mysqli_query($conexao, $sql);

                        while($rsOrigemHamburguer = mysqli_fetch_assoc($selectOrigemHamburguer)) {

                    ?>
                            <h3><?=$rsOrigemHamburguer['tituloOrigemHamburguer']?></h3>

                            <p class="formatarTexto conteudo"><?=$rsOrigemHamburguer['conteudoOrigemHamburguer']?></p>

                            <figure class="imgHistoriaHamburguer">
                                <img src="cms/bd/arquivos/<?=$rsOrigemHamburguer['imagemOrigemHamburguer']?>" alt="Imagem sobre origem do hamburguer">
                            </figure>

                        <?php } ?>

                    </div>
                </section>
                
                <!-- MONTAGEM DE NOSSOS HAMBURGUERES -->
                <section class="conteudoCuriosidade ">
                    <h1>Montagem de nossos Hamburgueres</h1>

                    <div id="caixaCarroussel">
                        <div class="nav back">&laquo;</div>

                        <ul id="carroussel">
                            <?php 
                                $sql = "SELECT * FROM tblMontagem WHERE tblMontagem.ativado = 1";

                                $selectMontagem = mysqli_query($conexao, $sql);

                                while($rsMontagem = mysqli_fetch_assoc($selectMontagem)) {

                            ?>

                                <li class="itensCarroussel">
                                    <figure class="imgCarroussel">
                                        <img src="cms/bd/arquivos/<?=$rsMontagem['imagemMontagem']?>" alt="Imagem Carroussel 01">
                                    </figure>
                                    <div class="conteudoMontagem">
                                        <h3><?=$rsMontagem['tituloMontagem']?></h3>
                                        <p class="formatarTexto"><?=$rsMontagem['conteudoMontagem']?></p>
                                    </div>
                                </li>
                            
                            <?php } ?>
                        </ul>
                        
                        <div class="nav next">&raquo;</div>
                    </div>
                </section>

                <!-- NIVEL DE SUA FOME -->
                <section class="conteudoCuriosidade fundoNivelFome">
                    <h1>Qual o nível da sua fome?</h1>

                    <div class="caixaNivelFome">
                        <div class="conteudoNivelFome textoNivelAlto">
                            <h3>TRIPLO CHEDDAR BACON</h3>
                            <p class="formatarTexto">Se você está na correria do dia a dia paulistano e não comeu aquele rango ainda, experimente nosso lanche nível alto. </p> 
                        </div>

                        <figure class="imgHamburguerNivelFome">
                            <img src="images/curiosidade/alto.png" alt="Produto 01">
                        </figure>
                    </div>

                    <div class="caixaNivelFome">
                        <div class="conteudoNivelFome textoNivelAlto">
                            <h3>HONKER BURGUER DA CASA</h3>
                            <p class="formatarTexto">Prato feito não tá com nada, pede o nível médio</p> 
                        </div>

                        <figure class="imgHamburguerNivelFome">
                            <img src="images/curiosidade/medio.png" alt="Produto 02">
                        </figure>
                    </div>

                    <div class="caixaNivelFome">
                        <div class="conteudoNivelFome textoNivelAlto">
                            <h3>HAMBURGUER BASIC HONKER</h3>
                            <p class="formatarTexto ">Tá voltando do trampo e a refeição não satisfez? Coma o nível baixo e mate sua fome.</p> 
                        </div>

                        <figure class="imgHamburguerNivelFome">
                            <img src="images/curiosidade/baixo.png" alt="Produto 03">
                        </figure>
                    </div>

                    <div class="conteudoNivelFome textoNivelMedio">
                        <h3></h3>
                        <p class="formatarTexto "></p>
                    </div>

                    <div class="conteudoNivelFome">
                        <h3></h3>
                        <p class="formatarTexto "></p>
                    </div>
                </section>


                <!-- MENU NO DESKTOP -->
                <ul class="menuCuriosidade">
                    <li class="formatarTexto selecionado">INICIO</li>
                    <li class="formatarTexto">ORIGEM</li>
                    <li class="formatarTexto">MONTAGEM</li>
                    <li class="formatarTexto">NÍVEL DE FOME</li>
                </ul>
            </div>
            
            <!-- Menu mobile -->
            <ul class="menuCuriosidadeMobile">
                <li class="formatarTexto">MONTAGEM</li>
                <li class="formatarTexto">NÍVEL DE FOME</li>
            </ul>
        </div>
    </div>

    <?php include_once("footer.php"); ?>
</body>
</html>