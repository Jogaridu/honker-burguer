<?php
    
    require_once("bd/conexao.php");
    require_once("modulos/tratamentoImagemVazia.php");
    require_once("modulos/vars.php");

    $conexao = conexaoMysql();

    require_once("header.php");

    $actionSobreEmpresa = "bd/conteudo/sobreEmpresa/inserirSobreEmpresa.php?modo=cadastrar&formulario=sobre";
    $actionOrigemEmpresa = "bd/conteudo/sobreEmpresa/inserirSobreEmpresa.php?modo=cadastrar&formulario=origem";
    $imagemPadrao = "images/imagemNaoEncontrada.png";

    if (isset($_GET['modo'])) {

        if($_GET['modo'] == "editar") {

            if(isset($_GET['id'])) {

                $id = $_GET['id'];
                
                if ($_GET['formulario'] == "sobre") {

                    $sql = "SELECT * FROM tblSobreEmpresa
                            WHERE tblSobreEmpresa.idSobreEmpresa = ".$id;

                    $selectSobreEmpresa = mysqli_query($conexao, $sql);

                    if($rsSobreEmpresa = mysqli_fetch_assoc($selectSobreEmpresa)) {

                        $tituloSobre = $rsSobreEmpresa['tituloSobreEmpresa'];
                        $conteudoSobre = $rsSobreEmpresa['conteudoSobreEmpresa'];
                        
                        $actionSobreEmpresa = "bd/conteudo/sobreEmpresa/atualizarSobreEmpresa.php?modo=atualizar&formulario=sobre&id=".$id;

                    }

                } else if ($_GET['formulario'] == "origem") {

                    $sql = "SELECT * FROM tblOrigemEmpresa WHERE tblOrigemEmpresa.idOrigemEmpresa = ".$id;

                    $selectOrigemEmpresa = mysqli_query($conexao, $sql);

                    if($rsOrigemEmpresa = mysqli_fetch_assoc($selectOrigemEmpresa)) {

                        $tituloOrigem = $rsOrigemEmpresa['tituloOrigemEmpresa'];
                        $conteudoOrigem = $rsOrigemEmpresa['conteudoOrigemEmpresa'];
                        $imagem = $rsOrigemEmpresa['imagemOrigemEmpresa'];

                        $actionOrigemEmpresa = "bd/conteudo/sobreEmpresa/atualizarSobreEmpresa.php?modo=atualizar&formulario=origem&id=".$id;
                        $imagemPadrao = "bd/arquivos/".$imagem;
                        
                    }
                }

            }

        }

    }

?>
<!-- <script src="js/mascaras.js"></script> -->
<script async src="js/verMaisConteudo.js"></script>
<script>

    $(document).ready(function () {

        $("#imagem").change(function () {

            const file = $(this)[0].files[0];
            const fileReader = new FileReader();

            fileReader.onloadend = function () {

                $("#imgEscolhidaUsuario img").attr("src", fileReader.result);

            }
            
            fileReader.readAsDataURL(file);

        });

        var options = { target: "#modal" }
    
        $("input[type=submit]").click(function () {
            $("#frmOrigemEmpresa").ajaxForm(options).submit();
            $("#frmSobreEmpresa").ajaxForm(options).submit();
        });


    });

    function ativarDesativarSobreEmpresa(elemento, id, status, tipoFormulario) {

        const atualizarStatus = status == "1"? "0":"1";
        elemento.setAttribute("onclick", `ativarDesativarSobreEmpresa(this, ${id}, ${atualizarStatus}, '${tipoFormulario}')`);

        $.ajax({
            type: "GET",
            url: "bd/conteudo/sobreEmpresa/atualizarSobreEmpresa.php",
            data: {
                modo: "ativarDesativar",
                id: id,
                status: status,
                formulario: tipoFormulario
            }
        });
    }

</script>

<!-- FORMULARIO SOBRE A ORIGEM DA EMPRESA -->
<form action="<?=$actionOrigemEmpresa?>" method="post" id="frmOrigemEmpresa" class="formularioConteudos" enctype="multipart/form-data">
    <h2>Formulário de Origem da Empresa</h2>

    <!-- -=-=TITULO=-=- -->
    <label>
        Titulo: <input type="text" name="txtTituloOrigem" data-js="nome" maxlength="50" required value="<?=@$tituloOrigem?>">
    </label>

    <!-- -=-=CONTEUDO=-=- -->
    <label>
        Conteudo: <textarea name="txtAreaConteudoOrigem" cols="30" rows="10"><?=@$conteudoOrigem?></textarea>
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

