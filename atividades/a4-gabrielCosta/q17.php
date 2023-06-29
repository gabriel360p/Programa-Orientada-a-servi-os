<?php

require 'requisicoes.php';

$name = $argv[1];

$query = http_build_query(
    [
        'nome' => $name
    ]);

$requisicao = enviar_requisicao("http://localhost:8000/api/q17?$query", "DELETE");
var_dump($requisicao['codigo'], $requisicao['corpo']);