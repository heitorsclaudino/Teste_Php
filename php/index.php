<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>Teste PHP</title>
</head>
<body>
    
    <form action="./cadastro.php" method="post">
        <h3>Cadastro de corretor</h3>
        <div>
            <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" required maxlength="11" minlength="11"/>

            <input type="text" id="creci" name="creci" placeholder="Digite seu Creci"  required/>
        </div>

        <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required/>

        <input type="submit" id="btnEnviar" value="Enviar">
    </form>
    <?php
    include_once('./conexao.php');

    if(isset($_SESSION['queryPermission'])){

        //buscando os dados para exibir na próxima tabela
        $query = "SELECT * FROM corretor;";
        $result = mysqli_query($conn, $query);


        if(mysqli_num_rows($result) > 0){
    ?>        
       
    <h3 class="">Tabela de corretores</h3>
    
    <table class="">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Creci</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php

            while($row = mysqli_fetch_assoc($result)){
            echo "<tr>" . "<td>" . $row['nome'] . "</td>"."<td>".$row['cpf']."</td>". "<td>". $row['creci']."</td>". "<td>"."<a class='links' href='./delete.php?id={$row['id']}'>Delete</a>" . "<a class='links' href='./update.php?id={$row['id']}&nome={$row['nome']}&creci={$row['creci']}&cpf={$row['cpf']}'>Atualizar</a>"."</td>". "</tr>";
        }
        ?>
            </tbody>
    </table>
    <?php
    echo "<br> <a href='./apagaTabela.php'>Apagar tabela</a>";
     } else {
            echo "0 linhas registradas.";
        }
    }

    ?>

    <script src="../javascript/validacao.js"></script>
</body>
</html>