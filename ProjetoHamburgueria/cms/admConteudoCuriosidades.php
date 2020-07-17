<?php
    
    require_once("bd/conexao.php");
    require_once("modulos/tratamentoImagemVazia.php");
    require_once("modulos/vars.php");

    $conexao = conexaoMysql();

    require_once("header.php");

    $actionMontagem = "bd/conteudo/curiosidades/inserirCuriosidades.php?modo=cadastrar&formulario=montagem";
    $actionOrigemHamburguer = "bd/conteudo/curiosidades/inserirCuriosidades.php?modo=cadastrar&formulario=origem";
    $imagemPadraoMontagem = "images/imagemNaoEncontrada.png";
    $imagemPadraoOrigem = "images/imagemNaoEncontrada.png";

    if (isset($_GET['modo'])) {

        if($_GET['modo'] == "editar") {

            if(isset($_GET['id'])) {
                
                $id = $_GET['id'];
                
                if ($_GET['formulario'] == "montagem") {
                    
                    $sql = "SELECT * FROM tblMontagem
                            WHERE tblMontagem.idMontagem = ".$id;

                    $selectMontagem = mysqli_query($conexao, $sql);

                    if($rsMontagem = mysqli_fetch_assoc($selectMontagem)) {

                        $tituloMontagem = $rsMontagem['tituloMontagem'];
                        $conteudoMontagem = $rsMontagem['conteudoMontagem'];
                        $imagem = $rsMontagem['imagemMontagem'];

                        $actionMontagem = "bd/conteudo/curiosidades/atualizarCuriosidades.php?modo=atualizar&formulario=montagem&id=".$id;
                        $imagemPadraoMontagem = "bd/arquivos/".$imagem;

                    }

                } else if ($_GET['formulario'] == "origem") {
                    
                    $sql = "SELECT * FROM tblOrigemHamburguer WHERE tblOrigemHamburguer.idOrigemHamburguer = ".$id;

                    $selectOrigemHamburguer = mysqli_query($conexao, $sql);

                    if($rsOrigemHamburguer = mysqli_fetch_assoc($selectOrigemHamburguer)) {

                        $tituloOrigem = $rsOrigemHamburguer['tituloOrigemHamburguer'];
                        $conteudoOrigem = $rsOrigemHamburguer['conteudoOrigemHamburguer'];
                        $imagem = $rsOrigemHamburguer['imagemOrigemHamburguer'];

                        $actionOrigemHamburguer = "bd/conteudo/curiosidades/atualizarCuriosidades.php?modo=atualizar&formulario=origem&id=".$id;
                        $imagemPadraoOrigem = "bd/arquivos/".$imagem;
                        
                    }
                }

            }

        }

    }

?>
<!-- <script async src="js/mascaras.js"></script> -->
<script async src="js/verMaisConteudo.js"></script>
<script src="js/redirecionementoDelete.js"></script>
<script>

    $(document).ready(function () {

        $(".imagem").change(function (evento) {

            const file = $(this)[0].files[0];
            const fileReader = new FileReader();

            fileReader.onloadend = function () {

                evento.target.parentNode.parentNode.children[4].children[0].
                    setAttribute("src", fileReader.result);

            }
            
            fileReader.readAsDataURL(file);

        });
    
        var options = { target: "#modal" }

        $("input[type=submit]").click(function () {
            $("#frmOrigemHamburguer").ajaxForm(options).submit();
            $("#frmMontagem").ajaxForm(options).submit();
        }); 
        
    });

    function ativarDesativarCuriosidades(elemento, id, status, tipoFormulario) {

        const atualizarStatus = status == "1"? "0":"1";
        elemento.setAttribute("onclick", `ativarDesativarCuriosidades(this, ${id}, ${atualizarStatus}, '${tipoFormulario}')`);

        $.ajax({
            type: "GET",
            url: "bd/conteudo/curiosidades/atualizarCuriosidades.php",
            data: {
                modo: "ativarDesativar",
                id: id,
                status: status,
                formulario: tipoFormulario
            }
        });
    }

