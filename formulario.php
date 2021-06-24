<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Formulario</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4 mx-auto my-5">
             <form action="hack.php" method="POST">
                 <div>
                     <input type="text" class="form-control" placeholder="correo electronico" name="correo">
                 </div>
                  <div>
                      <input type="text" class="form-control" placeholder="contraseña" name="contra">
                  </div>
                  <button class="btn btn-primary form-control">
                       iniciar sesion 
                  </button>
             </form>
            </div>
        </div>

    </div>
    
</body>
</html>

