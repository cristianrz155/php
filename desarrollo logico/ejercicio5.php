<?php
$n = readline("Ingrese un número: ");

if (!is_numeric($n) || $n < 2 || $n != intval($n)) {
    echo "El número ingresado no es válido.";
    exit;
}

$esPrimo = true;
for ($i = 2; $i <= sqrt($n); $i++) {
    if ($n % $i == 0) {
        $esPrimo = false;
        break;
    }
}

if ($esPrimo) {
    echo "El número $n es primo.";
} else {
    echo "El número $n no es primo.";
}
?>
