function validarSenha() {
    const $senha = document.getElementById("senha").value;
    const $confirmarSenha = document.getElementById("confirmarSenha").value;

    if ($senha != $confirmarSenha) {
        $confirmarSenha.setCustomValidity("Senhas diferentes!");

        return false;
    }

    return true;
}