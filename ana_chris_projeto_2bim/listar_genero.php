<?php
    function select(){
        include "conexao.php";
        include "cabecalho.php";
        $select = "SELECT id_genero, nome FROM genero ORDER BY genero";
        $res = mysqli_query($con, $select);
        while($linha = mysqli_fetch_assoc($res)){
            echo "<option value=".$linha["genero"].">".$linha["genero"]."</option>";
        };
    }

    function ul(){
        include "conexao.php";
        
        $select = "SELECT id_genero, nome FROM genero";

        if($_POST){
            $select .= "WHERE (1=1) ";
            if($_POST["genero"]!=""){
                $nome = $_POST["genero"];
                $select .= "AND genero like '%$nome%' ";
            }
        }

        $select .= "ORDER BY genero";

        $res=mysqli_query($con, $select) or die($select);
        while($linha=mysqli_fetch_assoc($res)){
            echo "<tr>";
            echo"<td>".$linha["genero"]."</td>"; 
            echo "</tr>";
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Gênero</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>  
<?php include "cabecalho.php";?>
        <div>   
            <form action="listar_genero.php" method="post">
            Filtrar por:<br />
            <input type="text" name="genero" placeholder="Gênero…."> 
            <button>Pesquisar</button><br /> <hr />
        </div>
            <ul>
                <li></li>
            </ul>
            <?php ul(); ?>
    </body>
</html>