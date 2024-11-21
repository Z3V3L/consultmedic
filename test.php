<?php

//$comando = "/bin/bash; source consult-py/bin/activate";
$comando = "/bin/bash -c 'source consult-py/bin/activate; python3 tesseract.py receta-simi.png'";
//$comando = "python3 nltk1.py 'bla bla el de la trt'";
//$comando = "tesseract Receta-Simi.jpg stdout -l spa -c debug_file=/dev/null";

exec($comando . " 2>&1", $output, $codigoSalida);
if ($codigoSalida === 0) {
	echo "El texto detectado es: ";
	// Tenemos el texto como un array, podemos unirlo
	$textoComoCadena = join("\n", $output);
	echo "<pre>";
	echo $textoComoCadena;
	echo "</pre>";
} else {
	var_dump($output);
	echo "<br> Error: " . $codigoSalida;

}
