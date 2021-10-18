<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma numeros</title>
</head>
<body>
<td class="tede">
    <form action="" method="POST" name="formulario">
        Digite um numero: &nbsp &nbsp &nbsp<input type="text" name="primeiroDigito"><br>
        Digite o segundo numero: <input type="text" name="segundoDigito"><br>
        <input type="submit" value="Enviar" name="but">
    </form>
</td>
    

    <?php 

        $numUm = $_POST['primeiroDigito'];
        $numDois = $_POST['segundoDigito'];
        

        if(isset($_POST['but']) && $numUm == "" && $numDois == ""){
            print "<br>Primeiro e segundo numeros vazios!";
        }else if(isset($_POST['but']) && $numUm == ""){
            print "<br>Primeiro numero vazio!";
        }else if(isset($_POST['but']) && $numDois == ""){
            print "<br>Segundo numero vazio!";
        }else
        if(isset($_POST['but'])){
            $somatorio = $numUm + $numDois;
            print "<br>A soma dos dois numeros eh: $somatorio";
        }
        
    
    ?>
</body>

<style>
    .tede{
        background-color = blue;
    }

</style>
</html>