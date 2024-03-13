<!DOCTYPE html>
<html>
<head>
 
    <title>Avaliação</title>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
 
</head>
<body>
 
    <form method="get" action="">
        <label>Digite um número</label>
        <input name="number" type="number">
        <button name="res">Calcular Resultado</button>
    </form>
   
    <?php
 
        if (isset($_GET['res'])) {
            $number = $_GET['number'];
            if ($number > 0) {
                echo "<br>O número é positivo.";
            } elseif ($number < 0) {
                echo "<br>O número é negativo.";
            } else {
                echo "<br>O número é neutro (zero).";
            }
 
        }
    ?>
 
</body>
</html>
