<?php
include_once('./conexao.php');

$id = $_SESSION['id'];

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$creci = $_POST['creci'];

//Validações
if(strlen($nome) < 2){
    echo "<br>Faltam caracteres no campo 'Nome'";
    return;
}
if(strlen($creci) < 2){
    echo "<br>Faltam caracteres no campo 'Creci'";
    return;
}

include_once('./conexao.php');

$query = "UPDATE corretor SET nome='$nome', cpf='$cpf', creci='$creci' WHERE id='$id'";

if(mysqli_query($conn, $query)){
    echo "Dados atualizados com sucesso!";
} else {
    echo "Falha na operação.";
}