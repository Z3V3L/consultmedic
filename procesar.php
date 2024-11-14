<?php
if (!isset($_FILES["imagen"])) {
	exit("No hay imagen");
}
$imagen = $_FILES["imagen"];
//echo $imagen."<br>";
$ubicacionImagen = basename($_FILES["imagen"]["name"]);
//echo $ubicacionImagen."<br>".escapeshellarg($ubicacionImagen)."<br>";
$comando = "tesseract " . escapeshellarg($ubicacionImagen) . " stdout -l eng -c debug_file=/dev/null";
exec($comando, $textoDetectado, $codigoSalida);
if ($codigoSalida === 0) {
	echo "El texto detectado es: ";
	// Tenemos el texto como un array, podemos unirlo
	$textoComoCadena = join("\n", $textoDetectado);
	echo "<pre>";
	echo $textoComoCadena;
	echo "</pre>";
} else {
	//echo "Error detectando texto. Por favor verifique que la imagen existe y que el programa de detección está instalado y es accesible desde PHP. El código de salida es: " . $textoDetectado . $codigoSalida;
    echo  "tesseract " . basename($_FILES["imagen"]["name"]);
}
