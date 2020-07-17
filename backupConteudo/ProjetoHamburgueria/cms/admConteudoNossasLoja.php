<?php
    
    require_once("bd/conexao.php");

    $conexao = conexaoMysql();

    require_once("header.php");

    $actionEndereco = "bd/conteudo/nossasLojas/inserirNossasLojas.php?modo=cadastrar&formulario=endereco";
    $actionTitulo = "bd/conteudo/nossasLojas/inserirNossasLojas.php?modo=cadastrar&formulario=titulo";
    $imagemPadrao = "images/imagemNaoEncontrada.png";
    $idSecaoTitulo = 0;

    if (isset($_GET['modo'])) {

        if($_GET['modo'] == "editar") {

            if(isset($_GET['id'])) {

                $id = $_GET['id'];
                
                if ($_GET['formulario'] == "endereco") {

                    $sql = "SELECT tblEndereco.*, tblNossasLoja.idNossasLoja, tblNossasLoja.tituloNossasLoja 
                            FROM tblEndereco, tblNossasLoja
                            WHERE tblEndereco.idNossasLoja = tblNossasLoja.idNossasLoja and tblEndereco.idEndereco = ".$id;

                    $selectEnderecos = mysqli_query($conexao, $sql);

                    if($rsEndereco = mysqli_fetch_assoc($selectEnderecos)) {
                        $cep = $rsEndereco['cep'];
                        $rua = $rsEndereco['rua'];
                        $bairro = $rsEndereco['bairro'];
                        $numero = $rsEndereco['numero'];
                        $celular = $rsEndereco['celular'];
                        $idSecaoTitulo = $rsEndereco['idNossasLoja'];
                        $secaoTitulo = $rsEndereco['tituloNossasLoja'];
                        
                        $actionEndereco = "bd/conteudo/nossasLojas/atualizarNossasLojas.php?modo=atualizar&formulario=endereco&id=".$id;

                    }

                } else if ($_GET['formulario'] == "titulo") {

                    $sql = "SELECT * FROM tblNossasLoja WHERE tblNossasLoja.idNossasLoja = ".$id;

                    $selectTitulos = mysqli_query($conexao, $sql);

                    if($rsTitulos = mysqli_fetch_assoc($selectTitulos)) {
                        $titulo = $rsTitulos['tituloNossasLoja'];
                        $imagem = $rsTitulos['imagemNossasLoja'];

                        $actionTitulo = "bd/conteudo/nossasLojas/atualizarNossasLojas.php?modo=atualizar&formulario=titulo&id=".$id;
                        $imagemPadrao = "bd/arquivos/".$imagem;
                        
                    }
                }

            }

        }

    }

?>
<!-- <script src="js/mascaras.js"></script> -->
<script>

    $(document).ready(function () {

        // Evento change na input file
        $("#imagem").change(function () {

            // Resgatando informações do arquivo selecionado pelo usuário (Nome, tamanho, tipo do arquivo)
            const file = $(this)[0].files[0];
            const fileReader = new FileReader();

            fileReader.onloadend = function () {
                // Colocando no src da IMG o que foi lido da imagem
                $("#imgEscolhidaUsuario img").attr("src", fileReader.result);

            }
            
            // Quando o arquivo carregado, todo o conteudo é jogado no fileReader.result
            fileReader.readAsDataURL(file);

        });

    });

    function ativarDesativarNossasLojas(elemento, id, status, tipoFormulario) {

        const atualizarStatus = status == "1"? "0":"1";
        elemento.setAttribute("onclick", `ativarDesativarNossasLojas(this, ${id}, ${atualizarStatus}, '${tipoFormulario}')`);

        $.ajax({
            type: "GET",
            url: "bd/conteudo/nossasLojas/atualizarNossasLojas.php",
            data: {
                modo: "ativarDesativar",
                id: id,
                status: status,
                formulario: tipoFormulario
            }
        });
    }

