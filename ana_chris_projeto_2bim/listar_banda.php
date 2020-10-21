
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <script src="jquery-3.5.1.min.js"></script>
        <title>Lista Banda</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/index.css">
	    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
        <div class="tabela col-xs-10 offset-xs-1 col-sm-10 offset-sm-10 col-md-15 offset-md-1" id="table">
            <header>
                <h1 class="text-center" class="img-fluid"></h1>
                <h2 class="text-center"><b>Lista de Bandas Cadastradas</b></h2>
            </header>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover table-dark">
                    <thead">
                        <tr>
                            <th> Bandas </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="tabela"></tr>
                    </tbody>
                </table>
            </div>
        </div>
        </table>
        <script src="bootstrap.min.js"></script>
    </body>
</html>
