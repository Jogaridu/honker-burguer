<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <input id="nome" type="text" name="txtNome" maxlength="25" placeholder="Insira seu nome aqui" required>
                </div>

                <div class="caixaEntradaDados">
                    Telefone
                    <input id="telefone" type="tel" name="txtTelefone" maxlength="15" placeholder="Insira seu telefone aqui">
                </div>

                <div class="caixaEntradaDados">
                    Celular
                    <input id="celular" type="tel" name="txtNome" maxlength="14" placeholder="Insira seu número aqui" required>
                </div>

                <div class="caixaEntradaDados">
                    Email
                    <input type="email" name="txtNome" maxlength="50" placeholder="email@gmail.com" required>
                </div>

                <div class="caixaEntradaDados">
                    Sexo:
                    
                    <input id="masculino" type="radio" name="rdoSexo" value="M" checked> <label for="masculino">MASCULINO</label> 

                    <input id="feminino" type="radio" name="rdoSexo" value="F"> <label for="feminino">FEMININO</label>
                </div>

                <div class="caixaEntradaDados">
                    Profissão
                    <input id="profissao" type="text" name="txtNome" maxlength="20" placeholder="Insira sua profissão aqui" required>
                </div>
            </div>
            
            <div id="caixaSugestoes">
                <h3>Sugestões ou Contatos</h3>
                <div class="caixaEntradaDados">
                    Home Page
                    <input type="url" name="txtNome" maxlength="100" placeholder="Insira sua Home Page aqui">
                </div>

                <div class="caixaEntradaDados">
                    Link Facebook
                    <input type="url" name="txtNome" maxlength="50" placeholder="Insira seu link do Facebook aqui">
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
                    <textarea name="txtSugestoes" maxlength="250" placeholder="Insira sua mensagem aqui..." required></textarea>
                    
                </div>

                <input type="submit" value="Enviar">
            </div>
            
        </form>
    </div>

    <?php include_once("footer.php"); ?>

    <script src="scripts/jquery-1.11.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="scripts/contatos.js"></script>
    <script src="scripts/mobile.js"></script>
</body>
</html>