</script>

<form action="<?=$actionTitulo?>" method="post" class="formularioConteudos" enctype="multipart/form-data">
    <h2>Formulário de Título</h2>

    <!-- -=-=TITULO=-=- -->
    <label for="titulo">
        Titulo: <input type="text" name="txtTitulo" id="titulo" required value="<?=@$titulo?>">
    </label>

    <!-- -=-=IMAGEM=-=- -->
    <label for="imagem">
        Imagem: <input type="file" name="fleFoto" id="imagem" accept="image/jpeg, image/jpg, image/png">
    </label>

    <figure id="imgEscolhidaUsuario">
        <img src="<?=$imagemPadrao?>" alt="Imagem não foi escolhida pelo usuário">
    </figure>
    
    <!-- -=-=BOTÃO SUBMIT=-=- -->
    <input type="submit" name="btnSalvar" value="Enviar">
</form>

<form action="<?=$actionEndereco?>" method="post" class="formularioConteudos">
    <h2>Formulário de Endereços</h2>
    <!-- -=-=CEP=-=- -->
    <label for="cep">
        Cep: <input type="text" name="txtCep" id="cep" maxlength="9" required value="<?=@$cep?>">
    </label>

    <!-- -=-=RUA=-=- -->
    <label for="rua">
        Rua: <input type="text" name="txtRua" id="rua" maxlength="100" required value="<?=@$rua?>">
    </label>

    <!-- -=-=BAIRRO=-=- -->
    <label for="bairro">
        Bairro: <input type="text" name="txtBairro" id="bairro" maxlength="100" required value="<?=@$bairro?>">
    </label>

    <!-- -=-=NUMERO=-=- -->
    <label for="numero">
        Numero: <input type="text" name="txtNumero" id="numero" maxlength="4" required value="<?=@$numero?>">
    </label>

    <!-- -=-=CELULAR=-=- -->
    <label for="celular">
        Celular: <input type="text" name="txtCelular" id="celular" maxlength="15" required value="<?=@$celular?>">
    </label>

    <!-- -=-=SECAO=-=- -->
    <label for="tituloSecao">
        Seção: 
        <select name="sltTitulo" id="tituloSecao">

            <?php 
                if (isset($_GET['modo'])) {

                    if ($_GET['modo'] == "editar") {

                        if($_GET['formulario'] == "endereco") {
            
            ?>

                        <option value="<?=$idSecaoTitulo?>"><?=$secaoTitulo?></option>

            <?php
                        }
                    }

                } 
            

                $sql = "SELECT tblNossasLoja.idNossasLoja, tblNossasLoja.tituloNossasLoja 
                        FROM tblNossasLoja
                        WHERE tblNossasLoja.idNossasLoja <>".$idSecaoTitulo;

                echo($sql);
                $selectTitulos = mysqli_query($conexao, $sql);

                while ($rsTitulos = mysqli_fetch_assoc($selectTitulos)) {
            ?>      

                    <option value="<?=$rsTitulos['idNossasLoja']?>"><?=$rsTitulos['tituloNossasLoja']?></option>

            <?php } ?>
        </select>
    </label>

    <input type="submit" name="btnSalvar" value="Salvar">
</form>

