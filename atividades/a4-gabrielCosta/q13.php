<?php
require 'requisicoes.php';


$url= "http://localhost:8000/api/q13";
$metodo="PUT";

$requisicao=enviar_requisicao($url, $metodo );
var_dump($requisicao['codigo'],$requisicao['corpo']);
