<?php

    require_once("../../conexao.php");
    require_once("../../../modulos/tratamentoImagem.php");
    require_once("../../../modulos/vars.php");

    $conexao = conexaoMysql();

    if (isset($_GET['modo'])) {

        if ($_GET['modo'] == "cadastrar") {

            if ($_POST['btnSalvar']) {

                if ($_GET['formulario'] == "montagem") {

                    $titulo = $_POST['txtTituloMontagem'];
                    $conteudo = $_POST['txtAreaConteudoMontagem'];
                    
                    if ($foto = tratarImagem($_FILES['fleFoto'])) {

                        $sql = "INSERT INTO tblMontagem (tituloMontagem, conteudoMontagem, imagemMontagem, ativado) 
                        VALUES ('".$titulo."', '".$conteudo."', '".$foto."', true)";

                    } else {

                        $sql = "";

                        echo(IMAGEM_INVALIDA);
                        
                    }

                    

                } else if ($_GET['formulario'] == "origem") {

                    $titulo = $_POST['txtTituloOrigem'];
                    $conteudo = $_POST['txtAreaConteudoOrigem'];
                    $foto = tratarImagem($_FILES['fleFoto']);

                    $sql = "INSERT INTO tblOrigemHamburguer (tituloOrigemHamburguer, conteudoOrigemHamburguer, imagemOrigemHamburguer, ativado) 
                    VALUES ('".$titulo."', '".$conteudo."', '".$foto."', true)";
                }
                
                if (mysqli_query($conexao, $sql)) {

                    echo(ITEM_CRIADO_SUCESSO);
                }

            }

        }

    }
?>
