<?php
    
    require_once("../conexao.php");

    $conexao = conexaoMysql();

?>

<script src="js/mascaras.js"></script>
<script src="js/validarSenha.js"></script>
<script>
    $(document).ready(function() {
        $("#btnVoltar").click(function () {
            $("#modal").fadeOut(500);
        })
    });
</script>

<h2>Criar novo usuário</h2>

<form action="bd/admUsuario/inserirUsuario.php?modo=cadastrar" method="POST" id="tblFormularioVisualizar">
    <!-- Input com o valor -=-=NOME=-=- -->
    <label for="nome" class="formatarTexto">
        Nome:
        <input type="text" name="txtNome" id="nome" required>
    </label>

    <!-- Input com o valor -=-=USUARIO=-=- -->
    <label for="usuario" class="formatarTexto">
        Usuário:
        <input type="text" name="txtUsuario" id="usuario" required>
    </label>

    <!-- Input com o valor -=-=SENHA=-=- -->
    <label for="senha" class="formatarTexto">
        Senha:
        <input type="password" name="txtSenha" id="senha" required>
    </label>

    <!-- Input com o valor -=-=CONFIRMAR SENHA=-=- -->
    <label for="confirmarSenha" class="formatarTexto">
        Confirmar Senha:
        <input type="password" name="txtSenha" id="confirmarSenha" required>
    </label>

    <!-- Caixa de botão -->
    <div id="caixaBotoesFormulario">
        <input type="submit" name="btnCadastrar" value="Cadastrar" onclick="return validarSenha()">
    </div>

    <!-- Input com o valor -=-=EMAIL=-=- -->
    <label for="email" class="formatarTexto">
        Email:
        <input type="email" name="txtEmail" id="email" required>
    </label>

    <!-- Input com o valor -=-=CELULAR=-=- -->
    <label for="celular" class="formatarTexto">
        Celular:
        <input type="text" name="txtCelular" id="celular" required>
    </label>

    <!-- Select do -=-=NÍVEL USUÁRIO=-=- -->
    <label for="nivelUsuario" class="formatarTexto">
        Nível Usuário:
        <select name="sltNivelUsuario">
            <?php 
                $sql = "SELECT * FROM tblPermissao";

                $selectPermissoes = mysqli_query($conexao, $sql);

                while ($rsPermissoes = mysqli_fetch_assoc($selectPermissoes)) {
                
            ?>
                    <option value="<?=$rsPermissoes['idPermissao']?>"><?=$rsPermissoes['nomePermissao']?></option>

                <?php } ?>
        </select>
    </label>
</form>

<div id="btnVoltar">Voltar</div>