<div id="caixaMostrandoSecao">
    <h2>CONTEUDOS CADASTRADOS</h2>

    <!-- TABELA DE CONTEUDOS DE ENDERECO -->
    <div class="tituloSecao formatarTexto"> Endereços cadastrados </div>
    <table class="tabelaSecao formatarTexto">
        
        <tr>
            <td>CEP</td>
            <td>RUA</td>
            <td>BAIRRO</td>
            <td>NUMERO</td>
            <td>CELULAR</td>
            <td>SEÇÃO</td>
            <td>ATIVAR/DESATIVAR</td>
            <td>AÇÕES</td>
        </tr>

        <?php 
        
        $sql = "SELECT tblEndereco.* , tblNossasLoja.tituloNossasLoja
        FROM tblEndereco, tblNossasLoja
        WHERE tblEndereco.idNossasLoja = tblNossasLoja.idNossasLoja";

        $selectEnderecos = mysqli_query($conexao, $sql);

        while($rsEndereco = mysqli_fetch_assoc($selectEnderecos)) {

        ?>
        <tr>
            <td><?=$rsEndereco['cep']?></td>
            <td><?=$rsEndereco['rua']?></td>
            <td><?=$rsEndereco['bairro']?></td>
            <td><?=$rsEndereco['numero']?></td>
            <td><?=$rsEndereco['celular']?></td>
            <td><?=$rsEndereco['tituloNossasLoja']?></td>
            <td>
                <div class="btnAtivarDesativar">
                    <input type="checkbox" onclick="ativarDesativarNossasLojas(this, <?=$rsEndereco['idEndereco']?>, <?=$rsEndereco['ativado']?>, 'endereco')" <?php if($rsEndereco['ativado']) echo("checked")?>>
                </div>
            </td>
            <td>
                <a href="admConteudoNossasLoja.php?modo=editar&formulario=endereco&id=<?=$rsEndereco['idEndereco']?>">
                    <figure class="caixaAcao">
                        <img src="images/editar.png" alt="Botão de ação visualizar" title="Editar">
                    </figure>
                </a>

                <a onclick="return confirm('Deseja realmente excluir o registro?')" 
                href="bd/conteudo/nossasLojas/deleteNossasLojas.php?modo=excluir&formulario=endereco&id=<?=$rsEndereco['idEndereco']?>">
                    <figure class="caixaAcao">
                        <img src="images/delete.png" alt="Botão de ação excluir" title="Excluir">
                    </figure>
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <!-- TABELA DE CONTEUDOS DE NOME DE SECAO -->
    <div class="tituloSecao formatarTexto"> Titulo da seção cadastrado</div>
    <table class="tabelaSecao formatarTexto">
        
        <tr>
            <td>TITULO</td>
            <td>IMAGEM</td>
            <td>ATIVAR/DESATIVAR</td>
            <td>AÇÕES</td>
        </tr>

        <?php 
        
            $sql = "SELECT * from tblNossasLoja";

            $selectTitulos = mysqli_query($conexao, $sql);

            while($rsTitulos = mysqli_fetch_assoc($selectTitulos)) {
        ?>
        <tr>
            <td><?=$rsTitulos['tituloNossasLoja']?></td>
            <td>
                <figure class="conteudoImagem">
                    <img src="bd/arquivos/<?=$rsTitulos['imagemNossasLoja']?>" alt="TESTE">
                </figure>
            </td>

            <td>
                <div class="btnAtivarDesativar">
                    <input type="checkbox" onclick="ativarDesativarNossasLojas(this, <?=$rsTitulos['idNossasLoja']?>, <?=$rsTitulos['ativado']?>, 'titulo')" <?php if($rsTitulos['ativado']) echo("checked")?>>
                </div>
            </td>
            
            <td>
                <a href="admConteudoNossasLoja.php?modo=editar&formulario=titulo&id=<?=$rsTitulos['idNossasLoja']?>">
                    <figure class="caixaAcao">
                        <img src="images/editar.png" alt="Botão de ação visualizar" title="Editar">
                    </figure>
                </a>
                <a onclick="return confirm('Deseja realmente excluir o registro?')" 
                href="bd/conteudo/nossasLojas/deleteNossasLojas.php?modo=excluir&formulario=titulo&id=<?=$rsTitulos['idNossasLoja']?>">
                    <figure class="caixaAcao">
                        <img src="images/delete.png" alt="Botão de ação excluir" title="Excluir">
                    </figure>
                </a>
            </td>
        </tr>

            <?php } ?>
    </table>
</div>

<?php require_once("footer.php") ?>