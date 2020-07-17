<?php

    if (isset($_GET['modo'])) {

        require_once("../conexao.php");
        require_once("../../modulos/vars.php");
    
        $conexao = conexaoMysql();
    
        $id = $_GET['id'];
        
        if ($_GET['modo'] == "ativarDesativar") {

            $status = $_GET['status'] == "1"? true:false;

            if ($status) 
                $sql = "UPDATE tblPermissao set ativado = false WHERE idPermissao = ".$id;
            else
                $sql = "UPDATE tblPermissao set ativado = true WHERE idPermissao = ".$id;

            mysqli_query($conexao, $sql);
                

        } else if ($_GET['modo'] == "atualizar") {
    
            if (isset($_POST['btnAtualizar'])) {
    
                $nomeNivel = $_POST['txtNome'];
                $faleConosco = isset($_POST['chkFaleConosco'])? true:"false";
                $admConteudo = isset($_POST['chkAdmConteudo'])? true:"false";
                $admUsuario = isset($_POST['chkAdmUsuario'])? true:"false";
                
                $sql = "UPDATE tblPermissao set
                
                        nomePermissao = '".$nomeNivel."',
                        faleConosco = ".$faleConosco.",
                        admUsuario = ".$admConteudo.",
                        admConteudo = ".$admUsuario."
                        
                        WHERE idPermissao = ".$id;
                
                if (mysqli_query($conexao, $sql)) 
                    echo(ITEM_ATUALIZADO_SUCESSO);
                
            }
        }   
    }
?>