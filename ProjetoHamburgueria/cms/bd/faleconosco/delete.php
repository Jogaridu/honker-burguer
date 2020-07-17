<?php
    
if (isset($_GET['modo'])) {
    if ($_GET['modo'] == "excluir") {

        require_once("../conexao.php");

        $conexao = conexaoMysql();

        if (isset($_GET['id'])) {

            $id = $_GET['id'];

            $sql = "DELETE from tblContatosSite WHERE idContatoSite=".$id;

            if(mysqli_query($conexao, $sql)) {

                header("location:../../faleConosco.php");

            }
        }
    }
}

?>