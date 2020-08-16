<?php
require_once(__DIR__ . '/Animal.php');
require_once(__DIR__.'/Domesticos.php');

class Cachorro extends Animal implements Domesticos
{
    public  function fazerBarulho()
    {
        return "AU AU AU";
    }

    public function realizarTosa(){
        return "Indo ao PetShopping e realizando";
    }
}
