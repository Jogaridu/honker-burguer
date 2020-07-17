<?php
    
    require_once("bd/conexao.php");

    $conexao = conexaoMySql();

    $sqlFiltro = "SELECT tblContatosSite.nome, tblContatosSite.profissao, tblContatosSite.celular,
                tblContatosSite.idClassificacao, tblContatosSite.idContatoSite, 
                tblClassificacao.nomeClassificacao
                FROM tblContatosSite, tblClassificacao
                WHERE tblContatosSite.idClassificacao = tblClassificacao.idClassificacao";

    if (isset($_GET['btnFiltrar'])) {
        
        if (isset($_GET['rdoFiltroClassificacao'])) {
            
            if ($_GET['rdoFiltroClassificacao'] != "") {
                $filtroEscolhido = $_GET['rdoFiltroClassificacao'];

                $sqlFiltro = "SELECT tblContatosSite.nome, tblContatosSite.profissao, tblContatosSite.celular, 
                tblContatosSite.idClassificacao, tblContatosSite.idContatoSite, 
                tblClassificacao.nomeClassificacao
                FROM tblContatosSite, tblClassificacao
                WHERE tblContatosSite.idClassificacao = tblClassificacao.idClassificacao AND tblContatosSite.idClassificacao = ". $filtroEscolhido;
                
            } else {

                $sqlFiltro = "SELECT tblContatosSite.nome, tblContatosSite.profissao, tblContatosSite.celular, 
                tblContatosSite.idClassificacao, tblContatosSite.idContatoSite, 
                tblClassificacao.nomeClassificacao
                FROM tblContatosSite, tblClassificacao
                WHERE tblContatosSite.idClassificacao = tblClassificacao.idClassificacao";

            }   
        }
    }
    
?>

<?php require_once("header.php") ?>

<form id="caixaFiltro" method="GET" action="faleConosco.php" name="formFiltro">
    <h2>MENSAGENS</h2>
    <ul id="listaFiltro">
        
        <?php
            $sql = "SELECT * from tblClassificacao";

            $selectClassificacoes = mysqli_query($conexao, $sql);

            while ($rsClassificacoes = mysqli_fetch_assoc($selectClassificacoes)) {

        ?>

            <li class="formatarTexto">
                <span>
                    <label class="caixaFiltro">
                        <?=$rsClassificacoes['nomeClassificacao']?> <input type="radio" name="rdoFiltroClassificacao" value="<?=$rsClassificacoes['idClassificacao']?>">
                    </label>
                </span>
            </li>

        <?php
            }
        ?>

        <li class="formatarTexto">
            <span>
                <label>
                    <div class="caixaFiltro">
                        All <input type="radio" name="rdoFiltroClassificacao" value="">
                    </div>
                </label>
            </span>
        </li>
    </ul>

    <input type="submit" value="Filtrar" name="btnFiltrar">
</form>

<table id=tabelaDadosUsuarios>
    <tr class="linhaDados">
        <td class="colunaDadoUsuario formatarTexto">NOME</td>
        <td class="colunaDadoUsuario formatarTexto">PROFISSÃO</td>
        <td class="colunaDadoUsuario formatarTexto">CELULAR</td>
        <td class="colunaDadoUsuario formatarTexto">CLASSIFICAÇÃO</td>
        <td class="colunaAcao">AÇÃO</td>
    </tr>

    <?php

        $selectMensagens = mysqli_query($conexao, $sqlFiltro);

        while ($rsMensagens = mysqli_fetch_assoc($selectMensagens)) {

    ?>

        <tr>
            <td class="colunaDadoUsuario formatarTexto"><?=$rsMensagens['nome']?></td>
            <td class="colunaDadoUsuario formatarTexto"><?=$rsMensagens['profissao']?></td>
            <td class="colunaDadoUsuario formatarTexto"><?=$rsMensagens['celular']?></td>
            <td class="colunaDadoUsuario formatarTexto"><?=$rsMensagens['nomeClassificacao']?></td>
            <td class="colunaAcao">
                <div class="caixaVizualizar" onclick="visualizarCliente(<?=$rsMensagens['idContatoSite']?>)">
                    <h3 class="formatarTexto">Vizualizar</h3>
                    <img src="images/lupa.png" alt="Imagem Vizualizar" class="imgVizualizar">
                </div>

                <a onclick="return confirm('Deseja realmente excluir o registro?')" href="bd/faleconosco/delete.php?modo=excluir&id=<?=$rsMensagens['idContatoSite']?>">
                    <div class="caixaDeletar">
                        <h3 class="formatarTexto">Deletar</h3>
                        <img src="images/delete.png" alt="Imagem Deletar" class="imgDeletar">
                    </div>
                </a>
            </td>
        </tr>

    <?php 
        }
    ?>
</table>

<script>
    $(document).ready(function () {
       
        $(".caixaVizualizar").click(function () {
            $("#modal").fadeIn(500);
        })

    });

    function visualizarCliente(idCliente) {
            $.ajax({
                type: "POST",
                url: "bd/faleconosco/visualizarCliente.php",
                data : {
                    modo: "visualizar",
                    id: idCliente
                }, 
                success: function (dados) {
                    $("#modal").html(dados);
                }
            });
        }
</script>

<?php require_once("footer.php") ?>