<form method="POST" action="#">
	<p>CEP:</p>
	<p><input type="text" name="cep"></p>
	<p><input type="submit" value="Buscar"></p>
</form>

<?php

if ($_POST)
{
	$cep = $_POST['cep'];

	$url = "https://viacep.com.br/ws/{$cep}/json/";

	$retorno = file_get_contents($url);

	//Retorna um obj stdClass
	$endereco = json_decode($retorno);

	//Retorna um array
	//$endereco = json_decode($retorno, true);
	
	echo "<strong>Rua: </strong>" . $endereco->logradouro . "<br>";
	
	echo "<strong>Bairro: </strong>" . $endereco->bairro . "<br>";
	
	echo "<strong>Cidade: </strong>" . $endereco->localidade . "<br>";
	
	echo "<strong>Estado: </strong>" . $endereco->uf . "<br>";
}