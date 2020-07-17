<?php

function conexaoMysql () {
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'dbContatos';
    
    $conexao = mysqli_connect($server, $user, $password, $database);

    return $conexao;
}

?>