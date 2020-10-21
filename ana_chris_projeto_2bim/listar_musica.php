

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <script src="jquery-3.5.1.min.js"></script>
        <title>lista musica</title>

        <script>
            $(document).ready(function(){
                    $.post("seleciona_musica.php", function(g){
                        var tabela="";      
                        $.each(g, function(indice, valor){
                            tabela +="<tr><td>"+valor.nome_musica+"</td><td>"+valor.nome_banda+"</td></tr>";
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
                <th colspan="2">musicas</th>
            </tr>
            <tr>
                <th>nome da musica</th>
                <th>nome da banda</th>
            </tr>
            <tr id="tabela"></tr>
        </table>
    </body>
</html>