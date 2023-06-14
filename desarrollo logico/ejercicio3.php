<?php
$n = readline("ingrese el numero que desee factorial..");
$resultado = 1; 
for ($i=1; $i<=$n; $i++) { 
    $resultado = $resultado*$i;   
}
echo ("el factorial del numero..".$n."..es..".$resultado);
?>