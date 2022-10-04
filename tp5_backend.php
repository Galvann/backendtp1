<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP 4</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <?php
    /* Ejercicio 1 */
    $numpares = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20];
    for ($i=0; $i < 10 ; $i++) { 
        print "$numpares[$i]<br>";
    }
    ?>

<h1>Ejercicio 2</h1>
    <?php
    /* Ejercicio 2 */
    $valores = ["Pedro", "Ana", 34, 41];
     
    print "<pre>";
    print_r($valores);
    print "</pre>";
    
    
    ?>

<h1>Ejercicio 3</h1>
    <?php
    /* Ejercicio 3 */
    $matrizasociativa = ["Nombre" => "Pedro", "Apellido" => "Torres", "Dirección" => "Av. Mayor 3703", "Teléfono" => 1122334455];
    print_r($matrizasociativa);
    ?>
    

<h1>Ejercicio 4</h1>
    <?php
    /* Ejercicio 4 */
    $ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];
    for ($i=0; $i < 6 ; $i++) { 
        print "La ciudad con el índice $i tiene el nombre de $ciudades[$i]<br>";
    }
    ?>

<h1>Ejercicio 5</h1>
    <?php
    /* Ejercicio 5 */
    $ciudades = [ "MD" => "Madrid", "BCL" => "Barcelona", "LD" => "Londres", "NY" => "New York", "LA" => "Los Ángeles", "CCG" => "Chicago"];
    foreach ($ciudades as $key => $value) {
        print "El índice de $value es $key <br>";
    }
    ?>




</body>
</html>