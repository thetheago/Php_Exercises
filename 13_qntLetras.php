<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quantida letras</title>
    <style>
        body{
            background-color: Plum;
        }
        textarea{
            border: solid;
            border-width : 1px;
            border-color : blue;
            background-color: Thistle;
        }
        field{
            font-family: "Lucida Console", "Courier New";
        }
    </style>
</head>
<body>
    <section style=padding-top:15%>
        <div style="margin:auto; text-align:center;">
            <form action="" method="POST">
                <field>Insira seu texto: </field><br>
                <textarea name="texto" id="" cols="30" rows="3" ></textarea> <br>
                <input type="submit" value="Enviar" name="bttn">
            </form>
        </div>
        <div style="margin:auto; text-align:center; padding-top:2%">

        

    

        <?php  

        if(isset($_POST['bttn'])){
            $texto = $_POST['texto'];

            $texto = preg_replace("/\s+/", "", $texto);
            $total_caracter = strlen($texto);

            @$array[$total_caracter];
            
            $somaCount = 1;
            for ($i=0; $i < $total_caracter; $i++) { 

                $array[$i] = $somaCount;
                $somaCount++;
            }

            for ($i=0; $i < $total_caracter ; $i++) { 
                print "<field>$array[$i]</field> ";
            }
        
        }
        
        ?>

        </div>
    </section>
</body>
</html>