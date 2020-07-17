

const mascaras = {

    apenasLetra(value) {
        return value.replace(/[^a-zA-z À-ÿ]/g, "");
    },

    apenasNumero(value) {
        return value.replace(/[a-zA-z À-ÿ]/g, "");;
    }
}

document.querySelectorAll("input").forEach ( input => {

    const atributoDataJs = input.dataset.js;
    
    input.addEventListener("input", (evento) => {
        
        evento.target.value = mascaras[atributoDataJs](input.value);

    });
}
);


