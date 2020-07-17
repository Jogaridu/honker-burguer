<?php

    require_once("../../conexao.php");
    require_once("../../../modulos/tratamentoImagem.php");
    require_once("../../../modulos/vars.php");

    $conexao = conexaoMysql();

    if (isset($_GET['modo'])) {

        if ($_GET['modo'] == "cadastrar") {

            if ($_POST['btnSalvar']) {

                if ($_GET['formulario'] == "sobre") {

                    $titulo = $_POST['txtTituloSobre'];
                    $conteudo = $_POST['txtAreaConteudoSobre'];

                    $sql = "INSERT INTO tblSobreEmpresa (tituloSobreEmpresa, conteudoSobreEmpresa, ativado) 
                    VALUES ('".$titulo."', '".$conteudo."', true)";

                } else if ($_GET['formulario'] == "origem") {

                    $titulo = $_POST['txtTituloOrigem'];
                    $conteudo = $_POST['txtAreaConteudoOrigem'];

                    if($foto = tratarImagem($_FILES['fleFoto'])) {

                        $sql = "INSERT INTO tblOrigemEmpresa (tituloOrigemEmpresa, conteudoOrigemEmpresa, imagemOrigemEmpresa, ativado) 
                        VALUES ('".$titulo."', '".$conteudo."', '".$foto."', true)";

                    } else {

                        $sql = "";

                        echo(IMAGEM_INVALIDA);

                    }
                }
                
                if (mysqli_query($conexao, $sql)) 
                    echo(ITEM_CRIADO_SUCESSO);

            }

        }

    }
?>
