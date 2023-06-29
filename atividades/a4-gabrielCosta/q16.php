<?php
require 'requisicoes.php';

$url= "http://localhost:8000/api/q16/".$argv[1];
$metodo="DELETE";

$recebe = enviar_requisicao($url,$metodo);
var_dump($recebe['codigo'],$recebe['corpo']);