<?php 
    require_once("../conexao.php");

    $conexao = conexaoMysql();

    if ($_GET['modo'] == "cadastrar") {
        
        if (isset($_POST['btnCadastrar'])) {

            $nomeNivel = $_POST['txtNome'];
            $faleConosco = isset($_POST['chkFaleConosco'])? true:"false";
            $admConteudo = isset($_POST['chkAdmConteudo'])? true:"false";
            $admUsuario = isset($_POST['chkAdmUsuario'])? true:"false";

            $sql = "INSERT INTO tblPermissao (nomePermissao, faleConosco, admUsuario, admConteudo)
            VALUES ('".$nomeNivel."', ".$faleConosco.", ".$admConteudo.", ".$admUsuario.")";

            if (mysqli_query($conexao, $sql)) 
                echo("
                    <script>
                        alert('Registro inserido com sucesso');
                        location.href = '../../listaNiveis.php';
                    </script>");
            else
                echo("<script>
                        alert('ERRO ao executar o script');
                        // window.history.back()
                    </script>");
        }
    }
    

?>