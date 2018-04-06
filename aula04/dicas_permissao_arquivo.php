<?php 
// Alterando permissão de arquivo;
// chmod('arq.txt',0777);
// Alterando dono de arquivo;
// chown('arq.txt','www-data');
// Alterando grupo de arquivo;
// chgrp('arq.txt','www-data');
// Informações sobre o arquivo;
echo "<pre>";
$arquivo = stat('arquivo.txt');
// print_r($arquivo);
// Criando arquivo;
touch('teste.txt');
// Verificar se arquivo existe
var_dump(file_exists('teste.txt'));
var_dump(file_exists('teste1.txt'));
// Criando pasta;
// mkdir('fotos');


chmod 777 -R fotos/