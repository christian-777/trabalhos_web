<?php 
    header("Content-Type: application/json");
    include "conexao.php";
    // Select pra verificar nas familias
    // Precisamos do nome da familia do nome cientifico selecionado

    $select="SELECT id_musica.musica, nome.musica, nome.banda FROM musica INNER JOIN banda WHERE cod_banda.musica = id_banda.banda'";

    $res = mysqli_query($con, $select);
    while($linha=mysqli_fetch_assoc($res)){
        $resultado[]= $linha;
    }
    echo json_encode($resultado);
?>
