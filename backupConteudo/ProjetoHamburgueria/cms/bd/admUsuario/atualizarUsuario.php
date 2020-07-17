<?php

    if (isset($_GET['modo'])) {

        require_once("../conexao.php");
    
        $conexao = conexaoMysql();
    
        $id = $_GET['id'];
        
        if ($_GET['modo'] == "ativarDesativar") {

            $status = $_GET['status'] == "1"? true:false;

            if ($status) 
                $sql = "UPDATE tblUsuario set ativado = false WHERE idUsuario = ".$id;
            else
                $sql = "UPDATE tblUsuario set ativado = true WHERE idUsuario = ".$id;

            mysqli_query($conexao, $sql);
                

        } else if ($_GET['modo'] == "atualizar") {
            // Import da biblioteca conexao
            
    
            if (isset($_POST['btnAtualizar'])) {
    
                $nome = $_POST['txtNome'];
                $usuario = $_POST['txtUsuario'];
                $senha = $_POST['txtSenha'];
                $email = $_POST['txtEmail'];
                $celular = $_POST['txtCelular'];
                $permissao = $_POST['sltNivelUsuario'];
    
                $sql = "UPDATE tblUsuario set
                
                        nomeUsuario = '".$nome."',
                        usuario = '".$usuario."',
                        senha = '".$senha."',
                        email = '".$email."',
                        celular = '".$celular."',
                        idPermissao = '".$permissao."'
                        WHERE idUsuario = ".$id;
    
                if (mysqli_query($conexao, $sql)) 
                    echo("
                        <script>
                            alert('Registro atualizado com sucesso');
                            location.href = '../../listaUsuario.php';
                        </script>");
                else
                    echo("<script>
                            alert('ERRO ao executar o script');
                            // window.history.back()
                        </script>");
            }
        }   
    }
?>