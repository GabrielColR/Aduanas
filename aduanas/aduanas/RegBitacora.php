<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
       <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Importaciones y exportaciones</title>
</head>
<body>
    <!-- Inicio Navbar -->
    <?php
    include '../includes/navbar.php'
    ?>
    
    <!-- Inicio contenido -->
    <section>

    <h3 class="text-center mt-4 pt-5">Registrar bitacora</h3>

<div class=" container-xxl m-2"  >

<div class="container d-flex justify-content-center align-items-center ">

    <form class="row g-2 ms-5 me-5 ps-5 pe-5 " action="insertarEnVentas.php" method="POST">
        Nombre Aduana: <input class="form-control" type="name" name="nombAd" id="nombAd">
        Codigo: <input type="number" class="form-control" name="Cod" id="Cod">
        Producto: <input class="form-control" type="name" name="Prod" id="Prod">
        Número: <input class="form-control" type="name" name="Num" id="Num">
        <!--<div class="form-check">
            <input class="form-check-input" type="checkbox" name="IComision" id="IComision">
            <label class="form-check-label" for="flexCheckDefault">
                Comision
            </label>
        </div>-->

        <a class="btn btn-dark" href="Bitacora.php">Volver</a>
        <input class="btn btn-secondary" type="submit" value="Registrar">
        
        
        </form>

</section>
    <!-- Fin contenido -->

    <?php
include '../includes/footer.php'
?>
</body>
</html>