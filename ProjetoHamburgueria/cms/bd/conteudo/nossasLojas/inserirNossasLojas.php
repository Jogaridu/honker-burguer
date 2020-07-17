<?php

    require_once("../../conexao.php");
    require_once("../../../modulos/tratamentoImagem.php");
    require_once("../../../modulos/vars.php");

    $conexao = conexaoMysql();

    if (isset($_GET['modo'])) {

        if ($_GET['modo'] == "cadastrar") {

            if ($_POST['btnSalvar']) {

                if ($_GET['formulario'] == "endereco") {

                    $cep = $_POST['txtCep'];
                    $rua = $_POST['txtRua'];
                    $bairro = $_POST['txtBairro'];
                    $numero = $_POST['txtNumero'];
                    $celular = $_POST['txtCelular'];
                    $secaoTitulo = $_POST['sltTitulo'];

                    $sql = "INSERT INTO tblEndereco (rua, bairro, numero, celular, cep, idNossasLoja, ativado) 
                    VALUES ('".$rua."', '".$bairro."', '".$numero."', '".$celular."', '".$cep."', '".$secaoTitulo."', true)";

                } else if ($_GET['formulario'] == "titulo") {

                    $titulo = $_POST['txtTitulo'];
                    
                    if ($foto = tratarImagem($_FILES['fleFoto'])) {

                        $sql = "INSERT INTO tblNossasLoja (tituloNossasLoja, imagemNossasLoja, ativado) 
                        VALUES ('".$titulo."', '".$foto."', true)";    

                    } else {

                        $sql = "";

                        echo(IMAGEM_INVALIDA);

                    }
                    
                }
                
                if (mysqli_query($conexao, $sql)) {
                    echo(ITEM_CRIADO_SUCESSO);
                }

                    
                    

            }

        }

    }
?>
