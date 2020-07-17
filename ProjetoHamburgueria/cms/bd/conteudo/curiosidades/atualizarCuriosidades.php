<?php 
    require_once("../../conexao.php");
    require_once("../../../modulos/tratamentoImagem.php");
    require_once("../../../modulos/vars.php");

    $conexao = conexaoMysql();
    
    if (isset($_GET['modo'])) {

        if (isset($_GET['id'])) {

            $id = $_GET['id'];
            
            if ($_GET['modo'] == "atualizar") {

                if ($_GET['formulario'] == "montagem") {

                    $titulo = $_POST['txtTituloMontagem'];
                    $conteudo = $_POST['txtAreaConteudoMontagem'];

                    if($foto = tratarImagem($_FILES['fleFoto'])){

                        $sql = "UPDATE tblMontagem set

                        tituloMontagem = '".$titulo."',
                        imagemMontagem = '".$foto."',
                        conteudoMontagem = '".$conteudo."'
                        
                        WHERE tblMontagem.idMontagem = ".$id;

                    } else {

                        $sql = "UPDATE tblMontagem set

                        tituloMontagem = '".$titulo."',
                        conteudoMontagem = '".$conteudo."'
                        
                        WHERE tblMontagem.idMontagem = ".$id;

                    }

                } else if ($_GET['formulario'] == "origem") {
                    
                    $titulo = $_POST['txtTituloOrigem'];
                    $conteudo = $_POST['txtAreaConteudoOrigem'];
                    echo(tratarImagem($_FILES['fleFoto']));
                    if($foto = tratarImagem($_FILES['fleFoto'])){

                        $sql = "UPDATE tblOrigemHamburguer set 
                                
                        tituloOrigemHamburguer = '".$titulo."',
                        conteudoOrigemHamburguer = '".$conteudo."', 
                        imagemOrigemHamburguer = '".$foto."'

                        WHERE tblOrigemHamburguer.idOrigemHamburguer = ".$id;

                    } else {

                        $sql = "UPDATE tblOrigemHamburguer set 
                                
                        tituloOrigemHamburguer = '".$titulo."',
                        conteudoOrigemHamburguer = '".$conteudo."' 
                        
                        WHERE tblOrigemHamburguer.idOrigemHamburguer = ".$id;

                    }
                }

            } else if ($_GET['modo'] == "ativarDesativar") {

                $status = $_GET['status'] == "1"? true:false;

                if ($_GET['formulario'] == "montagem") {
                    
                    if ($status)
                        $sql = "UPDATE tblMontagem set ativado = false WHERE tblMontagem.idMontagem = ".$id;

                    else
                        $sql = "UPDATE tblMontagem set ativado = true WHERE tblMontagem.idMontagem = ".$id;

                } else if ($_GET['formulario'] == "origem") {

                    if ($status)
                        $sql = "UPDATE tblOrigemHamburguer set ativado = false WHERE tblOrigemHamburguer.idOrigemHamburguer = ".$id;

                    else
                        $sql = "UPDATE tblOrigemHamburguer set ativado = true WHERE tblOrigemHamburguer.idOrigemHamburguer = ".$id;
                }
                
            }

            // if (mysqli_query($conexao, $sql)) 
            //     echo(ITEM_ATUALIZADO_SUCESSO);

        }
    }
?>