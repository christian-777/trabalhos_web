
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
                        var lista="";      
                        $.each(g, function(indice, valor){
                            lista +="<ul><li>"+valor.nome+ "-" +valor.id_banda+  "</li></ul>";
                        });
                        $("#lista").html(lista);
                    });

                    $("#banda").keyup(function(){
                    //PHP pra buscar
                    $.post("seleciona_genero.php", function(g){
                        option="<option label='Gênero da Banda' />";
                        $.each(g, function(indice, valor){
                            option+="<option value='"+valor.id_genero+"'> "+valor.nome+" </option>";
                        });
                        $("#genero").html(option);
                    });
                });
            });
        </script>

        <?php
            function lista(){

            include "conexao.php";

            $select = "SELECT genero.nome as nome_genero FROM genero";

            if($_POST){
                $select .= "WHERE (1=1) ";
                if($_POST["nome"]!=""){
                    $nome = $_POST["nome"];
                    $select .= "AND genero.nome like '%$nome%' ";
                }
            }

            $select .= "ORDER BY nome_genero";

            $res=mysqli_query($con, $select) or die($select);
            while($linha=mysqli_fetch_assoc($res)){
                echo "<ul>";
                echo"<li>".$linha["nome_genero"]."</li>";
                echo "</ul>";
            }
        }
        ?>

    </head>
    <body>
        <?php
            include "cabecalho.php";
        ?>
        <div class="login-form col-xs-1 offset-xs-1
            col-sm-2 offset-sm-5 col-md-2 offset-md-5">
            <div class="form-row align-items-center">
                <div class="col-auto my-2">
                <header>
                    <h1 class="text-center" class="img-fluid"></h1>
                    <h2 class="text-center"><b>Lista de Bandas Cadastrados</b></h2>
                </header>
                <form method="post">
                    <div class="form-group">
                        <div class="input-group" >
                            <select class="custom-select mr-sm-2" id="banda" class="text-center">
                                <option selected>Gênero da Banda...</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
				        <div class="input-group" >
                            <input type="text" name="genero" placeholder="Filtrar visualizações de gêneros...">
                            <button type="submit" class="btn btn-primary">Filtrar</button>
                        </div>
                    </div>
                    <hr /><hr />      
        <div id="lista" class="text-center">
        <?php
            lista();
        ?>      
         </div>
            </div>
        </div>            
        </form>
        <script src="bootstrap.min.js"></script>
    </body>
</html>


