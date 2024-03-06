<?php 
    session_start();
    unset($_SESSION["usuario"]);
    unset($_SESSION["cargo"]);
    session_destroy();
    echo
    "<script>
    alert('Conta deslogada com sucesso!')
        location.href='index.php?page=logincadastro';
    </script>";

