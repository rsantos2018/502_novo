<?php

//Trazer os alunos do banco;

//Gerar um xml com as informacoes dos alunos usando simplexml

//Gerar um xml com as informações dos alunos usando DOMDocument

// Gerar um JSON com as informacoes dos alunos


$con = new PDO('pgsql:host=localhost;dbname=aula06','aula06','aula06');
$stmt = $con->query("SELECT * FROM tb_alunos");
$stmt->execute();
$pessoas = $stmt->fetchAll(PDO::FETCH_ASSOC);

$xml = new SimpleXmlElement('<?xml version="1.0" encoding="UTF-8"?><pessoas></pessoas>');

foreach ($pessoas as $pessoa) {
	$item = $xml->addChild('pessoa');
	$item->addChild('id',$pessoa['id']);
	$item->addChild('nome',$pessoa['nome']);
	$item->addChild('email',$pessoa['email']);
}

$xml->saveXML('simples_pessoas.xml');

header('Content-type: text/xml');

echo $xml->asXML();


