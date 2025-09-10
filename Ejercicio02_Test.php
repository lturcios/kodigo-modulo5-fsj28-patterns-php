<?php
require_once 'Ejercicio02Adapter.php';
$windows10 = new Windows10();

// Archivo original de Windows 7
$archivoWord7 = new ArchivoWindows7("Documento.docx", "Word");
$archivoExcel7 = new ArchivoWindows7("Hoja_calculo.xlsx", "Excel");
$archivoPpt7 = new ArchivoWindows7("Presentacion.pptx", "PowerPoint");

echo "Intentando abrir archivos de Windows 7 directamente:\n";
echo $windows10->abrirArchivo($archivoWord7) . "\n";

echo "\nUsando el Adapter:\n";
$adapterWord = new AdapterWindows7a10($archivoWord7);
$adapterExcel = new AdapterWindows7a10($archivoExcel7);
$adapterPpt = new AdapterWindows7a10($archivoPpt7);

echo $windows10->abrirArchivo($adapterWord) . "\n";
echo $adapterWord->convertirYAbrir() . "\n";
echo $adapterExcel->convertirYAbrir() . "\n";
echo $adapterPpt->convertirYAbrir() . "\n\n";
