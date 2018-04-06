<?php 
// preg_split.php

echo "<pre>";

$linha = 'col1;col2,col3.col4/col5';
$cols = preg_split('/;|,|\.|\//', $linha);
print_r($cols);
echo "<hr>";

$data = "25-07-1993";
$cols = preg_split("/-/", $data);
print_r($cols);
echo "<hr>";

$data = "25-07-1993 12:12:12";
$cols = preg_split("/-|:| /", $data);
print_r($cols);
echo "<hr>";

$data = "25-07-1993 12:12:12";
$x = explode(" ", $data);
$data = explode("-", $x[0]);
$hora = explode(":", $x[1]);
print_r($data);
print_r($hora);
