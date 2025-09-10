<?php
interface Windows10Interface
{
    public function abrirArchivo($archivo);
}

// Clase Windows 10
class Windows10 implements Windows10Interface
{
    public function abrirArchivo($archivo)
    {
        if ($archivo->getVersion() === '10') {
            return "Abriendo archivo " . $archivo->getNombre() . " en Windows 10";
        } else {
            return "Error: Archivo incompatible con Windows 10";
        }
    }
}

// Clases de archivos de Windows 7
class ArchivoWindows7
{
    private $nombre;
    private $tipo;

    public function __construct($nombre, $tipo)
    {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function getVersion()
    {
        return '7';
    }

    public function abrirEnWindows7()
    {
        return "Abriendo " . $this->nombre . " (" . $this->tipo . ") en Windows 7";
    }
}

// Adapter para hacer compatible Windows 7 con Windows 10
class AdapterWindows7a10
{
    private $archivoWindows7;

    public function __construct(ArchivoWindows7 $archivo)
    {
        $this->archivoWindows7 = $archivo;
    }

    public function getNombre()
    {
        return $this->archivoWindows7->getNombre();
    }

    public function getVersion()
    {
        return '10'; // Adaptamos la versión
    }

    public function convertirYAbrir()
    {
        return "Adaptando archivo de Windows 7 a Windows 10... " .
            $this->archivoWindows7->abrirEnWindows7() . " -> Ahora compatible con Windows 10";
    }
}