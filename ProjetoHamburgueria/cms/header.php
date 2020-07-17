<?php

require_once("bd/conexao.php");

$conexao = conexaoMysql();

session_start();

if (isset($_SESSION['nomeLogin']) && $_SESSION['nomeLogin'] != "") {

    $usuario = $_SESSION['nomeLogin'];
    $permissao = $_SESSION['nomePermissao'];
    
    $sql = "SELECT * FROM tblPermissao 
            WHERE tblPermissao.nomePermissao = '".$permissao."'";

    $selectPermissoes = mysqli_query($conexao, $sql);

    if ($rsPermissoes = mysqli_fetch_assoc($selectPermissoes)) {

        $faleConoscoBool = $rsPermissoes['faleConosco'];
        $admUsuarioBool = $rsPermissoes['admUsuario'];
        $admConteudoBool = $rsPermissoes['admConteudo'];

        echo('
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
                <script src="js/jquery.form.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
                <script src="js/tratamentoMenu.js"></script>
                <script>
                
                    $(document).ready(function() {

                        validarMenuCompleto([
                            {permissao: "'.$admConteudoBool.'", nome:"ADM. CONTEUDO", imagem: "iconeConteudo.png", endereco: "admConteudos"},
                            {permissao: "'.$faleConoscoBool.'", nome:"FALE CONOSCO", imagem: "iconeFaleConosco.png", endereco: "faleConosco"},
                            {permissao: "'.$admUsuarioBool.'", nome:"ADM. USUÁRIO", imagem: "iconeUsuario.png", endereco: "inicialNivelUsuario"}
                        ]);

                        $("#logout").click(function() {
                            $.ajax({
                                type: "GET",
                                url: "finalizarSessao.php",
                                success: function (dados) {
                                    
                                    location.href = "../lojas.php";
                                    
                                }
                            });
                        });
                    });
                </script>
            </head>
            <body>
            <div id="modal">
                <div id="modalConteudo"></div>
            </div>
            <div id="caixaCentralizaSite">
                <!-- HEADER DO SISTEMAS CMS -->
                <header>
                    <div id="tituloCMS">
                        <h1 class="formatarTexto">Sistema de Gerenciamento do Site</h1>
                    </div>

                    <a href="index.php">
                        <figure id="logoCMS">
                            <img src="images/logoCMS.png" alt="Logo CMS">
                        </figure>
                    </a>
                </header>

                <!-- CONTEUDO PRINCIPAL CMS -->
                <main>
                    <nav>
                        <!-- Lista de itens -->
                        <ul id="menuLista">
                            
                        </ul>

                        <!-- Caixa do usuário -->
                        <div id="caixaUsuarioLogout">
                            <p class="formatarTexto">Bem vindo, <span class="destaque">'.$usuario.'</span></p>
                            <div id="logout" class="formatarTexto">Logout</div>
                        </div>
                    </nav>
            ');
        }

    } else {

    echo("<script>
        alert('Por favor, logue primeiro no sistema para acessar o CMS');
        location.href='../lojas.php';
    </script>");
}


?>

