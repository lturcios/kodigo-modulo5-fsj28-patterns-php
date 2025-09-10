<?php
require_once 'Ejercicio01Factory.php';
$personajeFacil = PersonajeFactory::crearPersonaje('facil');
echo "Nivel Fácil - Personaje: " . $personajeFacil->getNombre() . "\n";
echo $personajeFacil->atacar() . "\n";
echo $personajeFacil->getVelocidad() . "\n\n";

$personajeDificil = PersonajeFactory::crearPersonaje('dificil');
echo "Nivel Difícil - Personaje: " . $personajeDificil->getNombre() . "\n";
echo $personajeDificil->atacar() . "\n";
echo $personajeDificil->getVelocidad() . "\n\n";
