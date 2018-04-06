<?php

$dom = new DOMDocument();
$dom->load('../apostilas.xml');

//Localizando elemento
$apostilas = $dom->getElementsByTagName('apostila');

//Alterando Atributo
$apostilas->item(0)->setAttribute('versao', '3.0');

//Adicionando Atributo novo
$apostilas->item(0)->setAttribute('ano', '2019');

//Salvo meu arquivo xml
$dom->save('../apostilas.xml');


//Altero o tipo da visualização
header('Content-Type: text/xml');


//Exibi o xml
echo $dom->saveXML();