<?php
    
if (isset($_GET['modo'])) {
    if ($_GET['modo'] == "excluir") {

        require_once("../conexao.php");

        $conexao = conexaoMysql();
        

        if (isset($_GET['id'])) {
            
            $id = $_GET['id'];

            $sql = "DELETE FROM tblUsuario WHERE idUsuario=".$id;

            if(mysqli_query($conexao, $sql)) {

                header("location:../../listaUsuario.php");

            }
        }
    }
}

?>