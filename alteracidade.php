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
</head>
<body>
    <form action="alteracidadeexe.php" method="post">
        <fieldset>
            <legend>CADASTRO DE CIDADES</legend>
            <button><a href="index.html">PÁGINA INICIAL</a></button>
            <button><a href="listarcidade.php">CIDADES CADASTRADAS</a></button>
        <div>
            <label for="nome">nome</label>
            <input type="text" 
                    name="nome" 
                    id="nome"
                    value="<?php echo $row['nome']?>">
        </div>  
        <div>
            <label for="estado">estado</label>
            <select name="estado" id="estado">
                <option value="ac"<?php $row['estado'] == "ac" ? "selected" : "" ?>>AC</option>
                <option value="al"<?php $row['estado'] == "al" ? "selected" : "" ?>>AL</option>
                <option value="am"<?php $row['estado'] == "am" ? "selected" : "" ?>>AM</option>
                <option value="ap"<?php $row['estado'] == "ap" ? "selected" : "" ?>>AP</option>
                <option value="ba"<?php $row['estado'] == "ba" ? "selected" : "" ?>>BA</option>
                <option value="ce"<?php $row['estado'] == "ce" ? "selected" : "" ?>>CE</option>
                <option value="df"<?php $row['estado'] == "df" ? "selected" : "" ?>>DF</option>
                <option value="es"<?php $row['estado'] == "es" ? "selected" : "" ?>>ES</option>
                <option value="go"<?php $row['estado'] == "go" ? "selected" : "" ?>>GO</option>
                <option value="ma"<?php $row['estado'] == "ma" ? "selected" : "" ?>>MA</option>
                <option value="mt"<?php $row['estado'] == "mt" ? "selected" : "" ?>>MT</option>
                <option value="ms"<?php $row['estado'] == "ms" ? "selected" : "" ?>>MS</option>
                <option value="mg"<?php $row['estado'] == "mg" ? "selected" : "" ?>>MG</option>
                <option value="pa"<?php $row['estado'] == "pa" ? "selected" : "" ?>>PA</option>
                <option value="pb"<?php $row['estado'] == "pb" ? "selected" : "" ?>>PB</option>
                <option value="pr"<?php $row['estado'] == "pr" ? "selected" : "" ?>>PR</option>
                <option value="pe"<?php $row['estado'] == "pe" ? "selected" : "" ?>>PE</option>
                <option value="pi"<?php $row['estado'] == "pi" ? "selected" : "" ?>>PI</option>
                <option value="rj"<?php $row['estado'] == "rj" ? "selected" : "" ?>>RJ</option>
                <option value="rn"<?php $row['estado'] == "ac" ? "selected" : "" ?>>RN</option>
                <option value="ro"<?php $row['estado'] == "ro" ? "selected" : "" ?>>RO</option>
                <option value="rs"<?php $row['estado'] == "rs" ? "selected" : "" ?>>RS</option>
                <option value="rr"<?php $row['estado'] == "rr" ? "selected" : "" ?>>RR</option>
                <option value="sc"<?php $row['estado'] == "sc" ? "selected" : "" ?>>SC</option>
                <option value="sp"<?php $row['estado'] == "sp" ? "selected" : "" ?>>SP</option>
                <option value="se"<?php $row['estado'] == "se" ? "selected" : "" ?>>SE</option>
                <option value="to"<?php $row['estado'] == "to" ? "selected" : "" ?>>TO</option>
            </select>
        </div>
        <div>
            <input type="hidden" name="id" value="<?php echo $row['id']?>"> 
            
            <button type="submit">alterar</button>
        </div>
        </fieldset>
    </form>
</body>
</html>
