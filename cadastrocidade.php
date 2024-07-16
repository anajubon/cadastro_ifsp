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
    $estado = $_POST['estado'];
    echo "<h1>dados da cidade</h1>";
    echo "nome: $nome <br>";  
    echo "estado: $estado <br>";   
    
    $sql = "INSERT INTO cidade (nome, estado)";
    $sql.= "VALUES('".$nome."', '".$estado."')";
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