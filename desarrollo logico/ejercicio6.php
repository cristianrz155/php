<?php

//6. Ejercicio de reverso: Escribe un programa que invierta un numero ingresado por el usuario. Por ejemplo, si el usuario ingresa "12345", el programa debe mostrar "54321".

$n = readline("Ingrese un numero: ");

$numeroInvertido = '';
$invertido = strlen($n);

for ($i = $invertido - 1; $i >= 0; $i--) {
    $numeroInvertido .= $n[$i];
}

echo "El número invertido es.." . $numeroInvertido;
?>
