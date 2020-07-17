<?php
    
    require_once("../conexao.php");

    $conexao = conexaoMysql();

?>

<script src="js/mascaras.js"></script>

<script>
    $(document).ready(function() {
        $("#btnVoltar").click(function () {
            $("#modal").fadeOut(500);
        })
    });
</script>

<h2>Criar novo nível</h2>

<form action="bd/admNivel/inserirNivel.php?modo=cadastrar" method="POST" id="tblFormularioVisualizar">
    <!-- Input com o valor -=-=NOME=-=- -->
    <label for="nome" class="formatarTexto">
        Nome:
        <input type="text" name="txtNome" id="nome" required>
    </label>

    <!-- Input com o valor -=-=FALE CONOSCO=-=- -->
    <label class="formatarTexto editarCheckBox">
        Fale Conosco: <input type="checkbox" name="chkFaleConosco" value="1"> 
    </label>

    <!-- Input com o valor -=-=ADM. CONTEUDOS=-=- -->
    <label class="formatarTexto editarCheckBox">
        Adm. de Conteúdos: <input type="checkbox" name="chkAdmConteudo" value="1">
    </label>

    <!-- Input com o valor -=-=ADM. USUARIOS=-=- -->
    <label class="formatarTexto editarCheckBox">
        Adm. de Usuários: <input type="checkbox" name="chkAdmUsuario" value="1">
    </label>

    <!-- Caixa de botão -->
    <div id="caixaBotoesFormulario">
        <input type="submit" name="btnCadastrar" value="Cadastrar" onclick="return validarSenha()">
    </div>
</form>

<div id="btnVoltar">Voltar</div>
