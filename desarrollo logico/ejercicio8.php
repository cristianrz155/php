<?php
$rangoI = readline("Ingrese el rango inicial: ");
$rangoF = readline("Ingrese el rango final: ");

for ($numero = $rangoI; $numero <= $rangoF; $numero++) {
    $sumaDivisores = 0;
    for ($i = 1; $i <= $numero / 2; $i++) {
        if ($numero % $i == 0) {
            $sumaDivisores += $i;
        }
    }

    if ($sumaDivisores == $numero) {
        echo "El número $numero es un número perfecto." . PHP_EOL;
    }
}
?>
