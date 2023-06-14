<?php
$palabra = readline("ingrese la palabra");
$invertida = $palabra ==strrev($palabra);

if ($invertida == strrev($palabra)) {
    echo " la palabra es palindromo";
}
elseif ($invertida != strrev($palabra)) {
    echo " la palabra no es  palindromo";
}
?>
