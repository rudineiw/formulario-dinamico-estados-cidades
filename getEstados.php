<?php
$estadosJson = file_get_contents('https://servicodados.ibge.gov.br/api/v1/localidades/estados');
$estados = json_decode($estadosJson, true);

usort($estados, function($a, $b) {
    return strcmp($a['nome'], $b['nome']);
});

echo json_encode(['estados' => $estados]);