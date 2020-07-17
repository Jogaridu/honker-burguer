<?php 
    require_once("../../conexao.php");
    require_once("../../../modulos/tratamentoImagem.php");
    require_once("../../../modulos/vars.php");
    
    $conexao = conexaoMysql();
    
    if (isset($_GET['modo'])) {

        if (isset($_GET['id'])) {

            $id = $_GET['id'];
            
            
            if ($_GET['modo'] == "atualizar") {

                if ($_GET['formulario'] == "endereco") {

                    $cep = $_POST['txtCep'];
                    $rua = $_POST['txtRua'];
                    $bairro = $_POST['txtBairro'];
                    $numero = $_POST['txtNumero'];
                    $celular = $_POST['txtCelular'];
                    $secaoTitulo = $_POST['sltTitulo'];

                    $sql = "UPDATE tblEndereco set

                    cep = '".$cep."',
                    rua = '".$rua."',
                    bairro = '".$bairro."',
                    numero = '".$numero."',
                    celular = '".$celular."',
                    idNossasLoja = ".$secaoTitulo."
                    
                    WHERE tblEndereco.idEndereco = ".$id;

                } else if ($_GET['formulario'] == "titulo") {
                    
                    $titulo = $_POST['txtTitulo'];

                    if($foto = tratarImagem($_FILES['fleFoto'])) {

                        $sql = "UPDATE tblNossasLoja set
                
                        tituloNossasLoja = '".$titulo."',
                        imagemNossasLoja = '".$foto."'

                        WHERE tblNossasLoja.idNossasLoja = ".$id;

                    } else {

                        $sql = "UPDATE tblNossasLoja set tituloNossasLoja = '".$titulo."' WHERE tblNossasLoja.idNossasLoja = ".$id;

                    } 

                }

                if (mysqli_query($conexao, $sql)) 
                    echo(ITEM_ATUALIZADO_SUCESSO);

            } else if ($_GET['modo'] == "ativarDesativar") {

                $status = $_GET['status'] == "1"? true:false;

                if ($_GET['formulario'] == "endereco") {
                    
                    if ($status)
                        $sql = "UPDATE tblEndereco set ativado = false WHERE tblEndereco.idEndereco = ".$id;

                    else
                        $sql = "UPDATE tblEndereco set ativado = true WHERE tblEndereco.idEndereco = ".$id;

                } else if ($_GET['formulario'] == "titulo") {

                    if ($status)
                        $sql = "UPDATE tblNossasLoja set ativado = false WHERE tblNossasLoja.idNossasLoja = ".$id;

                    else
                        $sql = "UPDATE tblNossasLoja set ativado = true WHERE tblNossasLoja.idNossasLoja = ".$id;
                }

                mysqli_query($conexao, $sql);
                
            }

        } 

    }

?>