<?php 

// preg_replace

$cpf = '11122233344';

$regex = '/([0-9]{3})([0-9]{3})([0-9]{3})([0-9]{2})/';
echo preg_replace($regex, '\1.\2.\3-\4', $cpf);
echo "<hr>";

$string = "Palmeiras tem mundial";
echo preg_replace('/palmeiras/i', 'Corinthians', $string);
echo "<hr>";

$cpf =  '111.222.333-44';
$regex = '/(\.|\-)/';
echo preg_replace($regex, '', $cpf);
echo "<hr>";

$cnpj = "22.608.568/0001-22";
$regex = "";
echo "<hr>";

$cnpj = "22608568000122";
$regex = "";
