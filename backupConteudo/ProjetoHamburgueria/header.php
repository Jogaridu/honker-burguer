<?php 

    $sql = "SELECT * FROM tblUsuarios";

    $selectUsuarios = mysqli_query($conexao, $sql);


echo('<header>
            <div id="caixaCentralizaHeaderFooter">
                <!-- MENU DESKTOP -->
                <div id="menu" class="centralizar">
                    <figure id="logoMenu">
                        <a href="index.php">
                            <img src="images/logoEmpresa.png" alt="logoEmpresa">
                        </a>
                    </figure>

                    <nav>
                        <ul class="listaMenu">

                            <li class="itemListaMenu formatarTexto">
                                <a href="curiosidades.php">
                                    <div class="item">Curiosidades</div>
                                </a>
                            </li>

                            <li class="itemListaMenu formatarTexto">
                                <a href="produtoMes.php">
                                    <div class="item">Destaque</div>
                                </a>
                            </li>

                            <li class="itemListaMenu formatarTexto">
                                <a href="promocoes.php">
                                    <div class="item">Promoções</div>
                                </a>
                            </li>

                            <li class="itemListaMenu formatarTexto">
                                <a href="lojas.php">
                                    <div class="item">Lojas</div>
                                </a>
                            </li>

                            <li class="itemListaMenu formatarTexto">
                                <a href="sobreEmpresa.php">
                                    <div class="item">Sobre</div>
                                </a>
                            </li>

                            <li class="itemListaMenu formatarTexto">
                                <a href="contatos.php">
                                    <div class="item">Contatos</div>
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <div id="formLogin">
                        <form name="loginUsuarioMenu" action="header.php">
                            <label id="login" class="formatarTexto">
                                Usuário <input type="text" name="txtLogin" maxlength="20">
                            </label>

                            <label id="senha" class="formatarTexto">
                                Senha <input type="password" name="txtSenha">
                            </label>

                            <div id="btnSubmit">
                                <input type="submit" value="Ok" name="btnOk">
                            </div>
                        </form>
                    </div>
                </div>
                
                <!-- MENU MOBILE -->
                <nav id="containerMenuMobile">
                    <div id="iconeMenu">
                    
                    </div>
                    <div id="menuMobile">
                        <ul class="listaMenu">
                            <li class="itemListaMenu formatarTexto">
                                <a href="index.php">
                                    <div class="item">Home</div>
                                </a>
                            </li>
                            <li class="itemListaMenu formatarTexto">
                                <a href="curiosidades.php">
                                    <div class="item">Curiosidades</div>
                                </a>
                            </li>

                            <li class="itemListaMenu formatarTexto">
                                <a href="produtoMes.php">
                                    <div class="item">Destaque</div>
                                </a>
                            </li>

                            <li class="itemListaMenu formatarTexto">
                                <a href="promocoes.php">
                                    <div class="item">Promoções</div>
                                </a>
                            </li>

                            <li class="itemListaMenu formatarTexto">
                                <a href="lojas.php">
                                    <div class="item">Lojas</div>
                                </a>
                            </li>

                            <li class="itemListaMenu formatarTexto">
                                <a href="sobreEmpresa.php">
                                    <div class="item">Sobre</div>
                                </a>
                            </li>

                            <li class="itemListaMenu formatarTexto">
                                <a href="contatos.php">
                                    <div class="item">Contatos</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                
                <figure id="logoMenuMobile">
                    <img src="images/logoEmpresa.png" alt="LOGO DA EMPRESA">
                </figure>
            </div>
        </header>');
?>