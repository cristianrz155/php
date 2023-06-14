<?php


$number = readline("Ingrese  numero entero: ");

$mensaje = match ($number) {
    '1' => "El numero es 1",
    '2' => "El numero es 2",
    '3' => "El numero es 3",
    default => "El numero no es 1, 2 ni 3",
};

echo $mensaje;
?>
