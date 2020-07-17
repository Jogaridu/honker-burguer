<?php

?>

<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Honker Burguer</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <script src="scripts/jquery-1.11.3.min.js"></script>
    <script src="scripts/jquery.form.js"></script>
    <script src="scripts/carroussel.js"></script>
    <script src="scripts/mobile.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
    <!-- Import header -->
    <?php include_once("header.php") ?>
    <main>
        <!-- Carrousel -->
        
        <div class="caixaCentralizaSite">
            <div id="caixaCarroussel">

                <div class="nav back">&laquo;</div>

                <ul id="carroussel">

                    <li class="itensCarroussel">
                        <figure class="imgCarroussel">
                            <img src="images/home/slider01.png" alt="Imagem Carroussel 01">
                        </figure>
                    </li>

                    <li class="itensCarroussel">
                        <figure class="imgCarroussel">
                            <img src="images/home/slider02.png" alt="Imagem Carroussel 02">
                        </figure>
                    </li>

                    <li class="itensCarroussel">
                        <figure class="imgCarroussel">
                            <img src="images/home/slider03.jpg" alt="Imagem Carroussel 03">
                        </figure>
                    </li>
                </ul>
                
                <div class="nav next">&raquo;</div>
            </div>
            <figure id="imgCabecalhoMobile"></figure>
        </div>
        
        
        <!-- Conteudo -->
        <div id="produtosConteudo" class="centralizar">
            <div class="caixaCentralizaSite">
                <!-- PRESENTE APENAS NO MOBILE -->
                <div id="btnMostraLista" class="centralizar">
                    <ul id="listaSelecaoItensMobile" class="centralizar">
                        <li class="formatarTexto">Hamburguer</li>
                        <li class="formatarTexto">Fritas</li>
                    </ul>
                </div>

                <!-- FILTRO LADO ESQ -->
                <ul id="listaSelecaoItens" class="centralizar">
                    <li class="formatarTexto">Hamburguer</li>
                    <li class="formatarTexto">Fritas</li>
                </ul>
                
                <!-- CONTEUDOS DE PRODUTOS -->
                <div id="caixaProdutos">
                    <div class="produtos">
                        <figure class="caixaImgProduto centralizar">
                            <img src="images/home/produto01.jpg" alt="Produto">
                        </figure>
                        <div class="caixaSobreProduto formatarTexto">
                            <p>
                                Burguer da Casa
                            </p>
                            <p>
                                Hamburguer feito a mão pelos melhores profissionais da casa
                            </p>
                            <p>
                                R$30,99
                            </p>
                        </div>
                        <div class="btnDetalhes">Detalhes</div>
                    </div>

                    <div class="produtos">
                        <figure class="caixaImgProduto centralizar">
                            <img src="images/home/produto02.jpg" alt="Produto">
                        </figure>
                        <div class="caixaSobreProduto formatarTexto">
                            <p>
                                Tradicional Honker Burguer
                            </p>
                            <p>
                                Foi feito para comer
                            </p>
                            <p>
                                R$15,99
                            </p>
                        </div>
                        <div class="btnDetalhes">Detalhes</div>
                    </div>

                    <div class="produtos">
                        <figure class="caixaImgProduto centralizar">
                            <img src="images/home/produto03.jpg" alt="Produto">
                        </figure>
                        <div class="caixaSobreProduto formatarTexto">
                            <p>
                                Duplo salada
                            </p>
                            <p>
                                Duplo sabor com um rúcula íncrivel
                            </p>
                            <p>
                                R$5,99
                            </p>
                        </div>
                        <div class="btnDetalhes">Detalhes</div>
                    </div>

                    <div class="produtos">
                        <figure class="caixaImgProduto centralizar">
                            <img src="images/home/produto04.jpg" alt="Produto">
                        </figure>
                        <div class="caixaSobreProduto formatarTexto">
                            <p>
                                Burguer Artezanal
                            </p>
                            <p>
                                Lanche feito especialmente pelo chef
                            </p>
                            <p>
                                R$40,99
                            </p>
                        </div>
                        <div class="btnDetalhes">Detalhes</div>
                    </div>

                    <div class="produtos">
                        <figure class="caixaImgProduto centralizar">
                            <img src="images/home/produto05.jpg" alt="Produto">
                        </figure>
                        <div class="caixaSobreProduto formatarTexto">
                            <p>
                                Chips Média
                            </p>
                            <p>
                                Chips de batata com o tamanho normal
                            </p>
                            <p>
                                R$4,99
                            </p>
                        </div>
                        <div class="btnDetalhes">Detalhes</div>
                    </div>

                    <div class="produtos">
                        <figure class="caixaImgProduto centralizar">
                            <img src="images/home/produto06.jpg" alt="Produto">
                        </figure>
                        <div class="caixaSobreProduto formatarTexto">
                            <p>
                                Hamburguer doce
                            </p>
                            <p>
                                Diferencial da casa com sabores inovadores para um sanduiche
                            </p>
                            <p>
                                R$29,99
                            </p>
                        </div>
                        <div class="btnDetalhes">Detalhes</div>
                    </div>

                </div>

                <!-- Rede Sociais -->
                <figure id="caixaRedeSocial">
                    <img src="images/home/iconeFacebook.png" alt="FacebokIcone">
                    <img src="images/home/iconeInstagram.png" alt="InstagramIcone">
                    <img src="images/home/iconeTwitter.png" alt="TwitterIcone">
                </figure>
            </div>
        </div>

    </main>
    
    <?php include_once("footer.php"); ?>
</body>
</html>