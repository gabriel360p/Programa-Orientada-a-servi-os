<?php

use GuzzleHttp\Client;

require __DIR__ . '/vendor/autoload.php';

class Request{
    protected $client;

    function __construct(Client $client)
    {
        $this->client=$client;
    }

    public function index(){//INDEX ----------------------------------------------------------------------------------------------------------
        $response = $this->client->request('GET','http://localhost:8000/api/');
        echo "Status: " . $response->getStatusCode() . PHP_EOL;
        $dados = $response->getBody(true);
        print_r($dados);
    }

    public function store($usuario,$nome){//STORE ----------------------------------------------------------------------------------------------------------
        $response = $this->client->request('PUT','http://localhost:8000/api/baldes/balde/store',[

            'json'=>[
                'nome'=>$nome,
                'usuario'=>$usuario
            ]
        ]);
        echo "Status: " . $response->getStatusCode() . PHP_EOL;
    }

    public function list(){//LIST ----------------------------------------------------------------------------------------------------------
        $response = $this->client->request('GET', 'http://localhost:8000/api/baldes');

        $html=json_decode($response->getBody(true)); //pegando o corpo, os dados que vem em array, pra facilitar coloco ele dentro da função json_decode()
        echo "Status: " . $response->getStatusCode() . PHP_EOL;
        print_r($html);
    }

    public function delete($nome){//DELETE ----------------------------------------------------------------------------------------------------------
        $response = $this->client->request('DELETE', 'http://localhost:8000/api/baldes/balde/delete', [
            'json' => [
                'nome' => $nome
            ]
        ]);
    }

    public function update($balde,$usuario,$nome){//UPDATE ----------------------------------------------------------------------------------------------------------
        $response = $this->client->request('GET', 'http://localhost:8000/api/baldes/balde/update', [
            'json' => [
                'balde' => $balde,
                'usuario' => $usuario,
                'nome' => $nome
            ]
        ]);
         
        echo "Status: " . $response->getStatusCode() . PHP_EOL;
    }

    public function show($balde){//SHOW ----------------------------------------------------------------------------------------------------------
        $response = $this->client->request('GET', 'http://localhost:8000/api/baldes/balde/show', [
            'json' => [
                'nome' => $balde
            ]
        ]);
        
        echo "Status: " . $response->getStatusCode() . PHP_EOL;

        print_r(json_decode($response->getBody(true)));
    }

}

$client = new Client();

$request = new Request($client);//inicialiando o objeto
