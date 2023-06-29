<?php

require 'requisicoes.php';

// Verifica o comando
if ($argc != 2) {
    echo "Uso: php crud_alunos.php <url do servidor>\n";
    exit(1); // Sai do script e retorna 1, que significa erro
}
// Pega a URL do servidor
$url_base = $argv[1];


// Pega os padrões de URL da API
$resp = enviar_requisicao($url_base);
$urls = json_decode($resp['corpo'],
    $associative = true, // Retorna um array em vez de um objeto padrão.
    flags : JSON_THROW_ON_ERROR // Lança exceções em caso de erro.
);

$url_balde_alunos = str_replace('{balde}', 'alunos', $urls['balde']);



//Criar balde de alunos se for necessário
$resp = enviar_requisicao(_url('balde',    substituicoes:['{balde}'=>'alunos']), 
metodo: 'HEAD');

if($resp['codigo']==404){   
    echo "Criando Balde..";

    $resp = enviar_requisicao(_url('balde',    substituicoes:['{balde}'=>'alunos']), 

    //codificansdo um json
    cabecalhos:['content-type:application/json'],
    corpo:json_encode(['usuario'=>'crud_alunos']), //as duas formas funcionam
    metodo: 'PUT');

}

echo " Balde Criado";


echo "{$resp['codigo']}\n";
echo "{$resp['corpo']}\n";
//Aq a gente manda um head para saber se ja existe, para isso usa o HEAD

//echo "$url_base$url_balde_alunos\n";








// Funções Auxiliares
function _url($chave,$substituicoes = []) {
    global $url_base, $urls;

    //isso abaixo é isso aq: 

    //localhost:8000/api        /baldes/alunos
    // $url_base                $urls['chave']

    $url = $url_base . $urls[$chave];

    // Aplica as substituições de variáveis de caminho
    foreach ($substituicoes as $variavel => $valor) {
        $url = str_replace(
            $variavel,
            $valor,
            $url
        );
    }

    //Ele retorna isso:

    // = localhost:8000/api        /baldes/alunos 
    return $url;
}










































// require 'requisicoes.php';


// //verifica o comando
// if($argc !=2){
//     echo "Uso: php crud_agenda.php <url do servidor> \n";
//     exit(1);
// }


// //pega a url do servidor
// $url_base=$argv[1];


// //pega os padrões de URL da API
// $resp = enviar_requisicao($url_base);
// // echo ($resp['corpo']);


// //convertendo a array resp para json
// $urls=json_decode($resp['corpo'],
//     $associative = true
// );

// $url_baldes_alunos  =str_replace('{balde}','alunos',$urls['balde']);

// $resp = enviar_requisicao($url_base.'/'.$url_baldes_alunos, metodo:'HEAD' );

// echo $resp['codigo'];

?>