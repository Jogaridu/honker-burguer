<?=
'
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Honker Burguer</title>
</head>
<body>
<div id="caixaCentralizaSite">
    <!-- HEADER DO SISTEMAS CMS -->
    <header>
        <div id="tituloCMS">
            <h1 class="formatarTexto"><span class="destaque">CSM</span> - Sistema de Gerenciamento do Site</h1>
        </div>
        <figure id="logoCMS">
            <img src="images/logoCMS.png" alt="Logo CMS">
        </figure>
    </header>

    <!-- CONTEUDO PRINCIPAL CMS -->
    <main>
        <nav>
            <!-- Lista de itens -->
            <ul id="menuLista">
                <li class="itemMenuLista">
                    <a href="">
                        <figure class="imgIconeMenu">
                            <img src="images/logoCMS.png" alt="Administrar o conteúdo">
                        </figure>
                        <figcaption>
                            ADM. CONTEUDO
                        </figcaption>
                    </a>
                </li>
                <li class="itemMenuLista">
                    <a href="">
                        <figure class="imgIconeMenu">
                            <img src="images/logoCMS.png" alt="Fale conosco">
                        </figure>
                        <figcaption>
                            FALE CONOSCO
                        </figcaption>
                    </a>
                </li>
                <li class="itemMenuLista">
                    <a href="">
                        <figure class="imgIconeMenu">
                            <img src="images/logoCMS.png" alt="Administrar os usuários">
                        </figure>
                        <figcaption>
                            ADM. usuário
                        </figcaption>
                    </a>
                </li>
            </ul>

            <!-- Caixa do usuário -->
            <div id="caixaUsuarioLogout">
                <p class="formatarTexto">Bem vindo, <span class="destaque">[xxxx xxx].</span></p>
                <p id="logout">Logout</p>
            </div>
        </nav>
'
?>