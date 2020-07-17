<?php
    

if(isset($_GET['modo'])) {

    // Import da biblioteca conexao
    require_once("../conexao.php");

    // Abre a conexão com o BD
    $conexao = conexaoMysql();

    if($_GET['modo'] == 'visualizar') {

        if(isset($_GET['id'])) {

            $id = $_GET['id'];

            $sql = "SELECT tblUsuario.*, tblPermissao.nomePermissao
                    FROM tblUsuario, tblPermissao
                    WHERE tblUsuario.idPermissao = tblPermissao.idPermissao AND
                    tblUsuario.idUsuario = ".$id;

            $selectContato = mysqli_query($conexao, $sql);

            if($rsUsuario = mysqli_fetch_assoc($selectContato)) {
                $idUsuario = $rsUsuario['idUsuario'];
                $nome = $rsUsuario['nomeUsuario'];
                $usuario = $rsUsuario['usuario'];
                $senha = $rsUsuario['senha'];
                $email = $rsUsuario['email'];
                $celular = $rsUsuario['celular'];
                $idPermissao = $rsUsuario['idPermissao'];
            }
        }
    }
}

?>

<!-- <script src="js/mascaras.js"></script> -->
<script>
    $(document).ready(function() {
        $("#btnVoltar").click(function () {
            $("#modal").fadeOut(500);
        });

        const options = { target: "#modal" };

        $("#btnAtualizar").click(function () {

            if ($("#novasenha").val() != "") {

                if (validarSenhaAntiga('<?=$senha?>')) {
                    $("#modal").fadeOut();
                    $("#tblFormularioVisualizar").ajaxForm(options).submit();

                } else {
                    $("#modal").fadeOut();
                    Swal.fire({
                        icon: "error",
                        title: "Erro ao confirmar as senhas",
                        text: "Digite a senha antiga e a nova",
                        confirmButtonText: 'Tentar novamente!'
                    })
                }
            } else {
                $("#modal").fadeOut();
                $("#tblFormularioVisualizar").ajaxForm(options).submit();
            }
            
        });

    });

    function validarSenhaAntiga(senhaAntigaBanco="") {
        
        const $senhaAtual = document.getElementById("senha").value
        
        alert('Senha no banco: ' + senhaAntigaBanco);
        alert('Senha digitada agora: ' + $senhaAtual);

        if (senhaAntigaBanco == $senhaAtual) {
            return true;

        }

        return false;
    }
</script>

<h2>Visualizar usuário</h2>

<form action="bd/admUsuario/atualizarUsuario.php?modo=atualizar&id=<?=$idUsuario?>" method="POST" id="tblFormularioVisualizar">
    <label for="nome" class="formatarTexto">
        Nome:
        <input type="text" name="txtNome" id="nome" value="<?=$nome?>">
    </label>

    <label for="usuario" class="formatarTexto">
        Usuário:
        <input type="text" name="txtUsuario" id="usuario" value="<?=$usuario?>">
    </label>

    <label for="senha" class="formatarTexto">
        Senha Atual:
        <input type="password" name="txtSenha" id="senha" value="">
    </label>

    <label for="novasenha" class="formatarTexto">
        Senha Nova:
        <input type="password" name="txtNovaSenha" id="novasenha" value="">
    </label>

    <!-- Caixa de botões -->
    <div id="caixaBotoesFormulario">
        <input type="button" id="btnAtualizar" name="btnAtualizar" value="Atualizar">

        <a onclick="return confirm('Deseja realmente excluir o usuário?')" 
        href="bd/admUsuario/deleteUsuario.php?modo=excluir&id=<?=$idUsuario?>">
            <input type="button" name="btnDeletar" value="Deletar">
        </a>
    </div>

    <label for="email" class="formatarTexto">
        Email:
        <input type="email" name="txtEmail" id="email" value="<?=$email?>">
    </label>

    <label for="celular" class="formatarTexto">
        Celular:
        <input type="text" name="txtCelular" id="celular" value="<?=$celular?>">
    </label>

    <label for="nivelUsuario" class="formatarTexto">
        Nível Usuário:
        <select name="sltNivelUsuario">
            <?php 

                $sql = "SELECT tblPermissao.nomePermissao, tblPermissao.idPermissao
                FROM tblPermissao";

                $selectPermissoes = mysqli_query($conexao, $sql);

                while($rsPermissao = mysqli_fetch_assoc($selectPermissoes)) {
                    
            ?>
                    <option value="<?=$rsPermissao['idPermissao']?>" <?php if ($rsPermissao['idPermissao'] === $idPermissao) echo("selected");
                    ?>><?=$rsPermissao['nomePermissao']?></option>

            <?php } ?>
        </select>
    </label>
</form>

<div id="btnVoltar">Voltar</div>

