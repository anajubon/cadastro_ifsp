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
    $sql = "SELECT *FROM cidade";
    //retorna consulta
    $result = mysqli_query($con, $sql);
    ?>

    <h1>CIDADES CADASTRADAS</h1>
    <button><a href="index.html">PÁGINA INICIAL</a></button>
    <button><a href="cadastrocidade.html">CADASTRAR CIDADE</a></button>
   
    <table align="center" border="1" width="500"> 
        <tr>
        <th>código</th>
        <th>nome</th>
        <th>estado</th>
        <th>alterar</th>
        <th>deletar</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>".$row['estado']."</td>";
                echo "<td><a href='alteracidade.php?id=".$row['id']."'>alterar</a></td>";
                echo "<td><a href='deletacidade.php?id=".$row['id']."'>deletar</a></td>";
                echo "</tr>";
            }
        ?>    
        </table>
</body>
</html>