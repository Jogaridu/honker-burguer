<?php

    require_once("../../conexao.php");

    $conexao = conexaoMysql();

    if (isset($_GET['modo'])) {

        if ($_GET['modo'] == "cadastrar") {

            if ($_POST['btnSalvar']) {

                if ($_GET['formulario'] == "endereco") {
                    $cep = $_POST['txtCep'];
                    $rua = $_POST['txtRua'];
                    $bairro = $_POST['txtBairro'];
                    $numero = $_POST['txtNumero'];
                    $celular = $_POST['txtCelular'];
                    $secaoTitulo = $_POST['sltTitulo'];

                    $sql = "INSERT INTO tblEndereco (rua, bairro, numero, celular, cep, idNossasLoja, ativado) 
                    VALUES ('".$rua."', '".$bairro."', '".$numero."', '".$celular."', '".$cep."', '".$secaoTitulo."', true)";

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
        
                                    $sql = "INSERT INTO tblNossasLoja (tituloNossasLoja, imagemNossasLoja, ativado) 
                                    VALUES ('".$titulo."', '".$foto."', true)";

                                }
        
                            }
        
        
                        } else {
                            echo("Não é permitido arquivos com tamanho maior do que 2MB!");
                        }
        
                    } else {
                        echo("Extensão de arquivo selecionado não é permitido no sistema!");
                    }

                }
                
                if (mysqli_query($conexao, $sql)) 
                    echo("
                        <script>
                            alert('Registro inserido com sucesso');
                            location.href = '../../../admConteudoNossasLoja.php';
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
