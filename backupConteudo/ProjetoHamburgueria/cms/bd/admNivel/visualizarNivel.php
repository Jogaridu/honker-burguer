<?php
    

if(isset($_GET['modo'])) {

    // Import da biblioteca conexao
    require_once("../conexao.php");

    // Abre a conexão com o BD
    $conexao = conexaoMysql();

    if($_GET['modo'] == 'visualizar') {

        if(isset($_GET['id'])) {

            $id = $_GET['id'];

            $sql = "SELECT tblPermissao.* FROM tblPermissao
                    WHERE tblPermissao.idPermissao = ".$id;

            $selectContato = mysqli_query($conexao, $sql);

            if($rsPermissao = mysqli_fetch_assoc($selectContato)) {
                $idPermissao = $rsPermissao['idPermissao'];
                $nome = $rsPermissao['nomePermissao'];
                $faleConoscoBool = $rsPermissao['faleConosco'];
                $admUsuarioBool = $rsPermissao['admUsuario'];
                $admConteudoBool = $rsPermissao['admConteudo'];

            }
        }
    }
}

?>

<script src="js/mascaras.js"></script>

<script>
    $(document).ready(function() {
        $("#btnVoltar").click(function () {
            $("#modal").fadeOut(500);
        });
    });
</script>

<h2>Visualizar nível</h2>

<form action="bd/admNivel/atualizarNivel.php?modo=atualizar&id=<?=$idPermissao?>" method="POST" id="tblFormularioVisualizar">
    <!-- Input com o valor -=-=NOME=-=- -->
    <label for="nome" class="formatarTexto">
        Nome:
        <input type="text" name="txtNome" id="nome" value="<?=$nome?>">
    </label>

     <!-- Input com o valor -=-=FALE CONOSCO=-=- -->
     <label class="formatarTexto editarCheckBox">
        Fale Conosco: <input type="checkbox" name="chkFaleConosco" value="1" <?php if($faleConoscoBool == "1") echo("checked") ?>> 
    </label>

    <!-- Input com o valor -=-=ADM. CONTEUDOS=-=- -->
    <label class="formatarTexto editarCheckBox">
        Adm. de Conteúdos: <input type="checkbox" name="chkAdmConteudo" value="1" <?php if($admConteudoBool == "1") echo("checked") ?>>
    </label>

    <!-- Caixa de botões -->
    <div id="caixaBotoesFormulario">
        <input type="submit" name="btnAtualizar" value="Atualizar">

        <a href="bd/admNivel/deleteNivel.php?modo=excluir&id=<?=$idPermissao?>">
            <input type="button" name="btnDeletar" value="Deletar">
        </a>
    </div>

    <!-- Input com o valor -=-=ADM. USUARIOS=-=- -->
    <label class="formatarTexto editarCheckBox">
        Adm. de Usuários: <input type="checkbox" name="chkAdmUsuario" value="1" <?php if($admUsuarioBool == "1") echo("checked") ?>>
    </label>
</form>

<div id="btnVoltar">Voltar</div>

