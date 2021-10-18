<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Escreva um numero : <input type="text" name="num">
        <input type="submit" value="Enviar" name="botao"> 
    </form>

    <?php 
        
        if(isset($_POST['botao'])){
            $nome = $_POST['num'];
            print "$nome";
        }
            
        
        

    ?>
</body>
</html>