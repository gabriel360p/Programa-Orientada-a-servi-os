<?php
require 'requisicoes.php';


$url= "http://localhost:8000/api/q9";
$metodo="POST";

$requisicao=enviar_requisicao($url, $metodo );
var_dump($requisicao['codigo'],$requisicao['corpo']);
