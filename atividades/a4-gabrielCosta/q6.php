<?php
require 'requisicoes.php';

$url= "http://localhost:8000/api/q2/".$argv[1];
$metodo="HEAD";

$recebe = enviar_requisicao($url,$metodo);
var_dump($recebe['codigo'],$recebe['corpo']);