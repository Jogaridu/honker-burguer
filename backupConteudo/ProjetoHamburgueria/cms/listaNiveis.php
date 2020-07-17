<?php
    
    require_once("bd/conexao.php");

    $conexao = conexaoMysql();

    require_once("header.php");

    $sql = "SELECT * from tblPermissao";

    $selectPermissoes = mysqli_query($conexao, $sql);

    while($rsPermissao = mysqli_fetch_assoc($selectPermissoes)) {

?>
        <div class="caixaNivelUsuario">
            <!-- Botão para ativar e desativar o usuário -->
            <div class="btnAtivarDesativar">
                <input type="checkbox" onclick="ativarDesativarNivel(this, <?=$rsPermissao['idPermissao']?>, <?=$rsPermissao['ativado']?>)" <?php if($rsPermissao['ativado']) echo("checked")?>>
            </div>

            <!-- Caixa com as informações do usuário -->
            <div class="conteudoNivel">
                <p class="titulo formatarTexto">Nível:</p>
                <p class="conteudo formatarTexto"><?=$rsPermissao['nomePermissao']?></p>

                <p class="titulo formatarTexto">Permissões:</p>
                <div class="caixaPermissoesNiveis">
                    <div class="formatarTexto" style="<?php if($rsPermissao['faleConosco'] == "1") echo("background-Color: green;"); ?>">
                        Fale Conosco
                    </div>

                    <div class="formatarTexto" style="<?php if($rsPermissao['admConteudo'] == "1") echo("background-Color: green;"); ?>">
                        Adm. de Conteúdos
                    </div>

                    <div class="formatarTexto" style="<?php if($rsPermissao['admUsuario'] == "1") echo("background-Color: green;"); ?>">
                        Adm. de Usuários
                    </div>
                </div>
            </div>

            <div class="btnVisualizarNivelUsuario" onclick="visualizarNivel(<?=$rsPermissao['idPermissao']?>)">Editar</div>
    </div>

    <?php } ?>

    <div class="caixaCriarNovoCampo">
        <div id="btnCriarNovoCampo" onclick="cadastrarNivel()">Adicionar novo nível</div>
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

        function ativarDesativarNivel(elemento, idNivel, status) {

            const atualizarStatus = status == "1"? "0":"1";
            elemento.setAttribute("onclick", `ativarDesativarNivel(this, ${idNivel}, ${atualizarStatus})`);

            $.ajax({
                type: "GET",
                url: "bd/admNivel/atualizarNivel.php",
                data: {
                    modo: "ativarDesativar",
                    id: idNivel,
                    status: status
                }
            });
        }

        function cadastrarNivel() {
            $.ajax({
                type: "POST",
                url: "bd/admNivel/cadastrarNivel.php",
                success: function (dados) {
                    $("#modalConteudo").html(dados);
                }
            });
        }

        function visualizarNivel(idNivel) {
            $.ajax({
                type: "GET",
                url: "bd/admNivel/visualizarNivel.php",
                data: {
                    modo: 'visualizar',
                    id: idNivel
                    },
                success: function (dados) {
                    $("#modalConteudo").html(dados);
                }
            });
        }
</script>
<?php require_once("footer.php") ?>