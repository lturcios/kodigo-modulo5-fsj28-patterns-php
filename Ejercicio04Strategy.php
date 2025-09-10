<?php
interface OutputStrategy
{
    public function mostrar($mensaje);
}

// Estrategias concretas
class ConsoleStrategy implements OutputStrategy
{
    public function mostrar($mensaje)
    {
        return "CONSOLA: " . $mensaje;
    }
}

class JsonStrategy implements OutputStrategy
{
    public function mostrar($mensaje)
    {
        $data = [
            'tipo' => 'JSON',
            'mensaje' => $mensaje,
            'timestamp' => date('Y-m-d H:i:s')
        ];
        return json_encode($data, JSON_PRETTY_PRINT);
    }
}

class TxtFileStrategy implements OutputStrategy
{
    public function mostrar($mensaje)
    {
        $contenido = "[" . date('Y-m-d H:i:s') . "] " . $mensaje . "\n";
        // En un caso real, escribirías al archivo
        return "ARCHIVO TXT: Guardado -> " . $contenido;
    }
}

class ProcesadorDeMensajes
{
    private $strategy;

    public function setStrategy(OutputStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function procesarMensaje($mensaje)
    {
        if ($this->strategy === null) {
            throw new Exception("No se ha definido una estrategia");
        }
        return $this->strategy->mostrar($mensaje);
    }
}