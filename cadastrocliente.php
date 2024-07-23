<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('includes/conexao.php');
    $nome = $_POST['nome'];
    $estado = $_POST['email'];
    $estado = $_POST['senha'];
    echo "<h1>dados do cliente</h1>";
    echo "nome: $nome <br>";  
    echo "estado: $email <br>";  
    echo "senha: $email <br>"; 
    
    $sql = "INSERT INTO cliente (nome, email, senha)";
    $sql.= "VALUES('".$nome."', '".$email."', '".$senha."')";
    echo $sql;

    $result = mysqli_query($con, $sql);
    if($result){
        echo"<h2>dados cadastrados com sucesso!</h2>";
    }
    else{
        echo"<h2>erro ao cadastrar</h2>";
        echo mysqli_error($con);
    }
    
    ?>
</body>
</html>