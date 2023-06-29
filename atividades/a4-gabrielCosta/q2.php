<?php
require 'requisicoes.php';

$url= "http://localhost:8000/api/q2/".$argv[1];
$metodo="GET";

$recebe = enviar_requisicao($url,$metodo);
var_dump($recebe['codigo'],$recebe['corpo']);