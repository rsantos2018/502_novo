<?php

$dom = new DOMDocument();
$dom->load('../apostilas.xml');

//Localizando elemento
$apostilas = $dom->getElementsByTagName('apostila');

//Removendo Atributo
$apostilas->item(0)->removeAttribute('versao');

//Salvo meu arquivo xml
$dom->save('../apostilas.xml');

//Altero o tipo da visualização
header('Content-Type: text/xml');

//Exibi o xml
echo $dom->saveXML();