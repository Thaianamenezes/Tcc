
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastros.css">
    <title>Cadastro</title>
</head>
<body>
    <h1>Agendamento: </h1>

    <form action="?page=bancodedados" method="post" class="mt-4">
        <input type="hidden" name="acao" value="cadastrar">

        <div class="pagina">
            <label for="nome" class="letra">Nome:</label>
            <input type="text" name="nome" class="form-control" placeholder="Digite o seu nome..." required>
        </div>

        <div class="pagina">
            <input type="radio" name="tipo" class="opcao" value="Consulta" required>Consulta
            <input type="radio" name="tipo" class="opcao" value="Exame" required>Exame
        </div>

        <div class="pagina">
            <label for="sobrenome" class="letra">Sobrenome: </label>
            <input type="text" name="sobrenome" class="form-control" placeholder="Digite seu sobrenome..." required>
        </div>

        <div class="pagina">
            <label for="telefone" class="letra">Telefone:</label>
            <input type="tel" name="telefone" class="form-control" placeholder="Digite seu telefone..." required>
        </div>

        <div class="pagina">
            <label for="email" class="letra">Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Digite seu curso..." required>
        </div>
        <div class="pagina">
            <input type="radio" name="animal" class="opcao" value="Gato" required>Gato
            <input type="radio" name="animal" class="opcao" value="Cao" required>Cão
            <input type="radio" name="animal" class="opcao" value="Silvestre" required>Silvestre
            <br>
        </div>
        <label for="iest" class="opcao2">Especialidade:</label>
        <select name="especialidade" id="iest" class="opcao3">
            <option value="cardiologia">Cardiologia</option>
            <option value="cg">Clínica Geral</option>
            <option value="dermatologia">Dermatologia</option>
            <option value="castracao">Castração</option>
            <option value="cc">Clínica Cirurgica</option>
            <option value="nutricionista">Nutricionista</option>
            <option value="nao-sei">Nenhuma das opções/OUTRA</option>
        </select>
        <br><br>
        <button type="submit" class="btn">Cadastrar</button>
      

    </form>
</body>

</html>