<?php
    
if (isset($_GET['modo'])) {
    if ($_GET['modo'] == "excluir") {

        require_once("../conexao.php");

        $conexao = conexaoMysql();
        
        if (isset($_GET['id'])) {
            
            $id = $_GET['id'];

            $sql = "DELETE FROM tblPermissao WHERE idPermissao=".$id;


            if(mysqli_query($conexao, $sql)) {

                header("location:../../listaNiveis.php");

            } else {
                
                echo("<script>
                        alert('Não é possível deletar este nível, pois um ou mais usuários estão atrelados a ele!');
                        window.history.back()
                    </script>");

            }
        }
    }
}

?>