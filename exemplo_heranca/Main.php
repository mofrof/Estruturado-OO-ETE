<?php
require_once(__DIR__ . '/Gato.php');
require_once(__DIR__ . '/Cachorro.php');

$gato = new Gato();
$cachorro = new Cachorro();
$animal = new Animal();


echo $gato->fazerBarulho() . PHP_EOL;

echo $gato->realizarTosa() . PHP_EOL;

echo $cachorro->fazerBarulho() . PHP_EOL;

echo $cachorro->realizarTosa() . PHP_EOL;
