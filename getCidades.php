<?php
$estadoSigla = $_GET['estado'];
$cidadesJson = file_get_contents("https://servicodados.ibge.gov.br/api/v1/localidades/estados/$estadoSigla/municipios");
$cidades = json_decode($cidadesJson, true);

echo json_encode(['cidades' => $cidades]);