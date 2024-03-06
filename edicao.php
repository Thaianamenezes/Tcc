<style>
    * {
        font-family: Arial, Helvetica, sans-serif;
    }

    body {
        background-color: rgba(49, 1, 49, 0.518);
        ;
    }

    h1 {
        font-size: 35px;
        font-weight: 700;
        color: rgba(26, 1, 29, 0.945);
        padding-top: 30px;
        padding-bottom: 20px;
        margin-left: 40px;
    }

    .opcao {
        width: 20px;
    }

    .opcao2 {
        margin-left: 40px;
        margin-right: 5px;
        font-size: 20px;
        font-weight: 600;
        width: 20px;
    }

    .mb-2 {
        margin-left: 40px;
        margin-right: 5px;
        font-size: 20px;
        font-weight: 600;
    }

    .btn {
        margin-left: 40px;
    }

    .btn:hover {
        background-color: rgb(84, 202, 84);
    }

    .escolha {
        margin-left: 40px;
        font-size: 20px;
        font-weight: 600;
        margin-top: 10px;
    }

    .escolha2 {
        background-color: rgb(240, 240, 240);
        border-radius: 5px;
        text-align: center;
        font-weight: 600;
        height: 30px;
    }
</style>

<h1>Pagina de Edição: </h1>

<?php
$id = $_GET["id"];
$sql = "SELECT * FROM agendamento WHERE id={$id}";
$resultado = $conexao->query($sql);
$agendamentos = $resultado->fetch_object();

$tipocadastro = $agendamentos->tipo;
$nomecadastro = $agendamentos->nome;
$sobrenomecadastro = $agendamentos->sobrenome;
$telefonecadastro = $agendamentos->telefone;
$emailcadastro = $agendamentos->email;
$animalcadastro = $agendamentos->animal;
$especialidadecadastro = $agendamentos->especialidade;

?>

<form action="?page=bancodedados" method="post" class="mt-4">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php echo $id ?>">

    <div class="mb-2">
        <label for="nome" class="letra">Nome:</label>
        <input type="text" name="nome" class="form-control" placeholder="Digite o seu nome..." required value="<?php echo $nomecadastro; ?>">
    </div>

    <div class="mb-2">
        <input type="radio" name="tipo" id="iesfut" class="opcao" value="<?php echo $tipocadastro; ?>">Consulta
        <input type="radio" name="tipo" id="iesfut" class="opcao" value="<?php echo $tipocadastro; ?>">Exame
    </div>

    <div class="mb-2">
        <label for="sobrenome" class="letra">Sobrenome: </label>
        <input type="text" name="sobrenome" class="form-control" placeholder="Digite seu sobrenome..." required value="<?php echo $sobrenomecadastro; ?>">
    </div>
    <div class="mb-2">
        <label for="telefone" class="letra">telefone:</label>
        <input type="tel" name="telefone" class="form-control" placeholder="Digite seu telefone..." required value="<?php echo $telefonecadastro; ?>">
    </div>
    <div class="mb-2">
        <label for="email" class="letra">Email:</label>
        <input type="email" name="email" class="form-control" placeholder="Digite seu curso..." required value="<?php echo $emailcadastro; ?>">
    </div>

    <input type="radio" name="animal" id="iesfut" class="opcao2" value="<?php echo $animalcadastro; ?>">Gato
    <input type="radio" name="animal" id="iesfut" class="opcao2" value="<?php echo $animalcadastro; ?>">Cão
    <input type="radio" name="animal" id="iesfut" class="opcao2" value="<?php echo $animalcadastro; ?>">Silvestre
    <br>

    <label for="iest" class="escolha">Especialidade:</label>
    <select name="especialidade" id="iest" class="escolha2">
        <option value="cardiologia" value="<?php echo $especialidadecadastro; ?>">Cardiologia</option>
        <option value="cg" value="<?php echo $especialidadecadastro; ?>">Clínica Geral</option>
        <option value="dermatologia" value="<?php echo $especialidadecadastro; ?>">Dermatologia</option>
        <option value="castracao" value="<?php echo $especialidadecadastro; ?>">Castração</option>
        <option value="cc" value="<?php echo $especialidadecadastro; ?>">Clínica Cirurgica</option>
        <option value="nutricionista" value="<?php echo $especialidadecadastro; ?>">Nutricionista</option>
        <option value="nao-sei" value="<?php echo $especialidadecadastro; ?>">Nenhuma das opções/OUTRA</option>
    </select>
    <br>
    <button type="submit" class="btn btn-success">Editar</button>

</form>