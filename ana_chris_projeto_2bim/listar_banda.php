
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <script src="jquery-3.5.1.min.js"></script>
        <title>lista banda</title>

        <script>
            $(document).ready(function(){
                    var id= 0;
                    $.post("seleciona_banda.php", {"id":id}, function(g){
                        var tabela="";      
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
                <th>Bandas</th>
            </tr>
            <tr id="tabela"></tr>
        </table>
    </body>
</html>