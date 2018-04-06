<?php

echo "<h1>Dificil</h1>";

//fopen - abrir arquivo
//feof - final do arquivo
//fgets - pegar linha do arquivo
//fclose - fecha o arquivo

$arquivo = fopen('arquivo.txt', 'r');
while(!feof($arquivo)){
	$linha=fgets($arquivo);
	echo nl2br($linha);
}

fclose($arquivo); 

echo "<hr>";

echo "<p>Fácil</p>";

$arquivo = file_get_contents('arquivo.txt');
echo nl2br ($arquivo);

echo "<hr>";

echo "<p>Lendo arquivo em partes</p>";



$arquivo = fopen('arquivo.txt' , 'r');

while (($pedaco = fread($arquivo, 10)) != false){
	echo nl2br ($pedaco);
}

fclose($arquivo); 
echo "<hr>";