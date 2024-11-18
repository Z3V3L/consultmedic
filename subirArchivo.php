<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Subir archivo | Consultmedic</title>
    <link rel="icon" type="image/x-icon" href="styles/logo_flat.png">


    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/product/">

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <!-- Custom styles for this template -->
    <link href="product.css" rel="stylesheet">
    <link href="styles/style.css" rel="stylesheet">
  </head>
  <body>
    
<?php include 'header-footer/header.php';?>

<main>

<div class="container">
  <form action="procesar.php" method="post" enctype="multipart/form-data">
    <h3 class="my-3">Subir una receta o diagnóstico previo </h3>  
    <div class="row" >
      <div class="col">
        <input type="file" class="form-control mt-2" id="inputSubirArchivo" name="imagen" required>
      </div>
    </div>
    <div class="row justify-content-end">
      <div class="col-2 mt-3">
        <button class="btn btn-outline-secondary" type="submit" value="Upload Image" name="submit">Subir archivo</button>
      </div>
    </div>
  </form>
</div>



</main>

<?php include 'header-footer/footer.php';?>

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
