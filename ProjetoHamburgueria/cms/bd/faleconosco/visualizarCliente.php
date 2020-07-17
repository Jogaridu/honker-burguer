<?php 
    require_once("../conexao.php");

    $conexao = conexaoMysql();

    $sql = "SELECT tblContatosSite.*, tblClassificacao.nomeClassificacao 
    FROM tblContatosSite, tblClassificacao
    WHERE tblContatosSite.idClassificacao = tblClassificacao.idClassificacao AND tblContatosSite.idContatoSite = ". $_POST['id'];

    $selectContato = mysqli_query($conexao, $sql);

    if ($rsContato = mysqli_fetch_assoc($selectContato)) {

        $nome = $rsContato['nome'];
        $telefone = $rsContato['telefone'];
        $celular = $rsContato['celular'];
        $email = $rsContato['email'];
        $profissao = $rsContato['profissao'];
        $sexo = $rsContato['sexo'];
        $homepage = $rsContato['homepage'];
        $link = $rsContato['link'];
        $mensagem = $rsContato['mensagem'];
        $classificao = $rsContato['nomeClassificacao'];

    }
?>

<script>
    $(document).ready(function() {
        $("#btnVoltar").click(function () {
            $("#modal").fadeOut(500);
        });
    });
</script>

<div id="modalConteudo" style="overflow-y: scroll;">

    <div id="btnVoltar">Voltar</div>

    <!-- -=-=NOME=-=- -->
    <div class="linhaConteudoContato">
        <div class="colunaTitulo formatarTexto">Nome:</div>
        <div class="colunaConteudo formatarTexto"><?=$nome?></div>
    </div>

    <!-- -=-=TELEFONE=-=- -->
    <div class="linhaConteudoContato">
        <div class="colunaTitulo formatarTexto">Telefone:</div>
        <div class="colunaConteudo formatarTexto"><?=$telefone?></div>
    </div>

    <!-- -=-=CELULAR=-=- -->
    <div class="linhaConteudoContato">
        <div class="colunaTitulo formatarTexto">Celular:</div>
        <div class="colunaConteudo formatarTexto"><?=$celular?></div>
    </div>

    <!-- -=-=EMAIL=-=- -->
    <div class="linhaConteudoContato">
        <div class="colunaTitulo formatarTexto">Email</div>
        <div class="colunaConteudo formatarTexto"><?=$email?></div>
    </div>

    <!-- -=-=PROFISSÃO=-=- -->
    <div class="linhaConteudoContato">
        <div class="colunaTitulo formatarTexto">Profissão</div>
        <div class="colunaConteudo formatarTexto"><?=$profissao?></div>
    </div>

    <!-- -=-=SEXO=-=- -->
    <div class="linhaConteudoContato">
        <div class="colunaTitulo formatarTexto">Sexo</div>
        <div class="colunaConteudo formatarTexto"><?=$sexo?></div>
    </div>

    <!-- -=-=HOMEPAGE=-=- -->
    <div class="linhaConteudoContato">
        <div class="colunaTitulo formatarTexto">Home Page</div>
        <div class="colunaConteudo formatarTexto"><?=$homepage?></div>
    </div>

    <!-- -=-=LINK=-=- -->
    <div class="linhaConteudoContato">
        <div class="colunaTitulo formatarTexto">Link</div>
        <div class="colunaConteudo formatarTexto"><?=$link?></div>
    </div>

    <!-- -=-=CLASSIFICACAO=-=- -->
    <div class="linhaConteudoContato">
        <div class="colunaTitulo formatarTexto">Classificação</div>
        <div class="colunaConteudo formatarTexto"><?=$classificao?></div>
    </div>

    <!-- -=-=MENSAGEM=-=- -->
    <div class="linhaConteudoContato">
        <div class="colunaTitulo formatarTexto">Mensagem</div>
        <div class="colunaConteudo formatarTexto"><?=$mensagem?></div>
    </div>
</div>
