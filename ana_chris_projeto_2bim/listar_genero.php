<?php
    function select(){
        include "conexao.php";
        include "cabecalho.php";
        $select = "SELECT nome_genero FROM genero ORDER BY nome_genero";
        $res = mysqli_query($con, $select);
        while($linha = mysqli_fetch_assoc($res)){
            echo "<option value=".$linha["nome_genero"].">".$linha["nome_genero"]."</option>";
        };
    }

    function table(){
        include "conexao.php";
        
        $select = "SELECT genero.nome_genero FROM genero ";

        if($_POST){
            $select .= "WHERE (1=1) ";
            if($_POST["nome_genero"]!=""){
                $nome = $_POST["nome_genero"];
                $select .= "AND genero.nome_genero like '%$nome%' ";
            }
        }

        $select .= "ORDER BY nome_genero";

        $res=mysqli_query($con, $select) or die($select);
        while($linha=mysqli_fetch_assoc($res)){
            echo "<tr>";
            echo"<td>".$linha["nome_genero"]."</td>";
            echo "</tr>";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <table border="1px">

        <div>   
            <form action="genero.php" method="post">
            Filtrar por:<br />
            <br /><br />
            <input type="text" name="nome_genero" placeholder="Nome gênero…."> 
            <button>Filtrar</button><br /> <hr />
        </div>
            <?php
                echo "<ul>
                    <li>'.$nome_genero.'</li>
                </ul>";
            ?>
        </table>
    </body>
</html>