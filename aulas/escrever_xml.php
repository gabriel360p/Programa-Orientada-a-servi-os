<?php

// Conversor xml -> json e  json ->  xml

//Escrever xml

$w = new XMLWriter();//instanciando
$w->openMemory();//prepara a memória para receber dados
$w->setIndent(1);//manda indentar uma vez
$w->setIndentString('   ');//aqui ele define oq vai preencher o indento, nesse caso ele vai preencher com "vazio"

$w->startDocument('1.0','UTF-8');//iniciando a escrita do documento, passando versão e tipo de caracteres
//toda a escrita do documento xml começa aqui, fica entre o star e o end




    $w->startElement('pessoa');//<pessoa>

        $w->startAttribute('cor-de-pele');
            $w->text('amarelo');//dá o valor ao elemento xml / ele não "aceitos numeros", só aceita strings
        $w->endAttribute();

        $w->startElement('id');
            $w->text('123');//dá o valor ao elemento xml / ele não "aceitos numeros", só aceita strings
        $w->endElement();

        $w->startElement('nome');//<nome>
            $w->text('gabriel');//dá o valor ao elemento xml
        $w->endElement();//</nome>

        $w->startElement('sobrenome');
            $w->text('costa');//dá o valor ao elemento xml / ele não "aceitos numeros", só aceita strings
        $w->endElement();

    $w->endElement();//</pessoa>



$w->endDocument();//fechando o documento

echo ($w->outputMemory());


