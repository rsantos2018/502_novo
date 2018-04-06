<?php 

$arr = ['Java','PHP','Ruby'];

$retorno = preg_grep('/Ruby/', $arr);

print_r($retorno);