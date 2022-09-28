<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!--EJERCICIO 1-->
    <div>
        <h1>Ejercicio 1</h1>
        <?php
        
        for ($contador = 1; $contador < 101; $contador++) {
            echo $contador;?>
            <br><hr><?php
        }
        ?>

    </div>
    <!--EJERCICIO 2-->    
    <div>
        <h1>Ejercicio 2</h1>
        <?php
        
        for ($contador = 100; $contador > 0; $contador--) {
            echo $contador;?>
            <br><hr><?php
        }
        ?>

    </div>
    <!--EJERCICIO 3-->
    <div>
        <h1>Ejercicio 3</h1>
        <?php
        
        for ($contador = 2; $contador < 101; $contador= $contador +2) {
            echo $contador;?>
            <br><hr><?php
        }
        ?>

    </div>
    
    <!--EJERCICIO 4-->    
    <div>
        <h1>Ejercicio 4</h1>
        <?php
        
        for ($contador = 1; $contador < 101; $contador= $contador +2) {
            echo $contador;?>
            <br><hr><?php
        }
        ?>

    </div>
    <!--EJERCICIO 5-->     
    <div>
        <h1>Ejercicio 5</h1>
        <?php
        $suma = 0;
        for ($i = 1; $i <= 20; $i++) {
            $suma = $suma + $i;
            echo $suma;
              ?>
            <br><hr><?php
        }
        ?>

    </div>

    <!--EJERCICIO 6-->     
    <div>
        <h1>Ejercicio 6</h1>
        <?php
        $suma = 0;
        for ($i = 2; $i <= 20; $i = $i +2) {
            $suma = $suma + $i;
            echo $suma;
              ?>
            <br><hr><?php
        }
        ?>

    </div>
</body>

</html>