<?php
$usuario = $_POST ["user"];
$contrasenia = $_POST ["pass"];

$ejemplouser = "admin";
$ejemplopass = "1234";

if ($usuario == $ejemplouser && $contrasenia == $ejemplopass) {
    header ('location:https://galvann.github.io/IvanGalvanCV/');
} else {
    header ("location:error.html");
}

?>






