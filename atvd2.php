<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Números Redondos</title>
</head>
<body>
 
    <form method="get" action="">
        <label>Digite um número</label>
        <input name="number" type="number">
        <button name="botao" type="submit">Verificar</button>
    </form>
   
    <?php

        if (isset($_GET['botao'])) {
            $number = $_GET['number'];
            $sqrt = sqrt($number);
            if (substr($number, -1) == 0) {
                echo "<br>O número é redondo (quadrado perfeito).";
            } else {
                echo "<br>O número não é redondo (não é quadrado perfeito).";
            }
        }
    ?>
 
</body>
</html>
