<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../../../jquery-3.5.1.min.js"></script>

            <script>
                $(document).ready(function(){
                    $("#genero").change(function(){
                        //PHP pra buscar
                        $.post("seleciona_genero.php", function(g){
                            option="<option label='Gênero da Banda' />";
                            $.each(g, function(indice, valor){
                                option+="<option value='"+valor.id_genero+"'> "+valor.nome+" </option>";
                            });
                            $("#genero").html(option);
                        });
                    });

                    $("#banda").change(function(){
                        //PHP pra buscar
                        
                        $.post("seleciona_banda.php", function(b){
                            option="<option label='Nome da Banda' />";
                            $.each(b, function(indice, valor){
                                option+="<option value='"+valor.id_banda+"'> "+valor.nome+" </option>";
                            });
                            $("#banda").html(option);
                        });
                    });
                });
            </script>
        <title>Cadastro musica</title>
    </head>
    <body>
        <?php 
        include "cabecalho.php";
            if(empty($_POST))
            {
                echo'<form action="form_musica.php" method="post">
                <input type="text" name="nome_musica" placeholder="Nome da música…. ">
                <br />
                <select name="genero" id="genero">
                        <option label="Gênero da Banda" />
                </select>
                <br />
                <select name="banda" id="banda">
                        <option label="Nome da Banda" />
                </select>
                <br />
                <textarea name="youtube" placeholder="Copie e cole do youtube o código de incorporação do vídeo da música..."></textarea>
                <button>Cadastrar</button>
                <hr />
                </form>';
            }
            else
            {
                include "inserir_musica.php";
            }
        ?>
    </body>
</html>