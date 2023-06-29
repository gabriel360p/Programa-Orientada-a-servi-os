<?php
require 'requisicoes.php';

$pega=http_build_query(['nome'=>$argv[1]]);
$url = "http://localhost:8000/api/q3?".$pega;
$metodo = "GET"; 

$recebe = enviar_requisicao($url,$metodo);
var_dump($recebe['codigo'],$recebe['corpo']);
