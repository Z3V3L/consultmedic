<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Respuesta | Consultmedic</title>
    <link rel="icon" type="image/x-icon" href="styles/logo_flat.png">


    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/product/">

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
	
    <!-- Custom styles for this template -->
    <link href="product.css" rel="stylesheet">
    <link href="styles/style.css" rel="stylesheet">
  </head>
  <body class="gradient-background" style="min-height: 100vh;">

<?php include 'header-footer/header.php';?>

<main>

<div class="container">

	<?php
		if (!isset($_GET["enfermedad"])) {
			exit("No hay datos");
		}
		$enfermedad = $_GET['enfermedad'];
		
		switch ($enfermedad) {
			case 'diabetes':
				// Código a ejecutar si la enfermedad es Diabetes
				//echo "Información sobre diabetes";
				$url = 'enfermedades/diabetes.json';
				$titulo = "Diabetes";
				
				break;
			case 'cardiovasculares':
				// Código a ejecutar si la enfermedad es Enfermedades Cardiovasculares
				//echo "Información sobre enfermedades cardiovasculares";
				$url = 'enfermedades/cardio.json';
				$titulo = "Enfermedades cardiovasculares";
				
				break;
			case 'cancer':
				// Código a ejecutar si la enfermedad es Cáncer
				//echo "Información sobre cáncer";
				$url = 'enfermedades/cancer.json';
				$titulo = "Cáncer";
				break;
			case 'respiratorias':
				// Código a ejecutar si la enfermedad es Enfermedades Respiratorias Crónicas
				//echo "Información sobre enfermedades respiratorias crónicas";
				$url = 'enfermedades/respiratory.json';
				$titulo = "Enfermedades respiratiorias";
				break;
			default:
				// Código a ejecutar si no coincide con ningún caso
				echo "Enfermedad no reconocida";
		}
		
		// Obtener el contenido del enlace
		$json_string = file_get_contents($url);

		// Decodificar el JSON
		$datos_json = json_decode($json_string, true);

		// Verificar si la decodificación fue exitosa
		if ($datos_json === null) {
			echo "Error al decodificar el JSON";
		} else {
			// Acceder a los datos
			// Por ejemplo, si tienes un array con claves "nombre" y "edad":
			echo '<h2 class="mt-3">' . $titulo . '</h2>';
			echo '<div class="row my-4">'.$datos_json['feed']['entry'][0]['summary']['_value'].'</div>';
			//print_r($datos_json);

		}
		
		
	?>

</div>



</main>

<?php include 'header-footer/footer.php';?>

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>


  </body>
</html>

