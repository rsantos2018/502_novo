<form action="" method="POST">
	<p>Data de Vencimento: <input type="text" name="data"></p>
	<input type="submit" value="ok">
</form>

<?php 
	// Data no padrão brasileiro d/m/Y
	// Se data de vencimento > que data atual
	// mostrar a msg 'Pode pagar o boleto'
	// Senão, boleto está vencido
	// mostra a msg 'Boleto vencido em X dias'
	

	if ($_POST) {

		$dataVencimento = DateTime::createFromFormat('d/m/Y', $_POST['data']);

		$dataAtual		= new DateTime(date('Y-m-d') . "23:59:59");

		if ($dataVencimento > $dataAtual) {
			echo '<p>Pode pagar o boleto</p>';

		} else {

			$intervalo = $dataVencimento->diff($dataAtual);

			echo '<p>Boleto Vencido à '. $intervalo->format('%r%a') .' dias</p>';
		}

	}
 ?>