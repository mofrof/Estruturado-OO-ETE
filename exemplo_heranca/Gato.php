<?php
require_once(__DIR__ . '/Animal.php');
require_once(__DIR__.'/Domesticos.php');

class Gato extends Animal implements Domesticos
{
    public function fazerBarulho()
    {
        return "MIAUUUUUU";
    }

    public function realizarTosa()
    {
        return "Realizando";
    }

}
