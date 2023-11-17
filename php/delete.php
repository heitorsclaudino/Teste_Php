<?php 
include_once("./conexao.php");

    $id = $_GET['id'];
    $query = "DELETE FROM corretor WHERE id='$id'";

    if(mysqli_query($conn, $query)) {
        echo "Dados deletados com sucesso.";
    } else {
        echo 'Falha na operação.';
    }


    
