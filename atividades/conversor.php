<?php
//seleciona a entrada, se for json converte em xml, se for xml converte em json

//xml -> json
$nota=<<<xml
<note>
  <user>Gabriel Costa da Silva</user>
  <age>18</age>
  <city>Jucurutu</city>
</note>
xml;

$xmlObj=simplexml_load_string($nota);
$json_obj=json_encode($xmlObj);
// var_dump($json_obj);


//json -> xml
$nota2=[
    'name'=>'gabriel',
    'age'=>'19',
];

$jsonobj=json_encode($nota2);
var_dump($jsonobj);


// $jsonobj=json_encode($xmlObj);
// var_dump($json_obj);