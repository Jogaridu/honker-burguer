<?php
    
    require_once("bd/conexao.php");

    $conexao = conexaoMysql();

    require_once("header.php");

    $sql = "SELECT tblUsuario.idUsuario, tblUsuario.usuario, tblUsuario.idPermissao, tblUsuario.ativado, tblPermissao.nomePermissao 
    FROM tblUsuario, tblPermissao 
    WHERE tblUsuario.idPermissao = tblPermissao.idPermissao";
    
    $selectUsuarios = mysqli_query($conexao, $sql);
    // var_dump(mysqli_error($conexao)); Para ver qualquer erro!!

    while($rsUsuario = mysqli_fetch_assoc($selectUsuarios)) {
?>

    <div class="caixaNivelUsuario">
        <!-- Botão para ativar e desativar o usuário -->
        <div class="btnAtivarDesativar">
            <input type="checkbox" onclick="ativarDesativarUsuario(this, <?=$rsUsuario['idUsuario']?>, <?=$rsUsuario['ativado']?>)" <?php if($rsUsuario['ativado']) echo("checked")?>>
        </div>

        <!-- Caixa com as informações do usuário -->
        <div class="conteudoUsuario">
            <p class="titulo formatarTexto">Nome de usuário:</p>
            <p class="conteudo formatarTexto"><?=$rsUsuario['usuario']?></p>

            <p class="titulo formatarTexto">Nível do usuário:</p>
            <p class="conteudo formatarTexto"><?=$rsUsuario['nomePermissao']?></p>
        </div>

        <!-- Botão para visualizar mais informações do usuário -->
        <div class="btnVisualizarNivelUsuario" onclick="visualizarUsuario(<?=$rsUsuario['idUsuario']?>)">Visualizar</div>
        
    </div>

<?php } ?>

<div class="caixaCriarNovoCampo">
    <div id="btnCriarNovoCampo" onclick="cadastrarUsuario()">Adicionar novo usuário</div>
</div>

<script>
     $(document).ready(function() {
            $("#btnCriarNovoCampo").click(function(){
                $("#modal").fadeIn(500);
            });

            $(".btnVisualizarNivelUsuario").click(function () {
                $("#modal").fadeIn(500);
            })
        });

        function ativarDesativarUsuario(elemento, idUsuario, status) {

            const atualizarStatus = status == "1"? "0":"1";
            elemento.setAttribute("onclick", `ativarDesativarUsuario(this, ${idUsuario}, ${atualizarStatus})`);

            $.ajax({
                type: "GET",
                url: "bd/admUsuario/atualizarUsuario.php",
                data: {
                    modo: "ativarDesativar",
                    id: idUsuario,
                    status: status
                },
                success: function (dados) {
                    $("#modalConteudo").html(dados);
                }
            })
        }

        function cadastrarUsuario() {
            $.ajax({
                type: "POST",
                url: "bd/admUsuario/cadastrarUsuario.php",
                success: function (dados) {
                    $("#modalConteudo").html(dados);
                }
            });
        }

        function visualizarUsuario(idUsuario) {
            $.ajax({
                type: "GET",
                url: "bd/admUsuario/visualizarUsuario.php",
                data: {
                    modo: 'visualizar',
                    id: idUsuario
                    },
                success: function (dados) {
                    $("#modalConteudo").html(dados);
                }
            });
        }
</script>

<?php require_once("footer.php") ?>