<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <?php
        if(empty ($_POST)){
            include('cabecalho_conexao.php');
            $pront = $_GET['pront'];
            $SQL = "SELECT * FROM animal WHERE id=$pront";

            // Executa o comando SQL
            $dados_recuperados = mysqli_query($con, $SQL);

            if(mysqli_num_rows($dados_recuperados) > 0){
                
                while( ($resultado = mysqli_fetch_array($dados_recuperados)) != null) {
                    $nome = $resultado[1];
                    $idade = $resultado[2];
                    $nome_dono = $resultado[3];
                    $telefone = $resultado[4];
                }
                echo '<form action="editar_animal.php" method="POST">
                    <fieldset>
                    <legend>Editar dados dos animais</legend>
                    <p>
                        <label>Nome</label>
                        <input type="text" name="editar_nome" value="'.$nome.'"/>
                    </p>
                    <p>
                        <label>Idade</label>
                        <input type="number" name="editar_idade" value="'.$idade.'"/>
                    </p>
                    <p>
                        <label>Nome do dono</label>
                        <input type="text" name="editar_dono" value="'.$nome_dono.'"/>
                    </p>
                    <p>
                        <label>Telefone</label>
                        <input type="text" name="editar_telefone" value="'.$telefone.'"/>
                    </p>
                    <input type = "hidden" name="id" value="'.$pront.'"/>
                    <p>
                    </p>
                    <p>
                        <input type="submit" value="Enviar"/>
                    </p>
                    </fieldset>
                </form>';
            }
        }else{
            $pront = $_POST['id'];
            $nome2 = $_POST['editar_nome'];
            $idade2 = $_POST['editar_idade'];
            $nome_dono2 = $_POST['editar_dono'];
            $telefone2 = $_POST['editar_telefone'];
            include('cabecalho_conexao.php');
            
            $SQL = "UPDATE animal set nome='$nome2', idade='$idade2', nome_do_dono='$nome_dono2', telefone='$telefone2' WHERE id=$pront";

            include('rodape_conexao.php');
        }
    ?>
</body>
</html>