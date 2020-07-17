<?php

    const ITEM_CRIADO_SUCESSO = "
    <script>
        Swal.fire({
            title: 'Sucesso ao realizar o CADASTRO',
            icon: 'success',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Confirmar'
        }).then((result) => {
            if (result.value) {
                location.reload()
            }
        });
    </script>";

    const ITEM_ATUALIZADO_SUCESSO = "
    <script>
        Swal.fire({
            title: 'Sucesso ao ATUALIZAR o registro',
            icon: 'success',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Confirmar'
        }).then((result) => {
            if (result.value) {
                window.history.back()
            }
        });
    </script>";

    const USUARIO_NIVEL_ATUALIZADO = "
    <script>
        Swal.fire({
            title: 'Sucesso ao ATUALIZAR o registro',
            icon: 'success',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Confirmar'
        }).then((result) => {
            if (result.value) {
                location.reload()
            }
        });
    </script>
    ";

    const ERRO_LOGIN_SENHA = "
    
        <script>
            Swal.fire(
                'Oops...',
                'Login ou senha incorretos!',
                'error'
              )
        </script>";

    const IMAGEM_INVALIDA = "
        <script>
            Swal.fire({
                title: 'IMAGEM INVÁLIDA',
                text: 'Escolha uma imagem válida para ser salva',
                icon: 'warning',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Pode deixar'
            }).then((result) => {
                if (result.value) {
                    location.reload()
                }
            })
        </script>";

?>