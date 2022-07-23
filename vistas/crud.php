<?php

include "../db/conexion.php";

$user=new ApptivaDB();

$u=$user->Buscar("personas","1");

//$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>

<html>

<head>
      <link rel="shortcut icon" href="#" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login</title>
 
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="crudestilos.css">

        <link rel="stylesheet" href="../plugins/sweetalert2/sweetalert2.min.css">

        <link rel="stylesheet" href="../datatables/DataTables-1.12.1/css/dataTables.bootstrap5.min.css">

        <link rel="stylesheet" href="../datatables/datatables.min.css">
        
       

</head>

<body>
    
<header>
         <h4 class="text-center text-light">Registro de PERSONAS</h4> 
     </header>    
      
    <div class="container">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btnNuevo" type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalCRUD">Nuevo</button>    
            </div>    
        </div>    
    </div>    
    <br>  
    <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>País</th>                                
                                <th>Edad</th>  
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php                            
                            foreach($u as $dat) {                                                        
                            ?>
                            <tr>
                                <td><?php echo $dat['id'] ?></td>
                                <td><?php echo $dat['nombre'] ?></td>
                                <td><?php echo $dat['pais'] ?></td>
                                <td><?php echo $dat['edad'] ?></td>    
                                <td></td>
                            </tr>
                            <?php
                                }
                            ?>                                
                        </tbody>        
                       </table>                    
                    </div>
                </div>
        </div>  
    </div>  
    <div class="container">
        <div class="row">
            <div class="col-lg-12">            
            <a class="btn btn-danger btn-lg m-2" href="../db/logout.php" roles="button">Cerrar Session</a>    
            </div>    
        </div>    
    </div>   
      
<!--Modal para CRUD-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

        <form id="formPersonas">    

            <div class="modal-body">

                <div class="form-group">
                <label for="nombre" class="col-form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre">
                </div>

                <div class="form-group">
                <label for="pais" class="col-form-label">País:</label>
                <input type="text" class="form-control" id="pais">
                </div> 

                <div class="form-group">
                <label for="edad" class="col-form-label">Edad:</label>
                <input type="number" class="form-control" id="edad">
                </div>       

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>

        </form>    
        </div>
    </div>
</div>  


<script src="../jquery/jquery-3.3.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../popper/popper.min.js"></script>
<script src="../plugins/sweetalert2/sweetalert2.all.min.js"></script>

<script src="../datatables/datatables.min.js"></script>
<script src="main.js"></script>

</body>

</html>