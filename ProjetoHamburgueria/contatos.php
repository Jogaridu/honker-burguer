<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Honker Burguer</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/contatos.css">
</head>
<body>
    <?php include_once("header.php"); ?>

    <figure id="imgContatos">
            
    </figure>

    <div class="caixaCentralizaSite">
        <h1>FALE CONOSCO</h1>
        
        <form action="contatos.php" method="post" id="formularioContatos" class="formatarTexto centralizar">
            
            <div id="caixaDadosUsuario">
                <h3>Informações do Usuário</h3>
                <div class="caixaEntradaDados">
                    Nome
                    <input type="text" name="txtNome" maxlength="25">
                </div>

                <div class="caixaEntradaDados">
                    Telefone
                    <input type="text" name="txtTelefone" maxlength="14">
                </div>

                <div class="caixaEntradaDados">
                    Celular
                    <input type="text" name="txtNome" maxlength="14">
                </div>

                <div class="caixaEntradaDados">
                    Email
                    <input type="text" name="txtNome" maxlength="50">
                </div>

                <div class="caixaEntradaDados">
                    Sexo:
                    
                    <input type="radio" name="rdoSexo" value="masc"> MASC

                    <input type="radio" name="rdoSexo" value="femi"> FEMI
                </div>

                <div class="caixaEntradaDados">
                    Profissão
                    <input type="text" name="txtNome" maxlength="20">
                </div>
            </div>
            
            <div id="caixaSugestoes">
                <h3>Sugestões ou Contatos</h3>
                <div class="caixaEntradaDados">
                    Home Page
                    <input type="text" name="txtNome" maxlength="100">
                </div>

                <div class="caixaEntradaDados">
                    Link Facebook
                    <input type="text" name="txtNome" maxlength="50">
                </div>

                <div class="caixaEntradaDados">
                    Tipo de mensagem
                    <select name="txtTipoMensagem">
                        <option value="sugestao">Sugestão</option>
                        <option value="critica">Crítica</option>
                    </select>
                    
                </div>

                <div class="caixaEntradaDados" style="width: 405px">
                    Mensagens   <div class="caractereRestante">250</div>
                    <textarea name="txtSugestoes" maxlength="250" placeholder="Sugestões..."></textarea>
                    
                </div>

                <input type="button" value="Enviar">
            </div>
            
        </form>
    </div>

    <?php include_once("footer.php"); ?>
</body>
</html>