<?php
if (!isset($_FILES["imagen"])) {
	exit("No hay imagen");
}
$imagen = $_FILES["imagen"];
$ubicacionImagen = $imagen["tmp_name"];
$tipoImagen = strtolower(pathinfo(basename($_FILES["imagen"]["name"]),PATHINFO_EXTENSION));
//echo "Imagen actual: " . escapeshellarg($ubicacionImagen) . "<br>Peso: ". $_FILES["imagen"]["size"] . "<br>";

if($tipoImagen == "pdf" ) {
	$comando = "/bin/bash -c 'source consult-py/bin/activate; python3 pdf.py "  . escapeshellarg($ubicacionImagen) . "';";
}else{
	$comando = "/bin/bash -c 'source consult-py/bin/activate; python3 tesseract.py "  . escapeshellarg($ubicacionImagen) . "';";
}

//$comando = "tesseract " . escapeshellarg($ubicacionImagen) . " stdout -l spa -c debug_file=/dev/null";


//  /bin/bash -c 'source consult-py/bin/activate; python3 test.py receta.jpg'

exec($comando, $textoDetectado, $codigoSalida);
if ($codigoSalida === 0) {
	echo "El texto detectado es: ";
	// Tenemos el texto como un array, podemos unirlo
	$textoComoCadena = join("\n", $textoDetectado);
	echo "<pre>";
	echo $textoComoCadena;
	echo "</pre>";

	$comando1 = "python3 preprocesamiento.py " . escapeshellarg($textoComoCadena) ;
	exec($comando1 . " 2>&1", $output, $codigoSalida1);
	if ($codigoSalida1 === 0) {
		echo "El texto detectado es: ";
		// Tenemos el texto como un array, podemos unirlo
		$textoComoCadena = join("\n", $output);
		echo "<pre>";
		echo $textoComoCadena;
		echo "</pre>";
	} else {
		var_dump($output);
		echo "<br> Error: " . $codigoSalida1;

	}

} else {
	echo "Error detectando texto. Por favor verifique que el PDF existe. El código de salida es: " . $codigoSalida;
}
