<?php

include_once('./conexao.php');

$query = "SELECT * FROM corretor;";
$result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){

        $_SESSION['rowsData'] = $result;
        
        header('Location: ./index.php');
        
    } else {
        echo "0 resultados no banco.";
    }


