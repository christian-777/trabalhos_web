<?php
        include "conexao.php";
        include "cabecalho.php";

    function a(){
        include "conexao.php";
        
        $select = "SELECT genero FROM genero ";

        if($_POST){
            $select .= "WHERE (1=1) ";
            if($_POST["genero"]!=""){
                $nome = $_POST["genero"];
                $select .= "AND genero like '%$nome%' ";
            }
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="jquery-3.5.1.min.js"></script>
        <script>
                $(document).ready(function(){

                        $.post("seleciona_genero.php", function(g){
                            console.log(g);
                            var ul="";
                            $.each(g, function(indice, valor){
                                ul +="<ul><li> "+valor.genero+"</li></ul><br />";
                            });
                            $("#receptora").html(ul);
                          
                        });
                        
                });
        </script>
    </head>
    <body>
        <div>   
            <form action="listar_genero.php" method="post">
            Filtrar por:<br />
            <br /><br />
            <input type="text" name="genero" placeholder="Filtrar visualização de gêneros..."> 
            <button>Filtrar</button><br /> <hr />
        </div>
            <?php
                echo "<ul>
                    <li>".$genero."</li>
                </ul>";
            ?>
    </body>
</html>