<?php 
   
    include "conexao.php";
    $nome_playlist = $_POST["nome_playlist"];
    $escolhas = $_POST["musicas"];

    $insert = "INSERT INTO playlist(
                                        nome
                                    ) VALUES (
                                        '$nome_playlist'
                                    )";
mysqli_query($con, $insert)
or die(mysqli_error($con));
    $r ="SELECT * FROM playlist";
   $id= mysqli_insert_id($con);
    for($i=0; $i<sizeof($escolhas); $i++)
    {
        $insert = "INSERT INTO musica_playlist(
                                       cod_musica,
                                       cod_playlist
                                    ) VALUES (
                                        '".$escolhas[$i]."',
                                        '$id'
                                    )";
        mysqli_query($con, $insert)
        or die(mysqli_error($con));
    }
    echo "musica inserida com sucesso";
    echo'<hr /> <a href="form_musica.php">Clique para cadastrar outra musica</a>';
?>