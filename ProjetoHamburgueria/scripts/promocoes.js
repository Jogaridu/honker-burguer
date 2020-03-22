const arrBotoes = document.querySelectorAll(".btnCurtir");
arrBotoes.forEach(element => {
    element.addEventListener('click', (e) => {
        const caixaMsg = "<p class='formatarTexto caixaAgradecimento'>Obrigado pela avaliação :D</p>";

        
        const caixa = e.target.parentNode;
        caixa.innerHTML = caixaMsg;

    })
});

        

