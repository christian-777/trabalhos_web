<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="jquery-3.5.1.min.js"></script>

            <script>
            var checkbox="";
                $(document).ready(function(){
                  
                        //PHP pra buscar
                        
                        $.post("seleciona_musica.php", function(g){
                            $.each(g, function(indice, valor){
                                checkbox+="<input type='checkbox' value='"+valor.id_musica+"' name='musicas'> "+valor.nome.musica+"("+valor.nome.banda+")";
                            });
                            $("#receptora").html(checkbox);
                        });
                    

                        //select id_musica.musica, nome.musica , nome. banda from musica inner join banda where cod_banda.musica = id_banda.banda 
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
                <br />
                <div id="receptora">
                </div>
                </form>';
            }
            else
            {
                include "inserir_musica.php";
            }
        ?>
    </body>
</html>