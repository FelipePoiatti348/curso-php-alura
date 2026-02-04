<?php

//5 - Escreva um programa em PHP que converta uma temperatura de Celsius para Fahrenheit.

//Formula de conversao 	(0 °C × 9/5) + 32 = 32 °F


$celsius = $argv[1];
$fahrenheit = ($celsius * 9 / 5 ) + 32;

echo "Sua temperatura em Fahrenheit é $fahrenheit °F";