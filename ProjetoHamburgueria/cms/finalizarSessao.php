<?php

session_start();

try {

    session_destroy();

    echo "sucesso";

} catch (Exception $e) {

    echo "erro: ".$e;

}

?>