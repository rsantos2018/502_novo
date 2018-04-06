<?php

$apostilas = new SimpleXmlElement('apostilas.xml', null, true);


$apostilas->apostila[2]->attributes()->addAttribute('versao',1);



$apostilas->saveXML('apostilas.xml');

header('Content-type: text/xml');

echo $apostilas->asXML();