</script>

<!--  FORMULÁRIO SOBRE A ORIGEM DO HAMBURGUER -->
<form action="<?=$actionOrigemHamburguer?>" method="post" id="frmOrigemHamburguer" class="formularioConteudos" enctype="multipart/form-data">
    <h2>Formulário de Origem do Hamburguer</h2>

    <!-- -=-=TITULO=-=- -->
    <label>
        Titulo: <input type="text" name="txtTituloOrigem" data-js="apenasLetra" max-length="20" required value="<?=@$tituloOrigem?>">
    </label>

    <!-- -=-=CONTEUDO=-=- -->
    <label>
        Conteudo: <textarea name="txtAreaConteudoOrigem"  cols="30" rows="10"><?=@$conteudoOrigem?></textarea>
    </label>

    <!-- -=-=IMAGEM=-=- -->
    <label>
        Imagem: <input type="file" name="fleFoto" class="imagem" accept="image/jpeg, image/jpg, image/png">
    </label>

    <figure class="imgEscolhidaUsuario">
        <img src="<?=$imagemPadraoOrigem?>" alt="Imagem não foi escolhida pelo usuário">
    </figure>
    
    <!-- -=-=BOTÃO SUBMIT=-=- -->
    <input type="submit" name="btnSalvar" value="Enviar">
</form>

<!--  FORMULÁRIO SOBRE A MONTAGEM DO HAMBURGUER -->
<form action="<?=$actionMontagem?>" method="post" id="frmMontagem" class="formularioConteudos" enctype="multipart/form-data">
    <h2>Formulário sobre Montagem dos Nossos Hamburgueres</h2>
    <!-- -=-=TITULO=-=- -->
    <label>
        Titulo: <input type="text" name="txtTituloMontagem" id="titulo" data-js="apenasLetra" max-length="20" required value="<?=@$tituloMontagem?>">
    </label>

    <!-- -=-=CONTEUDO=-=- -->
    <label>
        Conteudo: <textarea name="txtAreaConteudoMontagem" id="conteudo" cols="30" rows="10"><?=@$conteudoMontagem?></textarea>
    </label>

    <!-- -=-=IMAGEM=-=- -->
    <label>
        Imagem: <input type="file" name="fleFoto" class="imagem" accept="image/jpeg, image/jpg, image/png">
    </label>

    <!-- IMAGEM ESCOLHIDA PELO USUÁRIO -->
    <figure class="imgEscolhidaUsuario">
        <img src="<?=$imagemPadraoMontagem?>" alt="Imagem não foi escolhida pelo usuário">
    </figure>

    <input type="submit" name="btnSalvar" value="Salvar">
</form>

