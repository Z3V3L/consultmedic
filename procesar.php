<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Respuesta IA | Consultmedic</title>
    <link rel="icon" type="image/x-icon" href="styles/logo_flat.png">


    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/product/">

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="product.css" rel="stylesheet">
    <link href="styles/style.css" rel="stylesheet">
  </head>
  <body class="gradient-background" style="min-height: 100vh;">

<?php include 'header-footer/header.php';?>

<main>

<div class="container">
	<?php
		require 'vendor/autoload.php';
		//Dotenv\Dotenv::createImmutable(__DIR__)->load();
		$dotEnv = Dotenv\Dotenv::createImmutable(__DIR__);
		$dotEnv->load();
		$apiKey = $_ENV['API_KEY'];

		/*if ($apiKey) {
			echo "API Key: " . $apiKey . "<br>";
		} else {
			echo "La variable de entorno API_KEY no está definida o está vacía.<br>";
		}*/

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
			// Tenemos el texto como un array, podemos unirlo
			$textoComoCadena = join("\n", $textoDetectado);
			echo '<div class="my-4">
  <label for="exampleFormControlTextarea1" class="form-label">El texto detectado es:</label>
  <textarea disabled class="form-control" id="exampleFormControlTextarea1" rows="5">';
			echo $textoComoCadena;
			echo '</textarea>
</div>';

			$comando1 = "python3 preprocesamiento.py " . escapeshellarg($textoComoCadena) ;
			//$comando1 = "/bin/bash -c 'source consult-py/bin/activate; python3 genai-test.py " . escapeshellarg($textoComoCadena) ."'";
			exec($comando1 . " 2>&1", $output, $codigoSalida1);
			if ($codigoSalida1 === 0) {
				//echo "El texto preprocesado es: ";
				// Tenemos el texto como un array, podemos unirlo
				$textoComoCadena = join("\n", $output);
				//echo "<pre>";
				$textoComoCadena = str_replace("'", "", $textoComoCadena);
				//echo $textoComoCadena."<br><br>";

				//echo $textoComoCadena ."<br><br>";
				//echo "</pre>";

				$comando2 = "/bin/bash -c 'source consult-py/bin/activate; python3 genai-test.py \"" . $textoComoCadena . "\" " . $apiKey . "'";
				exec($comando2 . " 2>&1", $output2, $codigoSalida2);
				if ($codigoSalida2 === 0) {
					// Tenemos el texto como un array, podemos unirlo
					$textoComoCadena = join("\n", $output2);
					$cadena_cortada = substr($textoComoCadena, 0, strpos($textoComoCadena, "WARNING"));
					echo "<h3>La respuesta del sistema es:</h3><p>";
					echo $cadena_cortada;
					echo "</p>";
				} else {
					var_dump($output2);
					echo "<br> Error: " . $codigoSalida2;
				}
			} else {
				var_dump($output);
				echo "<br> Error: " . $codigoSalida1;
			}

		} else {
			echo "Error detectando texto. Por favor verifique que el archivo existe. El código de salida es: " . $codigoSalida;
		}
	?>
</div>



</main>

<?php include 'header-footer/footer.php';?>

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>


  </body>
</html>

