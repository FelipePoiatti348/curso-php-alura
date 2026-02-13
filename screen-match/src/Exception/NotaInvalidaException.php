<?php 

namespace ScreenMatch\Exception;

class NotaInvalidaException extends \InvalidArgumentExpection
{
    public function __construct()
    {
        parent::__construct('Nota precia ser entre 0 e 10');
    }
}