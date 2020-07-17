"use strict"

function cardMenuPermitido (configMenu) {
    return `<li class="itemMenuLista">
        <a href="${configMenu.endereco}.php">
            <div class="menu">
                <figure class="imgIconeMenu">
                    <img src="images/${configMenu.imagem}" alt="Administrar o conteúdo">
                    <figcaption>
                        ${configMenu.nome}
                    </figcaption>
                </figure>
            </div>
        </a>
    </li>`
}

function cardMenuBloqueado () {
    return `<li class="itemMenuLista itemBloqueado"></li>`
}

function validarMenuCompleto (arrConfigMenus) {

    let menuCompleto = "";

    arrConfigMenus.forEach(elementoMenu => {

        if (elementoMenu.permissao == "1") {

            menuCompleto += cardMenuPermitido(elementoMenu);

        } else {

            menuCompleto += cardMenuBloqueado(elementoMenu)

        }

    });
    
    document.getElementById("menuLista").innerHTML = menuCompleto;
}

