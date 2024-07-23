<?php
    include('includes/conexao.php');
    $id = $_GET['id'] ;
    $sql = "SELECT * FROM cliente WHERE id=$id";
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
    <form action="alteraclienteexe.php" method="post">
        <fieldset>
            <h1>CADASTRO DE CIDADES</h1>
            <button><a href="index.html">PÁGINA INICIAL</a></button>
            <button><a href="listarcliente.php">CLIENTES CADASTRADOS</a></button>
        <div>
            <label id="text" for="nome">NOME</label>
            <input type="text" 
                    name="nome" 
                    id="nome"
                    value="<?php echo $row['nome']?>">
        </div>  
        <div>
            <label id="text" for="email">EMAIL</label>
            <input  type="text" 
                    name="email" 
                    id="email" 
                    value="<?php echo $row['email']?>">
        </div>  
        <div>
            <label id="text" for="senha">SENHA</label>
            <input  type="text" 
                    name="senha" 
                    id="senha" 
                    value="<?php echo $row['senha']?>">
        </div>  
        <div>
            <label id="text" for="ativo">SITUACAO DO CLIENTE</label>
            <input type="radio" name="ativo" id="ativo" value="1" <?php echo $row['ativo'] == 1 ? "checked" : "" ?>>ATIVO
            <input type="radio" name="ativo" id="ativo" value="0" <?php echo $row['ativo'] == 0 ? "checked" : "" ?>>NAO ATIVO
        </div>  

        <div>
            <label for="cidade">CIDADE</label>
            <select name="cidade" 
                    id="cidade" >
                <?php
                    include('includes/conexao.php');
                    $sql = "SELECT * FROM cidade";
                    #echo $sql;
                    $result = mysqli_query($con, $sql);
                    while($row_cid = mysqli_fetch_array($result)){
                        $sel = $row_cid['id'] == $row['id_cidade'] ? "selected" : "";
                        echo "murilo: ".$sel;
                        echo "<option value='".$row_cid['id']."' ".$sel.">"
                        .$row_cid['nomecidade']."/".$row_cid['estado']
                        ."</option>"; 
                    }
                ?>
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
