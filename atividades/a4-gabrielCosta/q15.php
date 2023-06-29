<?php
require 'requisicoes.php';


$url= "http://localhost:8000/api/q15";
$metodo="DELETE";

$requisicao=enviar_requisicao($url, $metodo );
var_dump($requisicao['codigo'],$requisicao['corpo']);
