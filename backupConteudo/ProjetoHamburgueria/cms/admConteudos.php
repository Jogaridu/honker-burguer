<?php
    
    require_once("bd/conexao.php");

    $conexao = conexaoMysql();

    require_once("header.php");

?>

<a href="admConteudoNossasLoja.php">
    <div class="btnSelecaoNivelUsuario formatarTexto">
        <div id="caixaUsuario">
            <figure class="imagemMenu">
                <img src="images/usuario.png" alt="Administrar os usuários">
            </figure>
        </div>
        <div class="nomeMenu">
            Nossas Lojas
        </div>
    </div>
</a>

<a href="listaNiveis.php">
    <div class="btnSelecaoNivelUsuario formatarTexto">
        <div id="caixaNivel">
            <figure class="imagemMenu">
                <img src="images/nivel.png" alt="Administrar os usuários">
            </figure>
        </div>
        <div class="nomeMenu">
            Sobre Empresa
        </div>
    </div>
</a>

<a href="listaNiveis.php">
    <div class="btnSelecaoNivelUsuario formatarTexto">
        <div id="caixaNivel">
            <figure class="imagemMenu">
                <img src="images/nivel.png" alt="Administrar os usuários">
            </figure>
        </div>
        <div class="nomeMenu">
            Curiosidades
        </div>
    </div>
</a>

<?php require_once("footer.php") ?>