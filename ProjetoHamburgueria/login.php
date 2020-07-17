<?php

require_once('bd/conexao.php');
require_once('cms/modulos/vars.php');

$conexao = conexaoMysql();

if(isset($_POST['btnOk'])) {

    $sql = "SELECT tblUsuario.usuario, tblUsuario.senha, tblPermissao.nomePermissao
    FROM tblUsuario, tblPermissao 
    WHERE tblUsuario.usuario = '".$_POST['txtLogin']."' AND tblUsuario.senha = '".$_POST['txtSenha']."' 
    AND  tblUsuario.ativado = 1 AND tblPermissao.idPermissao = tblUsuario.idPermissao AND tblPermissao.ativado = 1";
    
    $selectUsuarios = mysqli_query($conexao, $sql);

    if ($rsUsuarios = mysqli_fetch_assoc($selectUsuarios)) {

            session_start();
            
            $_SESSION['nomeLogin'] = $rsUsuarios['usuario'];
            $_SESSION['nomePermissao'] = $rsUsuarios['nomePermissao'];
        
            echo("<script>
                    location.href = 'cms/index.php';
                </script>");
            
    }  else {

            echo(ERRO_LOGIN_SENHA);

        }

    } 

?>