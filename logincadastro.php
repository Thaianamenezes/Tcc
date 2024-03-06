<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
<div class="login-form">
        <h2>Sistema de Login:</h2>
        <div class="imagem">
            <img src="imagens/loginvet.jpg">
        </div>
        <p>Apenas administradores podem acessar esse acesso.</p>
        <form action="login.php" method="post">

            <div class="mb-3">
                <label for="usuario" class="form-label">Usuário</label>
                <input type="text" class="formulario" name="usuario" placeholder="Digite o seu usuário" required>
            </div>

            <div class="mb-4">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="formulario" name="senha" placeholder="Digite a sua senha" required>
            </div>
            <div class="text-center">
                <br>
                <button type="submit" class="btn">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
