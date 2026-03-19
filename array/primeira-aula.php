<?php

$array = [
    0 => 'zero',
    1 => 'um',
    2 => 'dois'
];

foreach ($array as $numeral => $nomeNumero) {
    echo "$numeral em portugues é: $nomeNumero" . PHP_EOL;
}

echo  "Total: " . count($array) . PHP_EOL;

var_dump (array_is_list($array));