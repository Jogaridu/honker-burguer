$(document).ready(function() {

    const $menu = document.querySelectorAll(".menuCuriosidade li");
    console.log($menu);
    const $conteudo = document.querySelectorAll("#curiosidades>section");
    console.log($conteudo);
    const exibir = (div) => {
        $conteudo.forEach(div => div.classList.remove("mostrarConteudo"));
        div.classList.add("mostrarConteudo");
    }

    for (let i=0; i <= 4; i++) {
        $menu[i].addEventListener("click", () => {
            exibir ($conteudo[i]);
            $menu.forEach(Element => Element.classList.remove("selecionado"));
            $menu[i].classList.add("selecionado");
            });
    }

});