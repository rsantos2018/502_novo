<?php

//alterando permissão de arquivo.
chmod('arquivo.txt',0755); 

//alterando dono de arquivo.
chown('arquivo.txt','www-data'); 

//alterando grupo de arquivo.
chgrp('arquivo.txt', 'www-data');

//Tráz informações do arquivo
$arquivo = stat('$arquivo.txt');
print_r($arquivo);

//Criando arquivo
touch('teste.txt');

//Verificar se arquivo existe
var_dump(file_exists('teste.txt'));
var_dump(file_exists('teste1.txt'));

//criando pastas;
mkdir('fotos');

//removendo arquivo;
if(file_exists('teste.txt')){
	unlink('teste.txt');
}

//copiando arquivo
copy('arq.txt', 'copia.txt');

//renomeando arquivo
rename('copia.txt', 'copia_arquivo.txt');

//buscando arquivos
$arqs = glob('../aula03/*.txt');
print_r($arqs);