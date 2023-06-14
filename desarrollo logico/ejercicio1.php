<?php
$listaNumeros = readline("ingrese cuantos numeros va a trabajar");

$notas=[];
for($i=1; $i<=$listaNumeros; $i++){
    $notas[$i-1]= floatval(readline("ingrese la nota... $i "));
    $sum +=$notas[$i-1];
}

$promedio=$sum/$listaNumeros;
echo("el promedio de las notas ingresadas es". $promedio);


?>