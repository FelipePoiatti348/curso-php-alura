<?php

$telefones = ['(24) 99999 - 9999', '(24) 99999 - 8888', '(24) 2222 - 2222'];

foreach ($telefones as $telefone) {
    $regex = '/^\([0-9]{2}\) 9?[0-9]{4} - [0-9]{4}$/';
    $telefoneValido = preg_match(
        $regex, 
        $telefone,
        $correspondencia
        );
        var_dump($correspondencia);
    if ($telefoneValido) {
        echo 'Telefone Valido' . PHP_EOL;
    } else {
        echo 'Telefone Invalido' . PHP_EOL;
    }

    echo preg_replace(
        $regex,
        '(XX) \2',
        $telefone
    ) . PHP_EOL;
}
