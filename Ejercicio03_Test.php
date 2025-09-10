<?php
require_once 'Ejercicio03Decorator.php';
$guerrero = new Guerrero();
echo "Personaje base: " . $guerrero->getDescripcion() . " - Daño: " . $guerrero->getDanio() . "\n";

$guerreroConEspada = new EspadaDecorator($guerrero);
echo "Con arma: " . $guerreroConEspada->getDescripcion() . " - Daño: " . $guerreroConEspada->getDanio() . "\n";

$guerreroCompleto = new EscudoDecorator(new ArcoDecorator(new EspadaDecorator($guerrero)));
echo "Totalmente equipado: " . $guerreroCompleto->getDescripcion() . " - Daño: " . $guerreroCompleto->getDanio() . "\n\n";

$mago = new Mago();
echo "Personaje base: " . $mago->getDescripcion() . " - Daño: " . $mago->getDanio() . "\n";

$magoEquipado = new BastonMagicoDecorator(new ArcoDecorator($mago));
echo "Mago equipado: " . $magoEquipado->getDescripcion() . " - Daño: " . $magoEquipado->getDanio() . "\n\n";