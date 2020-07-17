<?php
    require_once("../../conexao.php");

    $conexao = conexaoMysql();

    if(isset($_GET['modo'])) {

        if ($_GET['modo'] == "excluir") {

            if(isset($_GET['id'])) {

                $id = $_GET['id'];

                if ($_GET['formulario'] == "endereco") {

                    $sql = "DELETE from tblEndereco WHERE tblEndereco.idEndereco = ".$id;

                } else if ($_GET['formulario'] == "titulo") {

                    $sql = "DELETE from tblNossasLoja WHERE tblNossasLoja.idNossasLoja = ".$id;

                }

                echo($sql);
                
                if(mysqli_query($conexao, $sql)) {
                    
                    header("location:../../../admConteudoNossasLoja.php");
    
                } else {
                    echo("<script>
                            alert('Impossivel excluir o título, pois há endereços cadastrados');
                            window.history.back()
                        </script>");
                }
                

            }

        } 

    }

?>