<!-- CAIXA EXIBINDO AS TABELAS -->
<div id="caixaMostrandoSecao">
    <h2>CONTEUDOS CADASTRADOS</h2>

    <!-- TABELA DE CONTEUDOS DE ORIGEM DO HAMBURGUER -->
    <div class="tituloSecao formatarTexto"> Conteudos origem do hamburguer</div>
    <table class="tabelaSecao formatarTexto">
        
        <tr>
            <td>TITULO</td>
            <td>CONTEUDO</td>
            <td>IMAGEM</td>
            <td>ATIVAR/DESATIVAR</td>
            <td>AÇÕES</td>
        </tr>

        <?php 
        
        $sql = "SELECT * FROM tblOrigemHamburguer";

        $selectOrigemHamburguer = mysqli_query($conexao, $sql);

        while($rsOrigemHamburguer = mysqli_fetch_assoc($selectOrigemHamburguer)) {

        ?>
        <tr>
            <td><?=$rsOrigemHamburguer['tituloOrigemHamburguer']?></td>
            <td class="verMaisConteudo"><?=$rsOrigemHamburguer['conteudoOrigemHamburguer']?></td>
            <td>
                <figure class="conteudoImagem">

                    <img src="<?=tratarImagemVazia($rsOrigemHamburguer['imagemOrigemHamburguer'])?>" alt="Imagem sobre origem do hamburguer">

                </figure>
            </td>
            <td>
                <div class="btnAtivarDesativar">
                    <input type="checkbox" onclick="ativarDesativarCuriosidades(this, <?=$rsOrigemHamburguer['idOrigemHamburguer']?>, <?=$rsOrigemHamburguer['ativado']?>, 'origem')" <?php if($rsOrigemHamburguer['ativado']) echo("checked")?>>
                </div>
            </td>
            <td>
                <a href="admConteudoCuriosidades.php?modo=editar&formulario=origem&id=<?=$rsOrigemHamburguer['idOrigemHamburguer']?>">
                    <figure class="caixaAcao">
                        <img src="images/editar.png" alt="Botão de ação visualizar" title="Editar">
                    </figure>
                </a>

                <a onclick="apagarRegistro('bd/conteudo/curiosidades/deleteCuriosidades.php?modo=excluir&formulario=origem&imagem=<?=$rsOrigemHamburguer['imagemOrigemHamburguer']?>&id=<?=$rsOrigemHamburguer['idOrigemHamburguer']?>')">
                    <figure class="caixaAcao">
                        <img src="images/delete.png" alt="Botão de ação excluir" title="Excluir">
                    </figure>
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <!-- TABELA DE CONTEUDOS DA MONTAGEM DOS HAMBURGUERES -->
    <div class="tituloSecao formatarTexto"> Conteudos sobre a montagem de nossos hamburgueres</div>
    <table class="tabelaSecao formatarTexto">
        
        <tr>
            <td>TITULO</td>
            <td>CONTEUDO</td>
            <td>IMAGEM</td>
            <td>ATIVAR/DESATIVAR</td>
            <td>AÇÕES</td>
        </tr>

        <?php 
        
            $sql = "SELECT * from tblMontagem";

            $selectMontagem = mysqli_query($conexao, $sql);

            while($rsMontagem = mysqli_fetch_assoc($selectMontagem)) {
        ?>
        <tr>
            <td><?=$rsMontagem['tituloMontagem']?></td>
            
            <td class="verMaisConteudo"><?=$rsMontagem['conteudoMontagem']?></td>
            
            <td>
                <figure class="conteudoImagem">

                    <img src="<?=tratarImagemVazia($rsMontagem['imagemMontagem'])?>" alt="Imagem sobre montagem dos nossos hamburgueres">

                </figure>
            </td>

            <td>
                <div class="btnAtivarDesativar">
                    <input type="checkbox" onclick="ativarDesativarCuriosidades(this, <?=$rsMontagem['idMontagem']?>, <?=$rsMontagem['ativado']?>, 'montagem')" <?php if($rsMontagem['ativado']) echo("checked")?>>
                </div>
            </td>
            
            <td>
                <a href="admConteudoCuriosidades.php?modo=editar&formulario=montagem&id=<?=$rsMontagem['idMontagem']?>">
                    <figure class="caixaAcao">
                        <img src="images/editar.png" alt="Botão de ação visualizar" title="Editar">
                    </figure>
                </a>
                <div onclick="apagarRegistro('bd/conteudo/curiosidades/deleteCuriosidades.php?modo=excluir&formulario=montagem&imagem=<?=$rsMontagem['imagemMontagem']?>&id=<?=$rsMontagem['idMontagem']?>')" >
                    <figure class="caixaAcao">
                        <img src="images/delete.png" alt="Botão de ação excluir" title="Excluir">
                    </figure>
                </div>
            </td>
        </tr>

        <?php } ?>
    </table>
</div>

<?php require_once("footer.php") ?>