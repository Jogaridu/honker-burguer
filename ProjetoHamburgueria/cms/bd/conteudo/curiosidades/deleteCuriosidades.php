<?php
    require_once("../../conexao.php");

    $conexao = conexaoMysql();

    if(isset($_GET['modo'])) {

        if ($_GET['modo'] == "excluir") {

            if(isset($_GET['id'])) {

                $id = $_GET['id'];

                if ($_GET['formulario'] == "montagem") {

                    unlink('../../arquivos/'.$_GET['imagem']);

                    $sql = "DELETE from tblMontagem WHERE tblMontagem.idMontagem = ".$id;

                } else if ($_GET['formulario'] == "origem") {

                    unlink('../../arquivos/'.$_GET['imagem']);

                    $sql = "DELETE from tblOrigemHamburguer WHERE tblOrigemHamburguer.idOrigemHamburguer = ".$id;

                }
                
                if(mysqli_query($conexao, $sql)) {
                    
                    header("location:../../../admConteudoCuriosidades.php");
    
                }
                

            }

        } 

    }

?>