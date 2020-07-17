<?php 
    require_once("../conexao.php");
    require_once("../../modulos/vars.php");

    $conexao = conexaoMysql();
    // 
    if ($_GET['modo'] == "cadastrar") {
        
        if (isset($_POST['btnCadastrar'])) {

            $nome = $_POST['txtNome'];
            $usuario = $_POST['txtUsuario'];
            $senha = $_POST['txtSenha'];
            $email = $_POST['txtEmail'];
            $celular = $_POST['txtCelular'];
            $permissao = $_POST['sltNivelUsuario'];

            $sql = "INSERT INTO tblUsuario (nomeUsuario, usuario, senha, email, celular, idPermissao, ativado)
            VALUES ('".$nome."', '".$usuario."', '".$senha."', '".$email."', '".$celular."', '".$permissao."', true)";

            if (mysqli_query($conexao, $sql)) 
                echo(ITEM_CRIADO_SUCESSO);
        }
    }
    

?>