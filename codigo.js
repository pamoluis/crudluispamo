$('#formlogin').submit(function(e){
    e.preventDefault();
    var usuario = $.trim($("#usuario").val());
    var password = $.trim($("#password").val());

    if (usuario.length =="" || password=="") {
        Swal.fire({
            icon:'warning',
            title:'campos vacios',
        });
        return false;
    }else{
            $.ajax({
                url:"db/login.php",
                type:"POST",
                dataType:"json",
                data:{usuario:usuario,password:password},
                success:function(data){
                    if (data == "null") {
                    swal.fire({
                        icon:"error",
                        title:"Datos incorrectos, Ingrese nuevos datos",
                    });
                    }  else {
                        swal.fire({
                            icon:"success",
                            title:"Conexion exitosa",
                            confirmButtonColor:"#3885d6",
                            confirmButtonText:"Ingresar",
                        }).then((result) => {
                            if (result.value) {
                                window.location.href = "vistas/crud.php";
                            }
                        })

                    }
                }
            });
    }

});
