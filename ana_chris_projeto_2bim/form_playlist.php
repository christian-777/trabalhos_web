<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="jquery-3.5.1.min.js"></script>

            <script>
                $(document).ready(function(){

                        $.post("seleciona_musica.php", function(g){
                            console.log(g);
                            var checkbox="";
                            $.each(g, function(indice, valor){
                                checkbox +="<input class='check' type='checkbox' value='"+valor.id_da_musica+"' name='musicas'> "+valor.nome_musica+"("+valor.nome_banda+")<br />";
                            });
                            $("#receptora").html(checkbox);
                          
                        });
                        
                });
            </script>
        <title>Cadastro playlist</title>
    </head>
    <body>
        <?php 
        include "cabecalho.php";
            if(empty($_POST))
            {
                echo'<form action="form_playlist.php" method="post">
                <input type="text" id="nome_playlist" name="nome_playlist" placeholder="Nome da playlist…. ">
                <button>cadastrar</button>
                <br />
                <div id="receptora">
                </div>
                
                </form>';
            }
            else
            {
                include "inserir_playlist.php";
            }
        ?>
    </body>
</html>