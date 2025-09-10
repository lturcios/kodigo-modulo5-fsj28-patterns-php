<?php
require_once 'Ejercicio04Strategy.php';
$processor = new ProcesadorDeMensajes();
$mensaje = "Hola mundo, este es un mensaje de prueba";

echo "Mensaje original: '$mensaje'\n\n";

$processor->setStrategy(new ConsoleStrategy());
echo $processor->procesarMensaje($mensaje) . "\n\n";

$processor->setStrategy(new JsonStrategy());
echo $processor->procesarMensaje($mensaje) . "\n\n";

$processor->setStrategy(new TxtFileStrategy());
echo $processor->procesarMensaje($mensaje) . "\n\n";

// Demostrando cambio dinámico de estrategia
echo "Procesando múltiples mensajes con diferentes estrategias:\n";
$mensajes = ["Mensaje 1", "Mensaje 2", "Mensaje 3"];
$estrategias = [
    new ConsoleStrategy(),
    new JsonStrategy(),
    new TxtFileStrategy()
];

foreach ($mensajes as $i => $msg) {
    $processor->setStrategy($estrategias[$i]);
    echo "Mensaje " . ($i + 1) . ":\n";
    echo $processor->procesarMensaje($msg) . "\n\n";
}

echo "=== FIN DE TODOS LOS EJERCICIOS ===\n";