<style>
    * {
        font-family: Arial, Helvetica, sans-serif;
    }

    h1 {
        font-size: 35px;
        font-weight: 700;
        color: rgba(26, 1, 29, 0.945);
        padding-top: 30px;
        padding-bottom: 20px;
        margin-left: 40px;
    }

    h2 {
        font-size: 25px;
        margin-left: 40px;
        font-weight: 600;
    }
    .btn{
        margin-left: 40px;
    }
</style>
<?php
$id = $_GET["id"];
$sql = "SELECT * FROM agendamento
            WHERE id={$id};";
$resultado = $conexao->query($sql);
$quantidadeLinhas = $resultado->num_rows;

if ($quantidadeLinhas > 0) {
    $agendamentos = $resultado->fetch_assoc();
    echo "<h1>Você realmente deseja deletar este cadastro? </h1>";
    echo
    "<div class=\"card mt-4\">
                <div class=\"card-body\">
                <h2>ID: {$agendamentos['id']}</h2>
                <h2>Tipo: {$agendamentos['tipo']}</h2>
                <h2>Nome: {$agendamentos['nome']}</h2>
                <h2>Sobrenome: {$agendamentos['sobrenome']}</h2>
                <h2>Telefone: {$agendamentos['telefone']}</h2>
                <h2>Email: {$agendamentos['email']}</h2>
                <h2>Animal: {$agendamentos['animal']}</h2>
                <h2>Especialidade: {$agendamentos['especialidade']}</h2>
                
                    <form action=\"?page=bancodedados\" method=\"post\">
                        <input type=\"hidden\" name=\"acao\" value=\"deletar\">
                        <input type=\"hidden\" name=\"id\" value=\"{$agendamentos['id']}\">
                        <button type=\"submit\" class=\"btn btn-success\">Sim</button>
                        
                    </form>
                    <button class=\"btn btn-danger mt-2\" onclick=\"location.href='?page=areaRestrita'\">Não </button >
                </div>   
            </div>";
} else {
    echo "<p class=\"alert alert-danger mt-4\">Não foi possível encontrar este usuário.</p>";
}
?>