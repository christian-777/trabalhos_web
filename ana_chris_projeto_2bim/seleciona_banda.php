<?php 
    header("Content-Type: application/json");
    include "conexao.php";
    // Select pra verificar nas familias
    // Precisamos do nome da familia do nome cientifico selecionado

    $select="SELECT id_banda , nome FROM banda";

    $res = mysqli_query($con, $select);
    while($linha=mysqli_fetch_assoc($res)){
        $resultado[]= $linha;
    }
    echo json_encode($resultado);
?>
