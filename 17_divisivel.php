<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Div por 10 5 2</title>
    <style>
        body{
            background-color: SpringGreen;
        }
        .numeroarea{
            border: solid;
            border-width : 1px;
            border-color : Olive;
            background-color: PaleGreen;
        }
        field{
            font-family: "Lucida Console", "Courier New";
            text-align: center;
        }
        .result{
            text-align: center;
            padding-top: 3%;
            font-family: "Lucida Console", "Courier New";
        }
    </style>
</head>
<body>
    <section style=padding-top:15%>
        <div style="margin:auto; text-align:center;">
            <form action="" method="POST">
                <field>Digite um número inteiro: </field><br>
                <div><input type="text" name='numb' class="numeroarea"></div><br>
                <input type="submit" value="Confirmar" name="bttn">
            </form>
        </div>
    </section>

    <?php

        if(isset($_POST['bttn'])){
            $numero = $_POST['numb'];
        ?> <div class="result"> <?php
                try {
                    if ($numero % 10 == 0) {
                        print "<field>Número divisível por 10!</field><br>";
                    }elseif($numero % 5 == 0){
                        print "<field>Número divisível por 5!</field><br>";
                    }elseif($numero % 2 == 0){
                        print "<field>Número divisível por 2!</field><br>";
                    }else{
                        print "<field>Número não é divisível por 10, 5 nem 2.</field>";
                    }
                } catch (\Throwable $th) {
                    print "Digite números, por favor!";
                }
            ?>
            </div>
            <?php
        }
        








    ?>
</body>
</html>