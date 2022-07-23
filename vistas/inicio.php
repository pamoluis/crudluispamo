<?php
session_start();

if($_SESSION["s_usuario"] === "null"){
    header("Location: ../index.php");
}

?>
<!doctype html>

<html>

<head>
      <link rel="shortcut icon" href="#" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login</title>
    
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="../estilos.css">

        <link rel="stylesheet" href="../plugins/sweetalert2/sweetalert2.min.css">
        
       

</head>

<body>
    <div class="p-6 mb-3 ms-3 me-3 bg-light rounded-1">
    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div class="jumbotron">
                    
                    <h1 class="display-4 text-center">¡Bienvenido!<h1>
                        <h2 class="text-center"> Usuario: <?php echo $_SESSION["s_usuario"]; ?></h2>
                        <p class="lead text-center">Estas en la pagina de inicio, luego de un LOGIN correcto.</p>
                        <hr class = "my=4">
                        <a class="btn btn-danger btn-lg m-2" href="../db/logout.php" roles="button">Cerrar Session</a>
                </div>
            </div>

        </div>
    </div>
    </div>
<script src="../jquery/jquery-3.3.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../popper/popper.min.js"></script>

<script src="../plugins/sweetalert2/sweetalert2.all.min.js"></script>
<script src="../codigo.js"></script>


</body>

</html>