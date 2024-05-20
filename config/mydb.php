<?php
// Funzione per leggere e decodificare un file JSON
function readJsonFile($filename)
{
    $jsonData = file_get_contents($filename);
    //var_dump('cuiao', $jsonData);
    return json_decode($jsonData, true);
}

// Leggi il file JSON unico
$data = readJsonFile('../storage/mydb.json');


return $data;
