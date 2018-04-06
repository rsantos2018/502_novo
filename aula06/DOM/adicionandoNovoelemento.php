<?php

$dom = new DOMDocument();
$dom->load('../apostilas.xml');


//Localizando elemento
$apostilas= $dom->getElementsByTagName('apostila');


//Novo Elemento
$codigo = $dom->createElement('codigo', '500');


//Adiciono novo elemento
$apostilas->item(0)->appendChild($codigo);


//Salvo meu arquivo xml
$dom->save('../apostilas.xml');


//Altero o tipo da visualização
header('Content-Type: text/xml');


//Exibi o xml
echo $dom->saveXML();

