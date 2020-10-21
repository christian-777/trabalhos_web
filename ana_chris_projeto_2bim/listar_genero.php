
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <script src="jquery-3.5.1.min.js"></script>
        <title>lista banda</title>

        <script>
            $(document).ready(function(){
                    $.getJSON("seleciona_genero.php", function(g){
                        var tabela="";      
                        console.log(g);
                        $.each(g, function(indice, valor){
                            tabela +="<tr>"+valor.nome+"</tr>";
                        });
                        $("#tabela").html(tabela);
                    });
            });
        </script>

    </head>
    <body>
        <?php
            include "cabecalho.php";
        ?>
        <table border="1px">
            <tr>
                <th>Generos</th>
            </tr>
            <tr id="tabela"></tr>
        </table>
    </body>
</html>