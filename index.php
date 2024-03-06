<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Clinica Veterinaria</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="logo">
            <img src="imagens/logo.png">
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

            <div class="navbar-nav">
                <a class="nav-link" href="index.php">Página Inicial</a>
                <a class="nav-link" href="?page=servicos">Serviços</a>
                <a class="nav-link" href="?page=equipe">Equipe</a>
                <a class="nav-link" href="?page=cadastro">Cadastro</a>
                <a class="nav-link" href="?page=areaRestrita">Acesso Restrito</a>
                <button><a href="?page=logincadastro" class="nav">login</a></button>
                <button><a href="logout.php" class="nav">Sair</a></button>

            </div>
        </div>
    </nav>
    <?php
    $paginaParaCarregar = $_GET["page"] ?? "apresentacao";

    include("config.php");
    switch ($paginaParaCarregar) {
        case "bancodedados":
            include("bancodedados.php");
            break;
        case "equipe":
            include("equipe.php");
            break;
        case "servicos":
            include("servicos.php");
            break;
        case "logincadastro":
            include("logincadastro.php");
            break;
        case "cadastro":
            include("cadastro.php");
            break;
        case "areaRestrita":
            include("areaRestrita.php");
            break;
        case "edicao":
            include("edicao.php");
            break;
        case "exclusao":
            include("exclusao.php");
            break;
        default:
            include("apresentacao.php");
    }
    ?>

</body>

</html>