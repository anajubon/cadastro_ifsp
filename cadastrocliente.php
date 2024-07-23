<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cadastrocliente.css">
</head>
<body>
    <form action="cadastroclienteexe.php" method="post">
        <fieldset>
            <h1>CADASTRO DE CLIENTES</h1>
            <button><a href="index.html">PÁGINA INICIAL</a></button>
            <button><a href="listarcliente.php">CLIENTES CADASTRADOS</a></button>
        <div class="cor">
            <label id="text" for="nome">NOME</label>
            <input  type="text" name="nome" id="nome">
        </div>
        <div class="cor">
            <label id="text" for="email">EMAIL</label>
            <input  type="text" name="email" id="email">
        </div>  
        <div class="cor">
            <label id="text" for="senha">SENHA</label>
            <input  type="text" name="senha" id="senha">
        </div>  
        <div class="cor">
            <label id="text" for="ativo">SITUACAO DO CLIENTE</label>
            <input type="radio" name="ativo" id="ativo" value="1">ATIVO
            <input type="radio" name="ativo" id="ativo" value="0" checked>NAO ATIVO
        </div>  

        <div>
            <label for="cidade">CIDADE</label>
            <select name="cidade" id="cidade">
                <?php
                    include('includes/conexao.php');
                    $sql = "SELECT * FROM cidade";
                    echo $sql;
                    $result = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($result)){
                        echo "<option value='".$row['id']."'>"
                        .$row['nomecidade']."/".$row['estado']
                        ."</option>"; 
                    }
                ?>
            </select>

        </div>
        <div>
            <button type="submit"><a>CADASTRAR</a></button>
        </div>   
        </fieldset>
    </form>
</body>
</html>