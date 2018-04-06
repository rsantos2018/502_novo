<?php

$cnpj = '22.300.568/0001-22';

$regex = '/^[0-9]{2}\.[0-9]{3}\.[0-9]{3}\/[0-9]{4}\-[0-9]{2}$/';
echo "Cnpj: ";
if (preg_match($regex, $cnpj)) {
	echo "Válido";
} else {
	echo "Inválido";
};