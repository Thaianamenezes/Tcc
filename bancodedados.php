
<?php

$acaoASerFeita = $_POST["acao"];

switch ($acaoASerFeita) {
    case "cadastrar":
        $tipo = $_POST["tipo"];
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $animal = $_POST["animal"];
        $especialidade = $_POST["especialidade"];


        $sql = "INSERT INTO agendamento(id, tipo, nome, sobrenome, telefone, email, animal, especialidade) 
            VALUES('DEFAULT', '{$tipo}', '{$nome}', '{$sobrenome}', '{$telefone}','{$email}','{$animal}','{$especialidade}')";

        $resultado = $conexao->query($sql);
        
        printf($conexao->error);
        if ($resultado) {
            echo
            "<script>
        alert('Cadastro efetuado com sucesso! Aguarde alguns segundos que enviaremos no seu email mais informações.')   
    </script>";
            echo
            "<script>
        location.href='?page=index.php'
    </script>";
        } else {
            echo
            "<script>
        alert('Seu cadastro ocorreu algum erro. Tente novamente mais tarde!')   
    </script>";
            echo
            "<script>
        location.href='?page=administradores'
    </script>";
        }
        break;
    case "editar":
        $tipo = $_POST["tipo"];
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $animal = $_POST["animal"];
        $especialidade = $_POST["especialidade"];
        $id = $_POST["id"];
        
            $sql = "UPDATE agendamento
                    SET tipo='{$tipo}',
                        nome='{$nome}',
                        sobrenome='{$sobrenome}',
                        telefone='{$telefone}',
                        email='{$email}',
                        animal='{$animal}',
                        especialidade='{$especialidade}'
                    WHERE id={$id}";
            
            $resultado = $conexao->query($sql);

            if($resultado){
                echo 
                "<script>
                    alert(\"Cadastro editado com sucesso!\")
                </script>";
                echo 
                "<script>
                    location.href='?page=areaRestrita'
                </script>";
            }else{
                echo 
                "<script>
                    alert(\"Houve um erro ao tentar editar este cadastro. Tente novamente mais tarde...\")
                </script>";
                echo 
                "<script>
                    location.href='?page=areaRestrita'
                </script>";
            }
        break;
        case "deletar":
            $id = $_POST["id"];
            $sql = "DELETE FROM agendamento
            WHERE id={$id}";

            $resultado = $conexao->query($sql);

            if($resultado){
                echo 
                "<script>
                    alert(\"Cadastro deletado com sucesso!\")
                </script>";
                echo 
                "<script>
                    location.href='?page=areaRestrita'
                </script>";
            }else{
                echo 
                "<script>
                    alert(\"Houve um erro ao tentar deletar este cadastro. Tente novamente mais tarde...\")
                </script>";
                echo 
                "<script>
                    location.href='?page=areaRestrita'
                </script>";
            }
            break;
        }
?>