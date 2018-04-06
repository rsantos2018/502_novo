<?php

$verbo = $_SERVER['REQUEST_METHOD'];

switch ($verbo) {
	case 'GET':
		echo 'Listando Alunos';
		break;
	
	case 'POST':
		echo 'Criando Aluno';
		break;

	case 'PUT':
		echo 'Atualizando Alunos';
		break;	

	case 'DELETE':
		echo 'Removendo Alunos';
		break;

	default:
		# code...
		break;
}

