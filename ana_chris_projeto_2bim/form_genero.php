<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Gênero</title>
</head>
<body>  
    <?php
        include "cabecalho.php";
        if(empty($_POST))
        {
            echo'<form action="form_genero.php" method="post">
            <input type="text" name="genero" placeholder="Nome do gênero...">
            <button>Cadastrar Gênero</button>
            <hr />
            </form>';
        }
        else
        {
            include "inserir_genero.php";
        }
    ?>
</body>
</html>