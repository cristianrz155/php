<?php
$limite = readline("Ingrese el numero limite: ");

$secuencia = [0, 1];
while ($secuencia[count($secuencia) - 1] < $limite) {
    $next = $secuencia[count($secuencia) - 1] + $secuencia[count($secuencia) - 2];
    $secuencia[] = $next;
}

echo "Secuencia de Fibonacci hasta el numero $limite:" . PHP_EOL;
foreach ($secuencia as $numero) {
    echo $numero . " ";
}
?>
