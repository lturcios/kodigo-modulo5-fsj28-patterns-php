<?php
interface PersonajeInterface
{
    public function atacar();
    public function getVelocidad();
    public function getNombre();
}

// Clase Esqueleto
class Esqueleto implements PersonajeInterface
{
    public function atacar()
    {
        return "El esqueleto ataca con flechas desde la distancia";
    }

    public function getVelocidad()
    {
        return "Velocidad: Rápida";
    }

    public function getNombre()
    {
        return "Esqueleto";
    }
}

// Clase Zombi
class Zombi implements PersonajeInterface
{
    public function atacar()
    {
        return "El zombi ataca con garras y mordiscos cuerpo a cuerpo";
    }

    public function getVelocidad()
    {
        return "Velocidad: Lenta pero resistente";
    }

    public function getNombre()
    {
        return "Zombi";
    }
}

class PersonajeFactory
{
    public static function crearPersonaje($nivel)
    {
        switch (strtolower($nivel)) {
            case 'facil':
                return new Esqueleto();
            case 'dificil':
                return new Zombi();
            default:
                throw new Exception("Nivel no reconocido: $nivel");
        }
    }
}