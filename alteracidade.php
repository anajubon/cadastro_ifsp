<?php
    include('includes/conexao.php');
    $id = $_GET['id'] ;
    $sql = "SELECT * FROM cidade WHERE id=$id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="alteracidade.css">
</head>
<body>
    <form action="alteracidadeexe.php" method="post">
        <fieldset>
            <h1>CADASTRO DE CIDADES</h1>
            <button><a href="index.html">PÁGINA INICIAL</a></button>
            <button><a href="listarcidade.php">CIDADES CADASTRADAS</a></button>
        <div>
            <label id="text" for="nome">NOME</label>
            <input type="text" 
                    name="nome" 
                    id="nome"
                    value="<?php echo $row['nome']?>">
        </div>  
        <div>
            <label id="text" for="estado">ESTADO</label>
            <select name="estado" id="estado">
                <option value="AC"<?php $row['estado'] == "AC" ? "selected" : "" ?>>AC</option>
                <option value="AL"<?php $row['estado'] == "AL" ? "selected" : "" ?>>AL</option>
                <option value="AM"<?php $row['estado'] == "AM" ? "selected" : "" ?>>AM</option>
                <option value="AP"<?php $row['estado'] == "AP" ? "selected" : "" ?>>AP</option>
                <option value="BA"<?php $row['estado'] == "BA" ? "selected" : "" ?>>BA</option>
                <option value="CE"<?php $row['estado'] == "CE" ? "selected" : "" ?>>CE</option>
                <option value="DF"<?php $row['estado'] == "DF" ? "selected" : "" ?>>DF</option>
                <option value="ES"<?php $row['estado'] == "ES" ? "selected" : "" ?>>ES</option>
                <option value="GO"<?php $row['estado'] == "GO" ? "selected" : "" ?>>GO</option>
                <option value="MA"<?php $row['estado'] == "MA" ? "selected" : "" ?>>MA</option>
                <option value="MT"<?php $row['estado'] == "MT" ? "selected" : "" ?>>MT</option>
                <option value="MS"<?php $row['estado'] == "MS" ? "selected" : "" ?>>MS</option>
                <option value="MG"<?php $row['estado'] == "MG" ? "selected" : "" ?>>MG</option>
                <option value="PA"<?php $row['estado'] == "PA" ? "selected" : "" ?>>PA</option>
                <option value="PB"<?php $row['estado'] == "PB" ? "selected" : "" ?>>PB</option>
                <option value="PR"<?php $row['estado'] == "PR" ? "selected" : "" ?>>PR</option>
                <option value="PE"<?php $row['estado'] == "PE" ? "selected" : "" ?>>PE</option>
                <option value="PI"<?php $row['estado'] == "PI" ? "selected" : "" ?>>PI</option>
                <option value="RJ"<?php $row['estado'] == "RJ" ? "selected" : "" ?>>RJ</option>
                <option value="RN"<?php $row['estado'] == "RN" ? "selected" : "" ?>>RN</option>
                <option value="RO"<?php $row['estado'] == "RO" ? "selected" : "" ?>>RO</option>
                <option value="RS"<?php $row['estado'] == "RS" ? "selected" : "" ?>>RS</option>
                <option value="RR"<?php $row['estado'] == "RR" ? "selected" : "" ?>>RR</option>
                <option value="SC"<?php $row['estado'] == "SC" ? "selected" : "" ?>>SC</option>
                <option value="SP"<?php $row['estado'] == "SP" ? "selected" : "" ?>>SP</option>
                <option value="SE"<?php $row['estado'] == "SE" ? "selected" : "" ?>>SE</option>
                <option value="TO"<?php $row['estado'] == "TO" ? "selected" : "" ?>>TO</option>
            </select>
        </div>
        <div>
            <input type="hidden" name="id" value="<?php echo $row['id']?>"> 

            <button type="submit"><a>ALTERAR</a></button>
        </div>
        </fieldset>
    </form>
</body>
</html>
