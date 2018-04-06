<?php 

require 'aluno_rpc.php';

$alunos = new Alunos();

$dados = file_get_contents("php://input");

$dados = json_decode($dados,true);

header('Content-type:application/json; charset=UTF-8');

switch ($dados['method']) {
	case 'inserir':
		echo json_encode([
				"result" => 'Inserido com Sucesso',
				'error'  => null,
				'id' =>	 $dados['id']	
			]);
		break;
}