<!-- FORMULARIO SOBRE A EMPRESA -->
<form action="<?=$actionSobreEmpresa?>" method="post" id="frmSobreEmpresa" class="formularioConteudos">
    <h2>Formulário com Informações da Empresa</h2>
    <!-- -=-=TITULO=-=- -->
    <label>
        Titulo: <input type="text" name="txtTituloSobre" data-js="nome" maxlength="50" required value="<?=@$tituloSobre?>">
    </label>

    <!-- -=-=CONTEUDO=-=- -->
    <label>
        Conteudo: <textarea name="txtAreaConteudoSobre" cols="30" rows="10"><?=@$conteudoSobre?></textarea>
    </label>

    <input type="submit" name="btnSalvar" value="Salvar">
</form>

<!-- CAIXA EXIBINDO AS TABELAS -->
<div id="caixaMostrandoSecao">
    <h2>CONTEUDOS CADASTRADOS</h2>

    <!-- TABELA DE CONTEUDOS DE ORIGEM DA EMPRESA -->
    <div class="tituloSecao formatarTexto"> Conteudos origem da empresa cadastrados </div>
    <table class="tabelaSecao formatarTexto">
        
        <tr>
            <td>TITULO</td>
            <td>CONTEUDO</td>
            <td>IMAGEM</td>
            <td>ATIVAR/DESATIVAR</td>
            <td>AÇÕES</td>
        </tr>

        <?php 
        
        $sql = "SELECT * FROM tblOrigemEmpresa";

        $selectOrigemEmpresa = mysqli_query($conexao, $sql);

        while($rsOrigemEmpresa = mysqli_fetch_assoc($selectOrigemEmpresa)) {

        ?>
        <tr>
            <td><?=$rsOrigemEmpresa['tituloOrigemEmpresa']?></td>
            <td class="verMaisConteudo"><?=$rsOrigemEmpresa['conteudoOrigemEmpresa']?></td>
            <td>
                <figure class="conteudoImagem">
                    <img src="<?=tratarImagemVazia($rsOrigemEmpresa['imagemOrigemEmpresa'])?>" alt="Imagem sobre origem da empresa">
                </figure>
            </td>
            <td>
                <div class="btnAtivarDesativar">
                    <input type="checkbox" onclick="ativarDesativarSobreEmpresa(this, <?=$rsOrigemEmpresa['idOrigemEmpresa']?>, <?=$rsOrigemEmpresa['ativado']?>, 'origem')" <?php if($rsOrigemEmpresa['ativado']) echo("checked")?>>
                </div>
            </td>
            <td>
                <a href="admConteudoSobreEmpresa.php?modo=editar&formulario=origem&id=<?=$rsOrigemEmpresa['idOrigemEmpresa']?>">
                    <figure class="caixaAcao">
                        <img src="images/editar.png" alt="Botão de ação visualizar" title="Editar">
                    </figure>
                </a>

                <a onclick="return confirm('Deseja realmente excluir o registro?')" 
                href="bd/conteudo/SobreEmpresa/deleteSobreEmpresa.php?modo=excluir&formulario=origem&id=<?=$rsOrigemEmpresa['idOrigemEmpresa']?>">
                    <figure class="caixaAcao">
                        <img src="images/delete.png" alt="Botão de ação excluir" title="Excluir">
                    </figure>
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <!-- TABELA DE CONTEUDOS DE NOME DE SECAO -->
    <div class="tituloSecao formatarTexto"> Conteudos sobre a empresa cadastrado</div>
    <table class="tabelaSecao formatarTexto">
        
        <tr>
            <td>TITULO</td>
            <td>CONTEUDO</td>
            <td>ATIVAR/DESATIVAR</td>
            <td>AÇÕES</td>
        </tr>

        <?php 
        
            $sql = "SELECT * from tblSobreEmpresa";

            $selectSobreEmpresa = mysqli_query($conexao, $sql);

            while($rsSobreEmpresa = mysqli_fetch_assoc($selectSobreEmpresa)) {
        ?>
        <tr>
            <td><?=$rsSobreEmpresa['tituloSobreEmpresa']?></td>
            
            <td class="verMaisConteudo"><?=$rsSobreEmpresa['conteudoSobreEmpresa']?></td>

            <td>
                <div class="btnAtivarDesativar">
                    <input type="checkbox" onclick="ativarDesativarSobreEmpresa(this, <?=$rsSobreEmpresa['idSobreEmpresa']?>, <?=$rsSobreEmpresa['ativado']?>, 'sobre')" <?php if($rsSobreEmpresa['ativado']) echo("checked")?>>
                </div>
            </td>
            
            <td>
                <a href="admConteudoSobreEmpresa.php?modo=editar&formulario=sobre&id=<?=$rsSobreEmpresa['idSobreEmpresa']?>">
                    <figure class="caixaAcao">
                        <img src="images/editar.png" alt="Botão de ação visualizar" title="Editar">
                    </figure>
                </a>
                <a onclick="return confirm('Deseja realmente excluir o registro?')" 
                href="bd/conteudo/sobreEmpresa/deletesobreEmpresa.php?modo=excluir&formulario=sobre&id=<?=$rsSobreEmpresa['idSobreEmpresa']?>">
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