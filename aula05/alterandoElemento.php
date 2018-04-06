<?php

$apostilas = new SimpleXmlElement('apostilas.xml', null, true);

$apostilas->apostila[0]->addChild('paginas',140);
$apostilas->apostila[1]->addChild('paginas',138);
$apostilas->apostila[2]->addChild('paginas',162);

//$apostilas->apostila[2]->titulo = 'Desenvolvendo com Javascript';

//$apostilas->apostila[2]->topicos->topico[1] = 'Iniciando com Javascript';

$apostilas->saveXML('apostilas.xml');

header('Content-type: text/xml');

echo $apostilas->asXML();


