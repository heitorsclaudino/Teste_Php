<?php
include_once('./conexao.php');

$id = $_GET['id'];
$_SESSION['id'] = $id;

$nome = $_GET['nome'];
$creci = $_GET['creci'];
$cpf = $_GET['cpf'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>Alteração de dados</title>
</head>
<body>
    <form action="./processaUpdate.php" method="post">
        <h3>Atualização de corretor</h3>
        <div>
            <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" required maxlength="11" minlength="11" value=<?php echo $cpf;?>/>

            <input type="text" id="creci" name="creci" placeholder="Digite seu Creci"  required value=<?php echo $creci;?>/>
        </div>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required value=<?php echo $nome;?>/>

        <input type="submit" id="btnEnviar" value="Salvar"></input>
    </form>
</body>
</html>
