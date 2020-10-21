<?php 
    header("Content-Type: application/json");
    include "conexao.php";
    $id= $_POST["id"];
    // Select pra verificar nas familias
    // Precisamos do nome da familia do nome cientifico selecionado
    if($id !=0){
        $select="SELECT id_banda , nome FROM banda where cod_genero = '$id'";
    }
    else
    {
        $select="SELECT id_banda , nome FROM banda";
    }
    $res = mysqli_query($con, $select) or die(mysqli_error($con));
    while($linha=mysqli_fetch_assoc($res)){
        $resultado[]= $linha;
    }
    echo json_encode($resultado);
?>
