<style>

    body{
        background-color: rgba(49, 1, 49, 0.518);
    }
    h1{
        font-weight: 700;
        text-align: center;
        margin-top: 30px;
        font-size: 30px;
        color: rgba(26, 1, 29, 0.945);
    }
    h2{
        font-size: 25px;
        font-weight: 600;
        margin-left: 20px;
    }
    .btn{
        margin-top: 20px;
    }
</style>

<?php 
    session_start();
    if(empty($_SESSION)){
        echo
        "<script>
            alert('Acesso negado,somente adminitradores pode acessa essa parte,se você é administrador acesse a pagina de login!')
        </script>";
        echo
        "<script>
            location.href='index.php'
        </script>";
    }else{
        "<script>
            alert('Acesso permitido!')
        </script>";
    }
?>
<h1>Usuários cadastrados: </h1>

<?php 
$sql = "SELECT * FROM agendamento;";

$resultado = $conexao->query($sql);

$qtdLinhas = $resultado->num_rows;

if ($qtdLinhas > 0) {
    while ($agendamentos = $resultado->fetch_assoc()) {
        echo
        
        "<div class='card mt-4'>
                    <div class='card-body'>
                        <h2>ID: {$agendamentos['id']}</h2>
                        <h2>Tipo de agendamento: {$agendamentos['tipo']}</h2>
                        <h2>Nome: {$agendamentos['nome']}</h2>
                        <h2>Sobrenome: {$agendamentos['sobrenome']}</h2>
                        <h2>Telefone: {$agendamentos['telefone']}</h2>
                        <h2>Email: {$agendamentos['email']}</h2>
                        <h2>Animal: {$agendamentos['animal']}</h2>
                        <h2>Especialidade: {$agendamentos['especialidade']}</h2>
                        
                        <button class=\"btn btn-success\" onclick=\"location.href='?page=edicao&id={$agendamentos['id']}'\">Editar</button>
                        <button class=\"btn btn-danger\" onclick=\"location.href='?page=exclusao&id={$agendamentos['id']}'\">Excluir</button>

                    </div>
                </div>";
    }
} else {
    echo "<p class=\"alert alert-danger mt-4\">Não há nenhum cadastro no sistema.</p>";
}

?>


