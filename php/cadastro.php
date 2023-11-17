<?php 
include_once('./conexao.php');

$name = $_POST['nome'];
$cpf = $_POST['cpf'];
$creci = $_POST['creci'];

//Validações
if(strlen($name) < 2){
    echo "Faltam caracteres no campo 'Nome'";
    return false;
}
if(strlen($creci) < 2){
    echo "Faltam caracteres no campo 'Creci'";
    return false;
}

//Cadastro
$insert = "INSERT INTO corretor (nome, cpf, creci) VALUES ('$name', '$cpf', '$creci')";


if(mysqli_query($conn, $insert)){
    echo "Operação realizada com sucesso!";
    //agora a query de busca no BD para popular a tabela pode ser realizada
    $_SESSION['queryPermission'] = true;
    header('Location: ./index.php');

} else {
    echo "Falha ao cadastrar os dados.";
}
?>
