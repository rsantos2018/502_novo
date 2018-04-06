<?php 

$cnpj = "226085680001";
$regex = '/([0-9]{3})([0-9]{3})([0-9]{3})([0-9]{2})/';
echo preg_replace($regex, '\1.\2.\3-\4', $cnpj);
echo "<hr>";

$cnpj = "22.608.568/0001-22";
$regex = '/(\.|\/|\-)/';
echo preg_replace($regex, '', $cnpj);
echo "<hr>";