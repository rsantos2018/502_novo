<?php 

echo "<pre>";

$cel = '(12)12345-1234';
$regex = '/^\(([0-9]{2})\)([0-9]{5})\-([0-9]{4})/';
preg_match($regex, $cel,$params);
print_r($params);
echo "<hr>";

$string = "Versões do PHP, PHP 7, PHP 5.5, PHP 5.6";
preg_match_all('/PHP/', $string, $return);
print_r($return);