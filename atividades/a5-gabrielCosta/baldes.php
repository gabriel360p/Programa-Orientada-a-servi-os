<?php

//Funciona

require __DIR__ . '/guzzle_request.php';

//Referente a variável path -> (1) Armazenar -- (2) Listar tudo do banco -- (3) Deletar do Banco -- (4) Atualizar -- (5) Mostrar um item do banco
$path = $argv[1];

switch($path){
    case 1: //Acessando -- OK

        // Comando no terminal:
        // php baldes.php 1 

        $request->index();

    break;

    case 2://listando todos os itens do banco -- OK

        // Comando no terminal:
        // php baldes.php 2 

        $request->list();

    break;

    case 3://Salvando no Banco -- OK

        // Comando no terminal:
        // php baldes.php 3 nome-usuario nome-balde 

        $usuario= $argv[2];

        $nome= $argv[3];

        $request->store($usuario,$nome);

    break;

    case 4://atualizando o balde -- OK

        // Comando no terminal:
        // php baldes.php 4 nome-do-balde novo-nome novo-usuario

        $balde= $argv[2];

        $nome= $argv[3];
        
        $usuario= $argv[4];

        $request->update($balde,$usuario,$nome);

    break;

    case 5://listando um determinado balde -- OK

        // Comando no terminal:
        // php baldes.php 5 nome-do-balde

        $balde= $argv[2];

        $request->show($balde);

    break;

    case 6://Deletendo o balde do banco -- OK

        // Comando no terminal:

        // php baldes.php 6 nome-do-balde
        
        $nome= $argv[2];

        $request->delete($nome);

    break;
}













    // STORE ----------------------------------------------------------------------------------------------------------
    //aparentemente funciona - adicionando no banco de dados
    // $response = $client->request('POST', 'http://localhost:8000/books/store', [
    //     'json' => [
    //         'title' => 'A menina e o porco',
    //         'author' => 'Jason Bores'
    //     ]
    // ]);

    // echo "Status: " . $response->getStatusCode() . PHP_EOL;


// LIST ----------------------------------------------------------------------------------------------------------
//aparentemente funciona - listando todos os livros do banco
// $response = $client->request('GET', 'http://localhost:8000/books/books');

// $html=json_decode($response->getBody(true)); //pegando o corpo, os dados que vem em array, pra facilitar coloco ele dentro da função json_decode()
// echo "Status: " . $response->getStatusCode() . PHP_EOL;
// var_dump($html);


//DELETE ----------------------------------------------------------------------------------------------------------
// // //aparentemente funciona - deletendo algo do banco
// $response = $client->request('DELETE', 'http://localhost:8000/books/book/delete', [
//     'json' => [
//         'id' => 5
//     ]
// ]);
 

// UPDATE ----------------------------------------------------------------------------------------------------------
// $response = $client->request('PUT', 'http://localhost:8000/books/books/update', [
//     'json' => [
//         'id' => 9,
//         'author' => "MARVEL",
//         'title' => "Homem aranha no aranhaverso"
//     ]
// ]);
 
// echo "Status: " . $response->getStatusCode() . PHP_EOL;


// SHOW ----------------------------------------------------------------------------------------------------------
// $response = $client->request('GET', 'http://localhost:8000/books/books/show', [
//     'json' => [
//         'id' => 1
//     ]
// ]);
 
// echo "Status: " . $response->getStatusCode() . PHP_EOL;

// var_dump(json_decode($response->getBody(true)));

