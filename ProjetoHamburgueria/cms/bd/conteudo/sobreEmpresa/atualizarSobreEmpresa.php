<?php 
    require_once("../../conexao.php");
    require_once("../../../modulos/tratamentoImagem.php");
    require_once("../../../modulos/vars.php");

    $conexao = conexaoMysql();
    
    if (isset($_GET['modo'])) {

        if (isset($_GET['id'])) {

            $id = $_GET['id'];
            
            if ($_GET['modo'] == "atualizar") {

                if ($_GET['formulario'] == "sobre") {

                    $titulo = $_POST['txtTituloSobre'];
                    $conteudo = $_POST['txtAreaConteudoSobre'];

                    $sql = "UPDATE tblSobreEmpresa set

                    tituloSobreEmpresa = '".$titulo."',
                    conteudoSobreEmpresa = '".$conteudo."'
                    
                    WHERE tblSobreEmpresa.idSobreEmpresa = ".$id;

                } else if ($_GET['formulario'] == "origem") {
                    
                    $titulo = $_POST['txtTituloOrigem'];
                    $conteudo = $_POST['txtAreaConteudoOrigem'];

                    if ($foto = tratarImagem($_FILES['fleFoto'])) {

                        $sql = "UPDATE tblOrigemEmpresa set 
                                
                        tituloOrigemEmpresa = '".$titulo."',
                        imagemOrigemEmpresa = '".$foto."'
                        conteudoOrigemEmpresa = '".$conteudo."' 
                        
                        WHERE tblOrigemEmpresa.idOrigemEmpresa = ".$id;

                    } else {

                        $sql = "UPDATE tblOrigemEmpresa set 
                                
                        tituloOrigemEmpresa = '".$titulo."',
                        conteudoOrigemEmpresa = '".$conteudo."'
                        
                        WHERE tblOrigemEmpresa.idOrigemEmpresa = ".$id;

                    }
                }

            } else if ($_GET['modo'] == "ativarDesativar") {

                $status = $_GET['status'] == "1"? true:false;

                if ($_GET['formulario'] == "sobre") {
                    
                    if ($status)
                        $sql = "UPDATE tblSobreEmpresa set ativado = false WHERE tblSobreEmpresa.idSobreEmpresa = ".$id;

                    else
                        $sql = "UPDATE tblSobreEmpresa set ativado = true WHERE tblSobreEmpresa.idSobreEmpresa = ".$id;

                } else if ($_GET['formulario'] == "origem") {

                    if ($status)
                        $sql = "UPDATE tblOrigemEmpresa set ativado = false WHERE tblOrigemEmpresa.idOrigemEmpresa = ".$id;

                    else
                        $sql = "UPDATE tblOrigemEmpresa set ativado = true WHERE tblOrigemEmpresa.idOrigemEmpresa = ".$id;
                }
                
            }

            if (mysqli_query($conexao, $sql)) 
                echo(ITEM_ATUALIZADO_SUCESSO);
        }
    }
?>