<?=
'
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/lupa.png">
    <title>Honker Burguer</title>
    <script src="js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
</head>
<body>
<div id="modal">
    <div id="modalConteudo"></div>
</div>
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
                    <a href="admConteudos.php">
                        <figure class="imgIconeMenu">
                            <img src="images/iconeConteudo.png" alt="Administrar o conteúdo">
                            <figcaption>
                                ADM. CONTEUDO
                            </figcaption>
                        </figure>
                    </a>
                </li>
                <li class="itemMenuLista">
                    <a href="faleConosco.php">
                        <figure class="imgIconeMenu">
                            <img src="images/iconeFaleConosco.png" alt="Fale conosco">
                            <figcaption>
                                FALE CONOSCO
                            </figcaption>
                        </figure>
                    </a>
                </li>
                <li class="itemMenuLista">
                    <a href="inicialNivelUsuario.php">
                        <figure class="imgIconeMenu">
                            <img src="images/iconeUsuario.png" alt="Administrar os usuários">
                            <figcaption>
                                ADM. USUÁRIO
                            </figcaption>
                        </figure>
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