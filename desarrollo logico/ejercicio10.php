<?php
$lista = readline("Ingrese una lista de números separados por espacios: ");

$numeros = explode(" ", $lista);

$numeros = array_map('intval', $numeros);

$tamano = count($numeros);
for ($i = 0; $i < $tamano - 1; $i++) {
    for ($j = 0; $j < $tamano - $i - 1; $j++) {
        if ($numeros[$j] > $numeros[$j + 1]) {
            $temp = $numeros[$j];
            $numeros[$j] = $numeros[$j + 1];
            $numeros[$j + 1] = $temp;
        }
    }
}

echo "Lista ordenada de menor a mayor: " . implode(" ", $numeros);
?>
