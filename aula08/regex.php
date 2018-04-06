<?php 
$cpf = "111.222.333-44";
$regex = '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/';
echo "CPF: ";
if (preg_match($regex, $cpf)) {
	echo "Válido";
} else {
	echo "Inválido";
};
echo "<hr>";
$placa = "AAA-1234";
$regex = '/^[A-Z]{3}\-[0-9]{4}$/';
echo "Placa: ";
if (preg_match($regex, $placa)) {
	echo "Válido";
} else {
	echo "Inválido";
};
echo "<hr>";
$cnpj = "22.608.568/0001-22";
$regex = '/^[A-Z]{3}\-[0-9]{4}$/';
echo "Cnpj: ";
if (preg_match($regex, $cnpj)) {
	echo "Válido";
} else {
	echo "Inválido";
};