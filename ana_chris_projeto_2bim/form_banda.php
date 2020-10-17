
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="jquery-3.5.1.min.js"></script>

        <script>
            $(document).ready(function(){
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

    <title>Cadastro banda</title>
</head>
<body>
    <?php 
        include "cabecalho.php";
        if(empty($_POST))
        {
            echo'<form action="form_banda.php" method="post">
            <input type="text" id="banda" name="banda" placeholder="Nome da banda...">
                <select name="genero" id="genero">
                    <option label="Gênero da Banda" />
                </select>
                <br>
                <button>Cadastrar</button>
                <hr />
            </form>';
        }
        else
        {
            include "inserir_banda.php";
        }
    ?>
</body>
</html>