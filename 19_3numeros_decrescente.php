<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tres Números Dec</title>

    <style>
        section{
            padding-top: 8%;
            text-align: center;
        }
        div{
            text-align: center;
            padding-top: 7%;
            padding-bottom: 7%;
            border : solid;
            border-left : green;
            border-right: green;
            margin-left: 30%;
            margin-right: 30%;
            background-color: #F0FFFF;

        }
        input{
            margin: 9px;
        }
        .final{s
            text-align: center;
            padding-top: 40px;
            
        }
        body{
            background-color: #5F9EA0;
            font-family: 'Courier New', monospace;
        }

    </style>
</head>
<body>
    <section>
            <form action="" method="POST">
                <div>
                    Digite três números diferentes <br>
                    <input type="text" name="numb"> <br>
                    <input type="submit" value="Confirmar" name="bttm">
                </div>
            </form>

    </section>

</body>

<?php

    if(isset($_POST['bttm'])){

        $numeros = $_POST['numb'];
        $numeros = str_replace(" ", "", $numeros);
        $qntNum = strlen($numeros);
        if($qntNum > 3 || $qntNum < 3){
            ?>
            <section class='final'>
                Digite TRÊS números!!
            </section>
            <?php
            exit;
        }

        $num1 = substr($numeros, 0, 1);
        $num2 = substr($numeros, 1, 1);
        $num3 = substr($numeros, 2, 2);
        $arrayNum = array($num1, $num2, $num3);
        arsort($arrayNum);

    
        

        if(empty($numeros)){
        ?>
            <section class='final'>
                Digite algo!
            </section>
        <?php
        }else{

        ?>
            <section class='final'>
            <?php
                print "Números em ordem descrescente: <br>";
    
                foreach ($arrayNum as $numero) {
                    print "$numero";
                }
    
            ?>
            </section>
        <?php          
        }
    }
    

?>




</html>