<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practico 2</title>
</head>
<body>
    <?php
    $n = 3;
    if ($n > 0) {
        echo "$n es un número positivo";
    } else {
        echo "$n no es un número positivo";
    }
    ?>
    <br>
    <hr>
    <?php
    $n = 5;
    if ($n > 1 && $n < 10) {
        echo "$n es un número entre 1 y 10";
    } else {
        echo "$n no es un número entre 1 y 10";
    }
    ?>
    <br>
    <hr>
    <?php
     $n = 11;
     if ($n > 10 || $n < 2) {
         echo "$n es un número mayor que 10 o menor que 2";
     } else {
         echo "$n no es un número mayor que 10 o menor que 2";
     }
    ?>
    <br>
    <hr>
    <?php
    $numero1 = 2;
    $numero2 = 8;
    if ($numero1 > $numero2) {
        echo $numero1 + $numero2;?>
        <hr>
        <?php
        echo $numero1 - $numero2;
    } elseif ($numero1 < $numero2) {
        echo $numero1 * $numero2;?>
        <hr>
        <?php
        echo $numero1 / $numero2;
        ?>
        <hr>
        <?php
        echo $numero1 % $numero2;
    } else {
        echo "Los números ingresados son iguales";
    }
    ?>
    <hr>
    
    
    
    </body>
</html>