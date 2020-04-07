<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Honker Burguer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/curiosidade.css">
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
                        <!-- QUEM INVENTOU O HAMBURGUER? -->
                        <h3>Quem inventou o Hamburguer?</h3>
                        <p class="formatarTexto conteudo">
                            Existem relatos sobre a história do hambúrguer, que ele foi inventado nos Estados Unidos, por imigrantes alemães, que embarcaram no porto da Hamburgo rumo aos Estados Unidos. Note a semelhança com o nome do hambúrguer…
                        </p>

                        <p class="formatarTexto conteudo">
                            Mas antes de oficializar a invenção do hambúrguer em 1904, também deveríamos levar em conta que antes disso, surgiram seus ingredientes principais que são o pão e a carne moída, ingredientes inventados antes de sua junção. A invenção da carne moída vem do século XVII, quando tribos nômades da Asia Ocidental, conhecidas com Tártaros, desenvolveram a técnica de moer carne bovina dura e de má qualidade, para torná-la mais digerível. Quanto ao pão, este foi inventado a mais de 12 mil anos, segundo  os historiadores.
                        </p>

                        <!-- QUANDO FOI CRIADO O HAMBURGUER -->
                        <h3>Quando o hamburguer foi inventado?</h3>

                        <p class="formatarTexto conteudo">
                            De acordo com alguns relatos sobre a história do hambúrguer, aparentemente, ele surgiu no final do século XIX, porém foi popularizado através de redes de lanchonetes especializadas no assunto, no início do século XX, nos Estados Unidos.
                        </p>

                        <figure class="imgHistoriaHamburguer">
                            <img src="images/curiosidade/historiaLugar.jpg" alt="Sant Louis">
                        </figure>

                        <p class="formatarTexto conteudo">
                            Em 1904, nos Estados Unidos, na feira mundial de Saint Louis, capital de Missouri, foi apresentada oficialmente esta iguaria ao público americano, esta iguaria que trinta anos depois iria se tornar um verdadeiro simbolo do país: o hambúrguer.
                        </p>

                        <!-- ONDE FOI INVENTADO O HAMBURGUER -->
                        <h3>Onde foi inventado o hamburguer?</h3>

                        <p class="formatarTexto conteudo">
                            Por ter sido apresentado oficialmente na feira mundial de Saint Louis nos Estados Unidos, mesmo que trazido por imigrantes alemães de Hamburgo na Alemanha, quem levou a fama da invenção e todos os créditos, foram os americanos.
                        </p>

                        <p class="formatarTexto conteudo">
                            Foi também nos Estados Unidos, em 1921, que surgiu a primeira franquia de lanchonetes com o nome de White Castle, para comercializar hambúrgueres cozidos a vapor e cebola, por apenas 5 centavos de dólar. Assim por ter um valor bem acessível, logo o hambúrguer se tornou ainda mais popular.
                        </p>

                        <figure class="imgHistoriaHamburguer">
                            <img src="images/curiosidade/white-castle.jpg" alt="White Castle">
                        </figure>
                        
                        <p class="formatarTexto conteudo">
                            As primeiras lanchonetes eram pequenas e com até 2 funcionários que faziam de tudo, entre preparar o hambúrguer e registrar as vendas, porém, 10 anos depois, isso mudou de tal forma que foram criados os drive-ins com grandes estacionamentos, para dar conta dos motoristas famintos, geralmente acompanhados de suas famílias.
                        </p>

                        <!-- POR QUE O HAMBURGUER FOI INVENTADO? -->
                        <h3>Por que o hamburguer foi inventado?</h3>

                        <p class="formatarTexto conteudo">
                            Conforme narra a história do hambúrguer, ele foi criado para suprir uma necessidade da época, onde as pessoas estavam como menos tempo livre para preparar seus alimentos, devido ao grande avanço da industrialização nos Estados Unidos e uma grande demanda de trabalho, com isso os cidadãos americanos tinham muito trabalho e menos tempo para preparar suas refeições, por este motivo houve a necessidade de criar um tipo de comida rápida e fácil de preparar, hoje popularmente conhecida como fast food. Então foi criado o hambúrguer, que na época continha apenas pão e carne moída. Esta invenção deu tão certo, que ela continua presente na vida da maioria das pessoas que costumam comer em lanchonetes de fast food nos dias atuais.
                        </p>
                        
                        <figure class="imgHistoriaHamburguer">
                            <img src="images/curiosidade/historiaTrabalhadores.jpg" alt="Trabalhadores da época">
                        </figure>
                    </div>
                </section>
                
                <!-- MONTAGEM DE NOSSOS HAMBURGUERES -->
                <section class="conteudoCuriosidade ">
                    <h1>Montagem de nossos Hamburgueres</h1>

                    <div id="caixaCarroussel">
                        <div class="nav back">&laquo;</div>

                        <ul id="carroussel">

                            <li class="itensCarroussel">
                                <figure class="imgCarroussel">
                                    <img src="images/curiosidade/montagemIngredientes.jpg" alt="Imagem Carroussel 01">
                                </figure>
                                <div class="conteudoMontagem">
                                    <h3>INGREDIENTES</h3>
                                    <p class="formatarTexto">Segundo nosso chef Jorge, todos os ingredientes são separados e dispostos sobre a mesa para facilitar o trabalho de montagem, todos os ingredientes são reservados em temperatura ambiente antes de iniciar o serviço.</p>
                                </div>
                            </li>

                            <li class="itensCarroussel">
                                <figure class="imgCarroussel">
                                    <img src="images/curiosidade/montagemPasso1.jpg" alt="Imagem Carroussel 02">
                                </figure>
                                <div class="conteudoMontagem">
                                    <h3>PASSO 1</h3>
                                    <p class="formatarTexto">De acordo com o chef Jorge, o mais importante na montagem do hambúrguer é sempre ter a carne sobre o pão para que o suco da carne caia sobre a fatia de pão, lembrando que essa é uma das várias técnicas incríveis existentes de montagem. O queijo deve derreter sobre o hambúrguer e, por isso, é o 2º ingrediente a ser colocado.</p>
                                </div>
                            </li>

                            <li class="itensCarroussel">
                                <figure class="imgCarroussel">
                                    <img src="images/curiosidade/montagemPasso2.jpg" alt="Imagem Carroussel 03">
                                </figure>
                                <div class="conteudoMontagem">
                                    <h3>PASSO 2</h3>
                                    <p class="formatarTexto">E para finalizar e dar crocância: o bacon. Observe que o chef coloca as carnes sempre nas extremidades: na parte de baixo, o hambúrguer e na parte de cima, o bacon.</p>
                                </div>
                            </li>

                            <li class="itensCarroussel">
                                <figure class="imgCarroussel">
                                    <img src="images/curiosidade/montagemPasso3.jpg" alt="Imagem Carroussel 04">
                                </figure>
                                <div class="conteudoMontagem">
                                    <h3>PASSO 3</h3>
                                    <p class="formatarTexto">“Essa sequência irá dar umidade, crocância, estabilidade, sabor e aroma”</p>
                                </div>
                            </li>

                        </ul>
                        
                        <div class="nav next">&raquo;</div>
                    </div>
                </section>

                <!-- NIVEL DE SUA FOME -->
                <section class="conteudoCuriosidade fundoNivelFome">
                    <h1>Qual o nível da sua fome?</h1>

                    <div class="conteudoNivelFome textoNivelAlto">
                        <h3>TRIPLO CHEDDAR BACON</h3>
                        <p class="formatarTexto ">Se você está na correria do dia a dia paulistano e não comeu aquele rango ainda, experimente nosso lanche nível alto. <!-- São três camadas para suprir as suas três refeições do dia em uma única mordida.--></p> 
                    </div>

                    <div class="conteudoNivelFome textoNivelMedio">
                        <h3>HONKER BURGUER DA CASA</h3>
                        <p class="formatarTexto ">Prato feito não tá com nada, pede o nível médio</p>
                    </div>

                    <div class="conteudoNivelFome">
                        <h3>HAMBURGUER BASIC HONKER</h3>
                        <p class="formatarTexto ">Tá voltando do trampo e a refeição não satisfez? Coma o nível baixo e mate sua fome.</p>
                    </div>
                </section>

                <!-- VALORES CALORICOS DO NIVEL DA SUA FOME -->
                <section class="conteudoCuriosidade">
                    <h1>Valores Calóricos (EM PORCENTAGEM)</h1>
                    <div id="caixaGraficoCalorico">
                        <!-- NIVEL ALTO -->
                        <div class="valorCalorico">
                            <h3>Nível Alto</h3>
                            <figure class="imgNivelFome centralizar">
                                <img src="images/curiosidade/nivelFomeAlto.jfif" alt="HAMBURGUER NIVEL ALTO CALORICO">
                            </figure>
                            <canvas id="graficoNivelAlto"></canvas>
                        </div>

                        <!-- NIVEL MEDIO -->
                        <div class="valorCalorico">
                            <h3>Nível Médio</h3>
                            <figure class="imgNivelFome centralizar">
                                <img src="images/curiosidade/nivelFomeMedia.jfif" alt="HAMBURGUER NIVEL MEDIO CALORICO">
                            </figure>
                            <canvas id="graficoNivelMedio"></canvas>
                        </div>

                        <!-- NIVEL BAIXO -->
                        <div class="valorCalorico">
                            <h3>Nível Baixo</h3>
                            <figure class="imgNivelFome centralizar">
                                <img src="images/curiosidade/nivelFomeBaixo.jfif" alt="HAMBURGUER NIVEL BAIXO CALORICO">
                            </figure>
                            <canvas id="graficoNivelBaixo"></canvas>
                        </div>
                    </div>
                </section>

                <!-- MENU NO DESKTOP -->
                <ul class="menuCuriosidade">
                    <li class="formatarTexto selecionado">INICIO</li>
                    <li class="formatarTexto">ORIGEM</li>
                    <li class="formatarTexto">MONTAGEM</li>
                    <li class="formatarTexto">NÍVEL DE FOME</li>
                    <li class="formatarTexto">VALOR CALORICO</li>
                </ul>
            </div>
            
            <!-- Menu mobile -->
            <ul class="menuCuriosidadeMobile">
                <li class="formatarTexto">MONTAGEM</li>
                <li class="formatarTexto">NÍVEL DE FOME</li>
                <li class="formatarTexto">VALOR CALORICO</li>
            </ul>
        </div>
    </div>

    <?php include_once("footer.php"); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.min.js"></script>
    <script src="scripts/jquery-1.11.3.min.js"></script>
    <script src="scripts/curiosidades.js"></script>
    <script src="scripts/mobile.js"></script>
</body>
</html>