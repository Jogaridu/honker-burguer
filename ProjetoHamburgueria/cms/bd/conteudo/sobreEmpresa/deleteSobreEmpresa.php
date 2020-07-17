<?php
    require_once("../../conexao.php");

    $conexao = conexaoMysql();

    if(isset($_GET['modo'])) {

        if ($_GET['modo'] == "excluir") {

            if(isset($_GET['id'])) {

                $id = $_GET['id'];

                if ($_GET['formulario'] == "sobre") {

                    $sql = "DELETE from tblSobreEmpresa WHERE tblSobreEmpresa.idSobreEmpresa = ".$id;

                } else if ($_GET['formulario'] == "origem") {

                    unlink('../../arquivos/'.$_GET['imagem']);

                    $sql = "DELETE from tblOrigemEmpresa WHERE tblOrigemEmpresa.idOrigemEmpresa = ".$id;

                }
                
                if(mysqli_query($conexao, $sql)) {
                    
                    header("location:../../../admConteudoSobreEmpresa.php");
    
                }
                

            }

        } 

    }

?>