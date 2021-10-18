<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir media</title>
    <style>
        div{
            padding-top: 10px;
        }
        div.bermuda{
            text-align: center;
        }

    </style>
</head>
<body>
<div class="bermuda">
    <form action="" method="POST">
    <h2>Exibir media</h2>
        <div>Digite um valor:   <input type="text" name="dig1"></div>
        <div>Digite outro valor:<input type="text" name="dig2"></div>
        <div><input type="submit" value="Calcular" name="bttn"></div>
    </form>


    <?php

        echo "row 30| $dig1";
        $valor1 = $_GET['dig1'];
        
        $valor2 = $_GET['dig2'];
        $media = ($valor1 + $valor2) / 2;

        if (isset($_GET['bttn'])) {
            print "<div>A media e: $media<div>";
        }

        

    ?>
</div>
    
</body>
</html>