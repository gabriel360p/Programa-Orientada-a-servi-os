<?php

require "requisicoes.php";

$corpo = [
    'nome' => $argv[1],
    'Content-Type' => 'multipart/form-data',
];

$url= "http://localhost:8000/api/q10";
$metodo="POST";

$requisicao = enviar_requisicao($url, $metodo, $corpo);
var_dump($requisicao['codigo'], $requisicao['corpo']);