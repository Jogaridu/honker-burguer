<?php 
    require_once("../../conexao.php");

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

                    if($_FILES['fleFoto']['size'] > 0 && $_FILES['fleFoto']['type'] != "") {

                        $diretorioArquivo = "../../arquivos/";
        
                        $arquivoSize = round($_FILES['fleFoto']['size']/1024);
        
                        $arquivosPermitidos = array("image/jpeg", "image/jpg", "image/png");
        
                        $arquivoType = $_FILES['fleFoto']['type'];
        
                        if (in_array($arquivoType, $arquivosPermitidos)) {

                            if ($arquivoSize <= 2000) {
        
                                $nomeArquivo = pathinfo($_FILES['fleFoto']['name'], PATHINFO_FILENAME);
        
                                $extensaoArquivo = pathinfo($_FILES['fleFoto']['name'], PATHINFO_EXTENSION);
        
                                $nomeArquivoCripty = md5($nomeArquivo . uniqid(time()));
        
                                $foto = $nomeArquivoCripty . "." . $extensaoArquivo;
        
                                $arquivoTemp = $_FILES['fleFoto']['tmp_name'];
        
                                if(move_uploaded_file($arquivoTemp, $diretorioArquivo.$foto)) {
        
                                    $sql = "UPDATE tblNossasLoja set
                    
                                            tituloNossasLoja = '".$titulo."',
                                            imagemNossasLoja = '".$foto."'

                                            WHERE tblNossasLoja.idNossasLoja = ".$id;

                                }
        
                            }
        
        
                        } else {
                            echo("Não é permitido arquivos com tamanho maior do que 2MB!");

                        }
        
                    } else {

                        $sql = "UPDATE tblNossasLoja set tituloNossasLoja = '".$titulo."' WHERE tblNossasLoja.idNossasLoja = ".$id;

                    }
                }

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
                
            }


            if (mysqli_query($conexao, $sql)) 
                    echo("
                        <script>
                            alert('Registro atualizado com sucesso');
                            location.href = '../../../admConteudoNossasLoja.php';
                        </script>");
        }
    }
?>