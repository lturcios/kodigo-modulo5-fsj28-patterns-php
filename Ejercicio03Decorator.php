<?php
interface PersonajeGameInterface
{
    public function getDescripcion();
    public function getDanio();
}

// Personajes base
class Guerrero implements PersonajeGameInterface
{
    public function getDescripcion()
    {
        return "Guerrero";
    }

    public function getDanio()
    {
        return 50;
    }
}

class Mago implements PersonajeGameInterface
{
    public function getDescripcion()
    {
        return "Mago";
    }

    public function getDanio()
    {
        return 40;
    }
}

// Decorator base
abstract class PersonajeDecorator implements PersonajeGameInterface
{
    protected $personaje;

    public function __construct(PersonajeGameInterface $personaje)
    {
        $this->personaje = $personaje;
    }

    public function getDescripcion()
    {
        return $this->personaje->getDescripcion();
    }

    public function getDanio()
    {
        return $this->personaje->getDanio();
    }
}

// Decoradores de armas
class EspadaDecorator extends PersonajeDecorator
{
    public function getDescripcion()
    {
        return $this->personaje->getDescripcion() . " + Espada Legendaria";
    }

    public function getDanio()
    {
        return $this->personaje->getDanio() + 25;
    }
}

class ArcoDecorator extends PersonajeDecorator
{
    public function getDescripcion()
    {
        return $this->personaje->getDescripcion() . " + Arco Élfico";
    }

    public function getDanio()
    {
        return $this->personaje->getDanio() + 20;
    }
}

class BastonMagicoDecorator extends PersonajeDecorator
{
    public function getDescripcion()
    {
        return $this->personaje->getDescripcion() . " + Bastón Mágico";
    }

    public function getDanio()
    {
        return $this->personaje->getDanio() + 30;
    }
}

class EscudoDecorator extends PersonajeDecorator
{
    public function getDescripcion()
    {
        return $this->personaje->getDescripcion() . " + Escudo de Acero";
    }

    public function getDanio()
    {
        return $this->personaje->getDanio() + 10;
    }
}