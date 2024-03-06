<?php
session_start();
if (empty($_POST) or (empty($_POST["usuario"])) or (empty($_POST["senha"]))) {
    echo
    "<script>
        location.href='?page=areaRestrita'
    </script>";
}
include("config.php");

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM administrador
        WHERE usuario='{$usuario}'
        AND senha = '{$senha}' ";

$resultado = $conexao->query($sql) or die($conexao->error);

$linha = $resultado->fetch_object();
$qtdLinhas = $resultado->num_rows;

if ($qtdLinhas > 0) {
    $_SESSION["usuario"] = $usuario;
    //$_SESSION["cargo"] = $linha->cargo;
    var_dump($_SESSION);
    echo
    "<script>
    alert('Usuario cadastrado com sucesso!')
        location.href='index.php?page=areaRestrita'
    </script>";
} else {
    echo
    "<script>
            alert('Usuario e/ou senha incorreto(s)')
        </script>";
    echo
    "<script>
            location.href='index.php?page=logincadastro'
    </script>";
}
