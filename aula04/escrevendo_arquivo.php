<?php

echo "<h1>Dificil</h1>";

$arquivo = fopen('arquivo.txt', 'w'); //sobrescreve o arquivo, coloca o ponteiro 										no inicio do arquivo.

fwhite($arquivo, "Olá Mundo!!"){
	
}

fclose($arquivo); 

echo "<hr>";

<?php

echo "<h1>Dificil</h1>";

$arquivo = fopen('arquivo.txt', 'a'); //escreve no fim do do arquivo

fwrite($arquivo, "Mundo" . PHP_EOL){
	
}

fclose($arquivo); 

echo '<hr>Escrito com Sucesso!<hr>';

echo "<p>Facil</p>";

echo "<hr>";



file_put_contents(("arquivo.txt", "End Of Live" . PHP_EOL, FILE_APPEND));

echo "<hr>";
